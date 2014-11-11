<?php include('includes/proyects.inc');
   require_once 'inc/Mobile_Detect.php';
   $detect = new Mobile_Detect; 
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>


   <!--- Basic Page Needs
   ================================================== -->
	<meta charset="utf-8" />
	<title>Bauprint</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
   <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

   <?php
   // Exclude tablets.
   if( $detect->isMobile() && !$detect->isTablet() ){
   ?>
      <link rel="stylesheet" href="css/style.mobile.css" type="text/css" media="screen" />
   <?php
   }
   ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" >
   <script type="text/javascript" src="js/modernizr.js"></script>


</head>

<body data-spy="scroll" data-target="#nav-wrap">

   <!-- Header
   ================================================== -->
   <header class="mobile">

      <div class="row">

         <div class="col full">

            <div class="logo">
               <a href="#"><img alt="" src="images/logo.png" /></a>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

               <ul id="nav" class="nav">
	               <li><a href="#intro">PRESENTACIÓN</a></li>
	               <li><a href="#services">SERVICIOS</a></li>
	               <li><a href="#portfolio">PROYECTOS</a></li>
                  <li><a href="#contact">CONTACTO</a></li>
               	<li><a href="/ftp" target="blank"><img src="images/ftp_boton.png" />&nbsp;&nbsp;<span>FTP CLIENTES</span></a></li>
               </ul>

            </nav>

         </div>

      </div>

   </header> <!-- Header End -->


   <!-- Intro Section
   ================================================== -->
   <section id="intro" class="row sp" style="
    ">
   <div class="intro-cont col g-8" style="position:fixed;" >
      <div id="engrane-bg" class="w-100 absolute" data-0="transform[quadratic]:translateY(-10%);"   data-900="transform[quadratic]:translateY(2%);" ></div>
      <div id="engrane-1" class="w-100 absolute" data-0="transform[quadratic]:rotate(0deg);" data-900="transform[quadratic]:rotate(268deg);"></div>
      <div id="engrane-2" class="w-100 absolute" data-0="transform[quadratic]:rotate(0deg), translateY(-10%);" data-900="transform[quadratic]:rotate(-360deg), translateY(-30%);"></div>
      <div id="logote-bg" class="w-100 absolute" data-0="transform[quadratic]:translateY(-10%);"   data-900="transform[quadratic]:translateY(-30%);" ></div>
   </div>
   <div class="col g-2" style="float: right;">&nbsp;</div>

   <div class="intro-cont texto-intro col g-4" style="float: right;">
	   	<div>
	   		<h4 class="verde">BIENVENIDO</h4>
			<h3>Bauprint es una empresa 
			100% mexicana, dedicada a soluciones en diseño industrial e impresión.</h3>
			<p>Líder en el medio, especializados en soluciones innovadoras para nuestros clientes en proyectos con la más alta calidad. </p>
			<p>Contamos con equipo y personal altamente capacitado, comprometido con la excelencia, calidad y servicio.</p>
			<p class="verde">Te invitamos a conocernos</p>
	   	</div>
		
   </div>

      <div id="services-head"><img src="images/services.png"  style="width: 100%;"/></div>
   </section> <!-- Intro Section Enddata-bottom-top="transform[quadratic]:translateY(10%);"   data-70-top="transform[quadratic]:translateY(-02%);"-->


   <!-- Services Section
   ================================================== -->
   <section id="services">
       <div class="row section-head">

         <div class="col one-third parallax-1">
            <img src="images/artes.png" alt="artes gráficas" />
         </div>

         <div class="col two-thirds parallax-1-1">
            <img src="images/parallax/gradient-4.png" class="parallax-disenio" />
            <img src="images/parallax/gradient-3.png" class="parallax-disenio" />
            <img src="images/parallax/pantalla.png" class="parallax-disenio" />
            <img src="images/parallax/impresora.png" class="parallax-disenio"  />
            <img src="images/parallax/pantone.png" class="parallax-disenio" />
            <img src="images/parallax/print-2.png" class="parallax-disenio" />
            <img src="images/parallax/gradient-2.png" class="parallax-disenio" />
            <img src="images/parallax/print-1.png" class="parallax-disenio" />
            <img src="images/parallax/gradient-1.png" class="parallax-disenio" />
         </div>

      </div>

       <div class="row section-head" style="padding-top:50px;">


         <div class="col two-thirds parallax-2">
            <div class="parallax-disenio tuerca_1"></div>
            <div class="parallax-disenio camioneta"></div>
            <div class="parallax-disenio martillo"></div>
            <div class="parallax-disenio tuerca_2"></div>
            <div class="parallax-disenio engranes"></div>
            <div class="parallax-disenio metro_1"></div>
            <div class="parallax-disenio taladro"></div>
            <div class="parallax-disenio tuerca_3"></div>
            <div class="parallax-disenio metro_2"></div>
            <!-- <img src="images/parallax/engrane-3.png" class="parallax-disenio tuerca_1" />
            <img src="images/parallax/engrane-2.png" class="parallax-disenio camioneta" />
            <img src="images/parallax/reloj.png" class="parallax-disenio martillo" />
            <img src="images/parallax/martillo.png" class="parallax-disenio" />
            <img src="images/parallax/camion.png" class="parallax-disenio" />
            <img src="images/parallax/engrane-1.png" class="parallax-disenio" />
            <img src="images/parallax/taladro.png" class="parallax-disenio" />
            <img src="images/parallax/flexometro.png" class="parallax-disenio" />
            <img src="images/parallax/flexometro.png" class="parallax-disenio" /> -->
         </div>

         <div class="col one-third" style="padding-top:50px;">
            <img src="images/disenio.png" alt="diseño industrial" />
         </div>

      </div>


   </section> <!-- Services Section End -->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">
   <div id="galleryTab">
      <h2>Últimos proyectos</h2>
     <a data-filter=".MONTAJE" href="javascript:;" class="filter">MONTAJES</a>
     <a data-filter=".SEÑALAMIENTO" href="javascript:;" class="filter">SEÑALAMIENTOS</a>
     <a data-filter=".ROTULACIÓN_VEHICULAR" href="javascript:;" class="filter">ROTULACIÓN VEHICULAR</a>
     <a data-filter=".MUEBLE" href="javascript:;" class="filter">MUEBLES</a>
     <a data-filter=".STAND" href="javascript:;" class="filter">STANDS</a>
     <a data-filter="*"  href="javascript:;" class="filter current">TODOS</a>
   </div>
      <div class="row section-head">
      </div>

      <!-- <div class="row"> -->

		   <!-- Portfolio Wrapper -->

		   <div id="portfolio-wrapper">

            <?php
               $items = count($categorias);
               for ($i=0; $i < $items; $i++) {
                  $cat = $categorias[$i]['titulo'];
                  $catTitle = str_replace('_', ' ',$categorias[$i]['titulo']);
                  $pathCat = $categorias[$i]['path'];
                  $path = 'images/portfolio/'.$pathCat;
                  $catCount = $categorias[$i]['cuantas'];
                  // echo '<b>'.$cat.'-></b><br> ';
                  // echo '<b>Carpeta: '.$path.',</b><br> ';
                  ?>

                  
                  <?php
                  for ($e=1; $e <= $catCount; $e++) { 
                     $tituloA = $categorias[$i]['cuales'][$e]['titulo'];
                     $titulo = str_replace('_', ' ', $tituloA);
                     $titulo = ucwords(strtolower($titulo));
                     $pathImgs = $path.'/'.$tituloA.'/';
                     $proyectCount = $categorias[$i]['cuales'][$e]['cuantas'];
                     $thumb = $categorias[$i]['cuales'][$e]['thumb'];
                     // echo'<b>titulo: '.$titulo.',</b><br> ';
                     // echo'<b>Carpeta: '.$pathImgs.',</b><br> ';
                     // echo'<b>thumb: '.$thumb.',</b><br> ';
                     ?>
            <div class="col portfolio-item <?=$cat?>" style="background-image: url(<?php echo $pathImgs.$thumb?>);">
               <div class="item-wrap">
                  <a href="<?php echo $pathImgs.$thumb?>" title="<?=$titulo?>" class="fancybox-thumbs"  rel="<?=$tituloA?>">
                     <img src="<?php echo $pathImgs.$thumb?>" alt=""/>
                     <div class="portfolio-item-meta">
                        <h3 class="verde"><?=$titulo?></h3>
                        <h5 class="verde-oscuro"><?=$catTitle?></h5>
                     </div>
                  </a>
               </div>
            </div>

                  <?php
                     for ($o=1; $o < $proyectCount; $o++) { 
                        $img = $categorias[$i]['cuales'][$e]['cuales'][$o];
                        // echo '<b>img: '.$img.'</b><br>';
                     ?>
                     <a href="<?php echo $pathImgs.$img?>" title="<?=$titulo?>" class="fancybox-thumbs" style="display:none" rel="<?=$tituloA?>"></a>
            <?php
                     }
                  }
               }
            ?>


		   </div> <!-- Portfolio Wrapper End -->


		<!-- </div> End Row -->


   </section> <!-- Portfolio End -->



    <!-- Contact Section
   ================================================== -->
   <section id="contact">
   	<div class="row">
         <div class="col g-12">
         	<br>
         	<br>
            <h2 style="color: white !important;">En Bauprint siempre estamos para servirte. <span class="verde">Contáctanos.</span></h2>
            <br>
            <br>
            <!-- <p class="desc">Get in touch with us.</p> -->
         </div>
      </div>

   <!-- Map Section
   ================================================== -->
   <section id="map">


      <p class="map-error">Something went wrong... Unable to load map... Please try to enable javascript</p>

   </section> <!-- Map Section End-->

      <div class="row section-head">
         <div class="col full">
            <img src="images/logo.png" />
         	<br>
         	<br>
             <img src="images/mail.png" alt="Contacto" class="inline" />&nbsp;&nbsp;&nbsp;<h5 class="verde inline">Escríbenos</h5>
            <!-- <p class="desc">Get in touch with us.</p> -->
         </div>
      </div>

      <div class="row">

         <div class="col g-6 ">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
					<fieldset>

                  <div>
						   <!-- <label for="contactName">Name <span class="required">*</span></label> -->
						   <input name="contactName" type="text" id="contactName" size="35" value="" placeholder="Nombre *" />
                  </div>

                  <div>
						   <!-- <label for="contactEmail">Email <span class="required">*</span></label> -->
						   <input name="contactEmail" type="text" id="contactEmail" size="35" value="" placeholder="Email *" />
                  </div>

                  <div>
						   <!-- <label for="contactSubject">Subject</label> -->
						   <input name="contactSubject" type="text" id="contactSubject" size="35" value="" placeholder="Asunto" />
                  </div>

                  <div>
                     <!-- <label  for="contactMessage">Message <span class="required">*</span></label> -->
                     <textarea name="contactMessage"  id="contactMessage" rows="15" cols="50"  placeholder="Mensaje *"></textarea>
                  </div>

                  <div>
                     <button class="submit" >Enviar mensaje</button>
                     <span id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </span>
                  </div>

					</fieldset>
				</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning"></div>
            <!-- contact-success -->
				<div id="message-success">
               <i class="icon-ok"></i>Su mensaje fue enviado correctamente. Gracias!<br />
               <!-- <i class="icon-ok"></i>Your message was sent, thank you!<br /> -->
				</div>

         </div>


         <aside class="col g-3">
            <img src="images/mapa.png" alt="Dirección" />
            <h5 class="verde">Visítanos</h5>
            <hr>

            <p>
               Los Pinos #203<br />
               Colonia el Rosedal<br />
               ADelegación Coyoacán <br />
               México, D.F. <br />
               C.P. 04330
            </p>


         </aside>
         <aside class="col g-3">
            <img src="images/telefono.png" alt="Teléfonos" />
            <h5 class="verde">Llamános</h5>
            <hr>

            <p>
               55 5689 9078<br />
               55 5544 7136 <br>
               55 5544 4101 <br>
            </p>
         </aside>
      </div>

   </section> <!-- Contact Section End-->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="col g-7">
            <ul class="copyright">
               <li> 2014 Bauprint&copy;</li>
               <li>Todos los derechos reservados</li>
            </ul>
         </div>

         <!-- <div class="col g-5 pull-right">
            <ul class="social-links">
               <li><a href="#"><i class="icon-facebook"></i></a></li>
               <li><a href="#"><i class="icon-twitter"></i></a></li>
               <li><a href="#"><i class="icon-google-plus-sign"></i></a></li>
               <li><a href="#"><i class="icon-linkedin"></i></a></li>
               <li><a href="#"><i class="icon-skype"></i></a></li>
               <li><a href="#"><i class="icon-rss-sign"></i></a></li>
            </ul>
         </div> -->

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/scrollspy.js"></script>
   <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
   <script src="js/gmaps.js"></script>
   <script src="js/jquery.reveal.js"></script>
   <script src="js/smoothscrolling.js"></script>
   <script src="js/isotope.pkgd.min.js"></script>
   <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
   <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
   <script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
   <script type="text/javascript" src="http://www.convergent-evolution.co.uk/js/scrollingcarousel.2.0.min.js"></script>
   <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
   <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<?php
   // Exclude tablets.
      if( $detect->isMobile() && !$detect->isTablet() ){
   ?>
   <?php
      }else{
   ?>
      <script src="js/skrollr.js"></script>
   <?php 
      }
   ?>
   <script src="js/init.js"></script>
   <script>
      $(document).ready(function(){
         $('#nav').localScroll(800);

         //.parallax(xPosition, speedFactor, outerHeight) options:
         //xPosition - Horizontal position of the element
         //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
         //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
         // $('.parallax-disenio').parallax("50%", 0.1);
         $('.parallax-2').parallax("50%", 0.1);
         $('.parallax-disenio').parallax("50%", 0.4);
         $('#third').parallax("50%", 0.3);

      })
   </script>

</body>

</html>