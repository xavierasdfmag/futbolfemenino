<?php

/**
 * @file
 * Advertisement nodes pages and forms.
 *
 * Copyright (c) 2005-2009.
 *   Jeremy Andrews <jeremy@tag1consulting.com>
 */

function theme_node_ad($variables) {
  $node = $variables['node'];
  $yield_form = isset($variables['yield_form']) ? $variables['yield_form'] : TRUE;
  $output = '';

  if (ad_check_permission($node, 'access statistics')) {
    $output = theme('ad_status_display', array('node' => $node));
    $output .= theme('ad_statistics_display', array('statistics' => ad_statistics($node->nid)));
  }
  if (ad_check_permission($node, 'access click history')) {
    $header = array(
      array('data' => t('Time'), 'field' => 'timestamp', 'sort' => 'desc'),
      array('data' => t('User'), 'field' => 'uid'),
      array('data' => t('URL where clicked'), 'field' => 'url'),
    );
    if (function_exists('click_filter_status_text') && user_access('view filtered clicks')) {
      $header[] = array('data' => t('Status'), 'field' => 'status');
    }
    $header[] = '';

    if (isset($node->nid) && $node->nid > 0) {

      $result = db_select('ad_clicks', 'clicks')
      ->extend('PagerDefault')->extend('TableSort') // make sure to call extend() before other calls.
      ->limit(25)
      ->condition('aid', $node->nid)
      ->orderByHeader($header)
      ->fields('clicks', array('cid', 'timestamp', 'uid', 'status', 'hostname', 'url'))
      ->execute();

      foreach ($result as $ad) {
        if (module_exists('click_filter') && $ad->status != CLICK_VALID) {
          // Only show filtered clicks to users with permission to view them.
          if (!user_access('view filtered clicks')) {
            continue;
          }
        }
        if (strlen($ad->url) > 40) {
          $url = substr($ad->url, 0, 37) .'...';
        }
        else {
          $url = $ad->url;
        }
        $row = array();
        $click_user = user_load($ad->uid);
        $row[] = format_date($ad->timestamp, 'custom', 'M j H:i');
        $row[] = theme('username', array('name' => $click_user->name));
        $row[] = l($url, $ad->url);
        if (function_exists('click_filter_status_text') && user_access('view filtered clicks')) {
          $row[] = click_filter_status_text($ad->status);
        }
        $row[] = '['. l(t('details'), 'node/'. $node->nid .'/details/'. $ad->cid) .']';
        $rows[] = $row;
      }

      if (empty($rows)) {
        $click_history = '<p>'. t('There are no clicks yet.') .'</p>';
      }
      else {
        $click_history = theme('table', array('header' => $header, 'rows' => $rows));
      }

      $click_history .= theme('pager');
      $output .= theme('ad_box', array('title' => t('Click history'), 'content' => $click_history));
    }
  }
  return $output;
}

/**
 * Calculate statistics for the given advertisements.
 * TODO: Introduce caching to make this more efficient.
 */
