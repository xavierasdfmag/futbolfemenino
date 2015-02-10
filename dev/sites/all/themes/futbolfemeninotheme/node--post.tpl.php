<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

  
  <div class="row">
    <div class="small-12 columns sec-left single-cabecera">
      <p class="single-tag">SUB 20</p>
      <p class="single-title"><?php print $title; ?></p>
      <p class="single-llamada">Entrenan tanto que sus papas piensan que están de compras. Inefables.</p>
    </div>
  </div>

  <div class="row">


    <div class="small-12 large-8 columns sec-left">
      <div class="row">
        <div class="small-12 columns single-img-portada">
          <img src="../img/not-type-one.png"> 
        </div>
        <div class="small-12 columns single-contenido">

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium, justo et volutpat ultricies, ante elit fringilla orci, at aliquet neque diam et dolor. Nullam suscipit blandit varius. Phasellus euismod aliquam odio. Nunc fermentum magna at varius sollicitudin. In hac habitasse platea dictumst. Nam vestibulum lacus quis nibh faucibus ullamcorper. Proin sit amet dignissim augue, ac vestibulum neque. Pellentesque egestas urna vel turpis scelerisque, ac fermentum mauris iaculis. Proin lorem arcu, hendrerit id tristique faucibus, eleifend nec nunc. Fusce scelerisque sed quam placerat efficitur. Morbi sed nunc nibh. Praesent fermentum massa sed sagittis aliquet. In imperdiet lorem erat, rhoncus semper sapien porttitor ut. Phasellus pulvinar vel magna vel malesuada.</p>

          <p>In mollis egestas aliquam. In vitae posuere massa. Donec tempus mauris ligula, in commodo quam gravida eget. Praesent sit amet varius dui, aliquam vestibulum dui. Praesent vitae elementum est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus nisl, maximus et elit ut, facilisis tincidunt lectus. Sed sit amet vestibulum massa. Pellentesque bibendum sagittis nisl, nec gravida nunc volutpat et. Aliquam erat volutpat. Aenean eget libero at orci pellentesque dictum. Nunc scelerisque lectus a commodo euismod. Sed arcu dui, elementum at turpis ut, scelerisque sagittis enim.</p>

          <p>Quisque mi odio, viverra sed malesuada euismod, feugiat id leo. Nullam lacus felis, lobortis ut luctus varius, sodales vitae magna. Ut dui orci, congue eu massa vel, blandit eleifend sapien. Curabitur egestas ut arcu eget tincidunt. Cras tincidunt lectus id massa venenatis fringilla eget a nisl. Mauris iaculis et libero sit amet dictum. Vestibulum nunc sem, auctor rhoncus sagittis nec, aliquet vel enim. Praesent quam lectus, mollis non est ut, maximus tincidunt mi. Maecenas at elementum velit. Quisque ullamcorper nulla in magna accumsan lacinia. Quisque iaculis scelerisque erat. Nulla nisl metus, condimentum blandit elit at, scelerisque consectetur nunc.</p>

          <img src="../img/not-type-one.png">       
          
        </div>


      </div>

    </div>

    <div class="small-12 medium-12 large-4 columns">
      <div class="row show-for-large-up">
        <div class="large-12 columns">
          <div class="row suscribir-large">
            <div class="large-12 columns ">
              <h4>Únete a nuestra tribuna</h4>
              <p>Recibe lo mejor de futbolfemenino.pe en tu correo</p>            
            </div>
            <div class="large-7 columns padding-right-cero"><input type="text"></input></div>
            <div class="large-5 columns padding-left-cero"><a href="#" class="button small">Suscribir</a></div>
          </div>
        </div>

        <div class="large-12 columns text-right">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- BlunBlun_300x250 -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:300px;height:600px"
               data-ad-client="ca-pub-3000094281853126"
               data-ad-slot="7900040372"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
      </div>

      <div class=" row show-for-medium-only text-center">
        <div class="small-12 columns">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- BlunBlun_728x90 -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:728px;height:90px"
               data-ad-client="ca-pub-3000094281853126"
               data-ad-slot="9376773571"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>   
        </div>     
      </div>

      <div class="row noticia-relacionada">
        <div class="small-6 medium-4 large-12 columns">
          <figure>
              <img src="../img/not-sponsor-1.png">
            <figcaption>
            </figcaption>
          </figure>       
          <p class="llamada">FREE STYLE</p>
          <p class="title"> Esta mujer puede hacer más de quinientas pataditas en un sólo intento</p>
        </div>
        <div class="small-6 medium-4 large-12 columns">
          <figure>
              <img src="../img/not-sponsor-2.png">
            <figcaption>
            </figcaption>
          </figure>       
          <p class="llamada">GOLES SON AMORES</p>
          <p class="title">Viste el gol más rápido del fútbol femenino? Son asombrosos</p>          
        </div>
        <div class="small-6 medium-4 large-12 columns">
          <figure>
              <img src="../img/not-sponsor-2.png">
            <figcaption>
            </figcaption>
          </figure>
          <p class="llamada">GOLES SON AMORES</p>
          <p class="title">Viste el gol más rápido del fútbol femenino? Son asombrosos</p>          
        </div>        
      </div>


    </div>
    

  </div>