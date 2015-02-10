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
  
<body>
  <div class="row show-for-large-up">
    <figure class="portada">
      <img src="../img/portada.jpg">
      <figcaption>
        <div class="row">
          <div class="medium-4 columns portada">
            <p class="tag">BALON DE ORO</p>
            <p class="title">Las jugadas de Nadine Kessler, la mejor del mundo</p>
            
          </div>
          <div class="medium-3 columns right tentativas">
            <div class="row">
              <div class="small-12 columns tentativa">
                <p class="tag">CR7 MEMES</p>
                <p class="title">Añade la sabiduría Ronaldo a tus chats</p>
              </div>
            </div>
            <div class="row">
              <div class="small-12 columns tentativa">
                <p class="tag">CR7 EL CUERPO</p>
                <p class="title">El atleta más perfecto del siglo veintiuno (por ahora)</p>
              </div>
            </div>
            <div class="row">
              <div class="small-12 columns tentativa">
                <p class="tag">NEUER ARQUERO INMORTAL</p>
                <p class="title">Neuer y la tradición de los invencibles arqueros alemanes</p>
              </div>
            </div>
          </div>
        </div>
      </figcaption>
    </figure>
                    
  </div>
  <div class="row slider-portada show-for-large-up">
    <div class="small-12 columns padding-20">

      <ul class="example-orbit-content" data-orbit>
        <li data-orbit-slide="headline-1">
          <div class="row">
            <div class="small-4 columns">
              <div class="row">
                <div class="small-4 columns imagen">
                  <img src="../img/not-small-1.png">
                </div>
                <div class="small-8 columns noticia">
                  <p class="llamada">LIVERPOOL VS MANCHESTER</p>
                  <p class="titulo">El partido de despedida del gran capitan Gerrard</p>
                </div>
              </div>
            </div>
            <div class="small-4 columns">
              <div class="row">
                <div class="small-4 columns imagen">
                  <img src="../img/not-small-2.png">
                </div>
                <div class="small-8 columns noticia">
                  <p class="llamada">PROMOVIDA POR NIKE</p>
                  <p class="titulo">Compra tu zapatillas y llévate tus medias a juego</p>
                </div>
              </div>
            </div>
            <div class="small-4 columns">
              <div class="row">
                <div class="small-4 columns imagen">
                  <img src="../img/not-small-3.png">
                </div>
                <div class="small-8 columns noticia">
                  <p class="llamada">NOCHE CREMA</p>
                  <p class="titulo">Una fiesta para toda la familia hincha de universitario</p>
                </div>
              </div>
            </div>                    
          </div>
        </li>
        <li data-orbit-slide="headline-2">
          <div class="row">
            <div class="small-4 columns">
              <div class="row">
                <div class="small-4 columns imagen">
                  <img src="../img/not-small-1.png">
                </div>
                <div class="small-8 columns noticia">
                  <p class="llamada">LIVERPOOL VS MANCHESTER</p>
                  <p class="titulo">El partido de despedida del gran capitan Gerrard</p>
                </div>
              </div>
            </div>
            <div class="small-4 columns">
              <div class="row">
                <div class="small-4 columns imagen">
                  <img src="../img/not-small-2.png">
                </div>
                <div class="small-8 columns noticia">
                  <p class="llamada">PROMOVIDA POR NIKE</p>
                  <p class="titulo">Compra tu zapatillas y llévate tus medias a juego</p>
                </div>
              </div>
            </div>
            <div class="small-4 columns">
              <div class="row">
                <div class="small-4 columns imagen">
                  <img src="../img/not-small-3.png">
                </div>
                <div class="small-8 columns noticia">
                  <p class="llamada">NOCHE CREMA</p>
                  <p class="titulo">Una fiesta para toda la familia hincha de universitario</p>
                </div>
              </div>
            </div>                    
          </div>
        </li>
      </ul>  
    </div>
  </div>

  <div class="row contenedor">
    <!-- PARTE IZQUIERDA -->
    <div class="small-12 medium-12 large-8 columns sec-left">
      <!-- SECCION DE NOTICIAS PORTADA TIPO UNO -->
      <div class="row seccion-type-one hide-for-large-up">
        <div class="small-12 columns">
          <p class="title-section">BALON DE ORO</p>
        </div>
        <div class="small-12 medium-8 columns">
          <h3 class="title-news">Las jugadas de Nadine Kessler, la mejor del mundo</h3>
          <p class="bajada">Entrenan tanto que sus papas piensan que están de compras. Inefables.</p>
          <img src="../img/portada.jpg">
          
        </div>
        <div class="small-12 medium-4 columns">
          <ul>
            <li><a href="#">Añade la sabiduría Ronaldo a tus chats</a></li>
            <li><a href="#">El atleta más perfecto del siglo veintiuno (por ahora)</a></li>
            <li><a href="#">Neuer y la tradición de los invencibles arqueros alemanes</a></li>
          </ul>
        </div>
      </div>    
      <!-- SECCION DE NOTICIAS TIPO UNO -->
      <div class="row seccion-type-one">
        <div class="small-12 columns">
          <p class="title-section">SUB 20</p>
        </div>
        <div class="small-12 medium-8 columns">
          <h3 class="title-news">Las señoritas de la sub 20 entrenan sin descanso en la videna</h3>
          <p class="bajada">Entrenan tanto que sus papas piensan que están de compras. Inefables.</p>
          <img src="../img/not-type-one.png">
          
        </div>
        <div class="small-12 medium-4 columns">
          <ul>
            <li><a href="#">Pepinos encurtidos para combatir calambre, aprende a prepararlo</a></li>
            <li><a href="#">Una guía de licras para evitar estiramiento inútiles</a></li>
            <li><a href="#">Qué hacen las profesionales para mantenerse en forma antes de un partido</a></li>
          </ul>
        </div>
      </div>
      <!-- SECCION DE NOTICIAS TIPO DOS -->
      <div class="row seccion-type-two">
        <div class="small-12 columns">
          <p class="title-section">PROMOVIDA POR NIKE</p>
        </div>      
        <div class="small-12 columns">
          <img src="../img/not-type-two.png">
        </div>
        <div class="small-12 medium-7 columns">
          <h3 class="title-news">Nike celebra a las mujeres deportivas con una nueva línea de pantalonetas</h3>
        </div>
        <div class="small-12 medium-5 columns">
          <p class="bajada">Es una edición limitada exclusiva para Perú, Chile y Bolivia.</p>
        </div>
      </div>
      <!-- SECCION DE NOTICIAS TIPO TRES -->
      <div class="row seccion-type-three">
        <div class="small-12 columns">
          <p class="title-section">MUNDIAL CANADÁ 2015</p>
        </div>        
        <div class="small-8 columns">
          <img src="../img/not-type-three.jpg">  
          <div class="row">
            <div class="small-6 columns">
              <ul>
                <li>
                  <a href="#">Un mundial sin importar el género no puede jugarse en canchas sintéticas</a>
                </li>
              </ul>
            </div>
            <div class="small-6 columns">
              <ul>
                <li>
                  <a href="#">Las selecciones a las que debemos mirar para Canadá 2015.</a>
                </li>
              </ul>
            </div>
          </div>

          
        </div>
        <div class="small-4 columns">
          <h3 class="title-news">Todo lo que necesitas saber del mundial de Canadá 2015 en esta infografía</h3>
          <p class="bajada">Desde los estadios hasta los equipos representantes.</p>
    
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

      <div class="show-for-medium-only text-center">
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


  </div>

  <div class="row">
    <div class="small-12 columns sponsor-banner">
      <img src="../img/banner-sponsor.jpg">
    </div>
  </div>

  <div class="row sponsor-news">
    <div class="small-6 medium-4 columns">
      <figure>
          <img src="../img/not-sponsor-1.png">
        <figcaption>
        </figcaption>
      </figure>
      <p class="llamada">FREE STYLE</p>
      <p class="titulo">Esta mujer puede hacer más de quinientas pataditas en un sólo intento</p>
    </div>
    <div class="small-6 medium-4 columns">
      <figure>
          <img src="../img/not-sponsor-2.png">
        <figcaption>
        </figcaption>
      </figure>
      <p class="llamada">GOLES SON AMORES</p>
      <p class="titulo">Viste el gol más rápido del fútbol femenino? Son asombrosos</p>
    </div>      
    <div class="small-6 medium-4 columns">
      <figure>
          <img src="../img/not-sponsor-2.png">
        <figcaption>
        </figcaption>
      </figure>
      <p class="llamada">GOLES SON AMORES</p>
      <p class="titulo">Viste el gol más rápido del fútbol femenino? Son asombrosos</p>
    </div>    
    
  </div>



</body>
</html>

<?php include 'includes/footer.php';?>
