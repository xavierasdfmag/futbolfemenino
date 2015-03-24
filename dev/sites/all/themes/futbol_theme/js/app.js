$(document).foundation({

      orbit: {
            pause_on_hover: true, // Pauses on the current slide while hovering
            resume_on_mouseout: true, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
            next_on_click: true, // Advance to next slide on click
            animation_speed: 500, // Sets the amount of time in milliseconds the transition between slides will last
            stack_on_small: false,
            navigation_arrows: true,
            slide_number: false,
            slide_number_text: 'of',
            container_class: 'orbit-container',
            stack_on_small_class: 'orbit-stack-on-small',
            next_class: 'orbit-next', // Class name given to the next button
            prev_class: 'orbit-prev', // Class name given to the previous button
            timer_container_class: 'orbit-timer', // Class name given to the timer
            timer_paused_class: 'paused', // Class name given to the paused button
            timer_progress_class: 'orbit-progress', // Class name given to the progress bar
            slides_container_class: 'orbit-slides-container', // Class name given to the slide container
            preloader_class: 'preloader', // Class given to the perloader
            slide_selector: 'li', // Default is '*' which selects all children under the container
            bullets_container_class: 'orbit-bullets',
            bullets_active_class: 'active', // Class name given to the active bullet
            slide_number_class: 'orbit-slide-number', // Class name given to the slide number
            caption_class: 'orbit-caption', // Class name given to the caption
            active_slide_class: 'active', // Class name given to the active slide
            orbit_transition_class: 'orbit-transitioning',
            bullets: false, // Does the slider have bullets visible?
            circular: true, // Does the slider should go to the first slide after showing the last?
            timer: true, // Does the slider have a timer active? Setting to false disables the timer.
            swipe: false
      },
      reveal: {
            animation: 'fadeAndPop',
            animation_speed: 100,
            close_on_background_click: true,
            dismiss_modal_class: 'close-reveal-modal',
            bg_class: 'reveal-modal-bg',
            root_element: 'body'
      }  


});

(function ($) {
  Drupal.behaviors.viewsInfiniteScroll = {
    attach: function (context, settings) {
      $(function(){


        var $container = $('div.recursivo');


        $container.imagesLoaded( function(){
          $container.infinitescroll({
            navSelector  : 'ul.pager',    // selector for the paged navigation
            nextSelector : 'li.pager-next a',  // selector for the NEXT link (to page 2)
            itemSelector : 'div.container-type-one .content',     // selector for all items you'll retrieve
            loading: {
              finishedMsg: 'No more pages to load.',
              img: Drupal.settings.basePath + 'sites/all/themes/futbol_theme/images/loading.gif'
            }
          })
        })
      });
    }
  };
})(jQuery);