function ad_statistics($aid) {
  // Gek global statistics.
  $statistics['global']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view'", array(':aid' => $aid))->fetchField();
  $statistics['global']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click'", array(':aid' => $aid))->fetchField();

  // No sense in making further queries if the ad has no global statistics.
  if (!$statistics['global']['views'] && !$statistics['global']['clicks']) {
    return $statistics;
  }

  // Get statistics for this year and last year.
  $this_year = date('Y000000');
  $last_year = date('Y') - 1 .'000000';
  $statistics['last_year']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date >= :mindate AND date <= :maxdate",
                                      array(':aid' => $aid, ':mindate' => $last_year, ':maxdate' => $this_year))->fetchField();
  $statistics['last_year']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date >= :mindate AND date <= :maxdate",
                                      array(':aid' => $aid, ':mindate' => $last_year, ':maxdate' => $this_year))->fetchField();
  $statistics['this_year']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date >= :mindate",
                                      array(':aid' => $aid, ':mindate' => $this_year))->fetchField();
  $statistics['this_year']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date >= :mindate",
                                      array(':aid' => $aid, ':mindate' => $this_year))->fetchField();

  // No sense in making further queries if the ad has no statistics this year.
  if (!$statistics['this_year']['views'] && !$statistics['this_year']['clicks']) {
    return $statistics;
  }

  // Get statistics for this month and last month.
  $this_month = date('Ym0000');
  $last_month = date('m') - 1;
  if ($last_month == 0) {
    $last_month = date('Y') - 1 .'120000';
  }
  else {
    $last_month = date('Y') . ($last_month < 10 ? '0' : '') . $last_month .'0000';
  }
  $statistics['last_month']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date >= :mindate AND date <= :maxdate",
                                        array(':aid' => $aid, ':mindate' => $last_month, ':maxdate' => $this_month))->fetchField();
  $statistics['last_month']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date >= :mindate AND date <= :maxdate",
                                        array(':aid' => $aid, ':mindate' => $last_month, ':maxdate' => $this_month))->fetchField();
  $statistics['this_month']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date >= :mindate",
                                        array(':aid' => $aid, ':mindate' => $this_month))->fetchField();
  $statistics['this_month']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date >= :mindate",
                                        array(':aid' => $aid, ':mindate' => $this_month))->fetchField();

  // No sense in making further queries if the ad has no statistics this month.
  if (!$statistics['this_month']['views'] && !$statistics['this_month']['clicks']) {
    return $statistics;
  }

  // Get statistics for this week.
  $this_week_start = date('Ymd00', time() - 60*60*24*6);
  $statistics['this_week']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date > :mindate",
                                      array(':aid' => $aid, ':mindate' => $this_week_start))->fetchField();
  $statistics['this_week']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date > :mindate",
                                      array(':aid' => $aid, ':mindate' => $this_week_start))->fetchField();

  // No sense in making further queries if the ad has no statistics this week.
  if (!$statistics['this_week']['views'] && !$statistics['this_week']['clicks']) {
    return $statistics;
  }

  // Get statistics for yesterday and today.
  $yesterday_start = date('Ymd00', time() - 60*60*24);
  $yesterday_end = date('Ymd24', time() - 60*60*24);
  $today_start = date('Ymd00', time());
  $statistics['yesterday']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date >= :mindate AND date <= :maxdate",
                                        array(':aid' => $aid, ':mindate' => $yesterday_start, ':maxdate' => $yesterday_end))->fetchField();
  $statistics['yesterday']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date >= :mindate AND date <= :maxdate",
                                        array(':aid' => $aid, ':mindate' => $yesterday_start, ':maxdate' => $yesterday_end))->fetchField();
  $statistics['today']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date >= :mindate",
                                        array(':aid' => $aid, ':mindate' => $today_start))->fetchField();
  $statistics['today']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date >= :mindate",
                                        array(':aid' => $aid, ':mindate' => $today_start))->fetchField();

  // No sense in making further queries if the ad has no statistics today.
  if (!$statistics['today']['views'] && !$statistics['today']['clicks']) {
    return $statistics;
  }

  // Get statistics for this hour and the last hour.
  $last_hour = date('YmdH', time() - 60*60);
  $this_hour = date('YmdH', time());
  $statistics['last_hour']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date = :date",
                                      array(':aid' => $aid, ':date' => $last_hour))->fetchField();
  $statistics['last_hour']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date = :date",
                                      array(':aid' => $aid, ':date' => $last_hour))->fetchField();
  $statistics['this_hour']['views'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'view' AND date = :date",
                                      array(':aid' => $aid, ':date' => $this_hour))->fetchField();
  $statistics['this_hour']['clicks'] = (int)db_query("SELECT SUM(count) FROM {ad_statistics} WHERE aid = :aid AND action = 'click' AND date = :date",
                                      array(':aid' => $aid, ':date' => $this_hour))->fetchField();

  return $statistics;
}

function theme_ad_statistics_display($variables) {
  $statistics = $variables['statistics'];
  $header = array('', t('Impressions'), t('Clicks'), t('Click-thru'));
  $rows = array();

  $data = array(
   'this_hour' => t('This hour'),
   'last_hour' => t('Last hour'),
   'today' => t('Today'),
   'yesterday' => t('Yesterday'),
   'this_week' => t('Last seven days'),
   'this_month' => t('This month'),
   'last_month' => t('Last month'),
   'this_year' => t('This year'),
   'last_year' => t('Last year'),
   'global' => t('All time')
  );

  foreach ($data as $key => $value) {
    if (isset($statistics[$key]) && (isset($statistics[$key]['views']) || isset($statistics[$key]['clicks']) || $key == 'global')) {
      $rows[] = array(
        array('data' => $value),
        array('data' => (int)$statistics[$key]['views']),
        array('data' => (int)$statistics[$key]['clicks']),
        array('data' => $statistics[$key]['views'] ? sprintf('%1.2f', ((int)$statistics[$key]['clicks'] / (int)$statistics[$key]['views']) * 100) .'%' : '0.00%'),
      );
    }
  }
  if (empty($rows) || (!$statistics['global']['views'] && !$statistics['global']['clicks'])) {
    $statistics = '<p>'. t('There are currently no statistics for this advertisement.') .'</p>';
  }
  else {
    $statistics = theme('table', array('header' => $header, 'rows' => $rows));
  }

  return theme('ad_box', array('title' => t('Statistics'), 'content' => $statistics));
}

/**
 * Display details about a specific click.
 */
function ad_click_details($node, $cid) {
  drupal_set_breadcrumb(array(l(t('Home'), NULL), l(check_plain($node->title), 'node/'. $node->nid)));
  if ($click = db_query('SELECT * FROM {ad_clicks} WHERE cid = :cid', array(':cid' => $cid))->fetchObject()) {
    $ad = node_load($click->aid);
    $account = user_load($click->uid);
    $rows = array(
      array(
        array('data' => t('Time'), 'header' => TRUE),
        format_date($click->timestamp, 'custom', 'D F j, Y h:i a'),
      ),
      array(
        array('data' => t('User'), 'header' => TRUE),
        theme('username', array('name' => $account)),
      ),
      array(
        array('data' => t('IP Address'), 'header' => TRUE),
        $click->hostname,
      ),
      array(
        array('data' => t('User Agent'), 'header' => TRUE),
        check_plain($click->user_agent),
      ),
      array(
        array('data' => t('URL'), 'header' => TRUE),
        l($click->url, $click->url),
      ),
      array(
        array('data' => t('Advertisement'), 'header' => TRUE),
        $ad->ad,
      )
    );
    if (function_exists('click_filter_status_text') && user_access('view filtered clicks')) {
      switch ($click->status) {
        case 0:
        default:
          $status = t('Not valid: this click has not been counted for unknown reasons.  This is an unexpected error.');
          break;
        case 1:
          $status = t('Valid: this is a valid click.');
          break;
        case 2:
          $status = t('Not valid: this click has not been counted because another click by the same IP address was already counted.');
          break;
        case 3:
          $status = t('Not valid: this click has not been counted because it was generated by an owner of the advertisement.');
          break;
        case 4:
          $status = t('Not valid: this click has not been counted because it was generated by a user in a filtered role.');
          break;
        case 5:
          $status = t('Not valid: this click has not been counted because it was generated by an automated "bot".');
          break;
      }
      $rows[] = array(array('data' => t('Status'), 'header' => TRUE), $status);
    }
    $output = theme('table', array('headers' => array(), 'rows' => $rows));
  }
  return $output;
}


function ad_activity_details($node) {
  $output = '';
  drupal_set_breadcrumb(array(l(t('Home'), NULL), l(check_plain($node->title), 'node/'. $node->nid)));

  if (ad_check_permission($node, 'access click history')) {
    $header = array(
      array('data' => t('Date'), 'field' => 'date', 'sort' => 'desc'),
      array('data' => t('Action'), 'field' => 'action')
    );

    if (isset($node->nid) && $node->nid > 0) {
      $result = db_select('ad_statistics', 'stats')
      ->extend('PagerDefault')->extend('TableSort') // make sure to call extend() before other calls.
      ->limit(25)
      ->condition('action', array('view', 'click'), 'NOT IN')
      ->condition('aid', $node->nid)
      ->orderByHeader($header)
      ->fields('stats')
      ->execute();

      foreach ($result as $ad) {
        $row = array();
        $row[] = format_date(strtotime($ad->date . '00'), 'large');
        $row[] = $ad->action;
        $rows[] = $row;
      }

      if (empty($rows)) {
        $output = '<p>'. t('There is no activity yet.') .'</p>';
      }
      else {
        $output = theme('table', array('header' => $header, 'rows' => $rows));
      }

      $output .= theme('pager');
    }
  }

  return theme('ad_box', array('title' => t('Activity'), 'content' => $output));
}
