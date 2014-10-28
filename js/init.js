/*-----------------------------------------------------------------------------------
/*
/* Init JS
/*
-----------------------------------------------------------------------------------*/

 jQuery(document).ready(function() {

/*----------------------------------------------------*/
/*	gmaps
------------------------------------------------------*/

   var map;

   // main directions
   map = new GMaps({
      el: '#map', 
      lat: 19.3392754, 
      lng: -99.1495863, 
      zoom: 17, 
      zoomControl : true,
      zoomControlOpt: { 
         style : 'SMALL', 
         position: 'TOP_LEFT' 
      }, 
      panControl : false, 
      scrollwheel: false
   });

   // add address markers
   map.addMarker({ 
      lat: 19.3392754, 
      lng: -99.1495863, 
      title: 'Bauprint',
      infoWindow: { 
         content: '<p>LOS PINOS # 203 COL. EL ROSEDAL DELEGACIÓN COYOACAN <br> MÉXICO D.F. C.P. 04330 <br> E-MAIL.- ventas@gruporusam.net <br> TEL (55) 56899078 <br> 55447136 <br> 55444101 </p>' 
      } 
   });


/*----------------------------------------------------*/
/*	contact form
------------------------------------------------------*/

   $('form#contactForm button.submit').click(function() {

      $('#image-loader').fadeIn();

      var contactName = $('#contactForm #contactName').val();
      var contactEmail = $('#contactForm #contactEmail').val();
      var contactSubject = $('#contactForm #contactSubject').val();
      var contactMessage = $('#contactForm #contactMessage').val();

      var data = 'contactName=' + contactName + '&contactEmail=' + contactEmail +
               '&contactSubject=' + contactSubject + '&contactMessage=' + contactMessage;

      $.ajax({

	      type: "POST",
	      url: "inc/sendEmail.php",
	      data: data,
	      success: function(msg) {

            // Message was sent
            if (msg == 'OK') {
               $('#image-loader').fadeOut();
               $('#message-warning').hide();
               $('#contactForm').fadeOut();
               $('#message-success').fadeIn();
            }
            // There was an error
            else {
               $('#image-loader').fadeOut();
               $('#message-warning').html(msg);
	            $('#message-warning').fadeIn();
            }

	      }

      });

      return false;

   });

/*Sticky bar*/
   var stickyNavTop = $('#galleryTab').offset().top;  

   var stickyNav = function(){  
      var scrollTop = $(window).scrollTop();  

      if (scrollTop > stickyNavTop) {   
         $('#galleryTab').addClass('sticky');  
      } else {  
         $('#galleryTab').removeClass('sticky');   
      }  
   };  

   stickyNav();  

   $(window).scroll(function() {  
      stickyNav();  
   });
/*//Sticky bar*/

});

   var s = skrollr.init();
      $(window).resize(function() {
         $('.intro-cont').css('height', window.innerHeight);
         $('.portfolio-item, .portfolio-item img, .portfolio-item-meta').height($('.portfolio-item').width());
         $('.portfolio-item img').width($('.portfolio-item').width());
      });

      $(window).load(function(){
         
         var $container = $('#portfolio-wrapper');
         $container.isotope({
            filter: '*',
            animationOptions: {
               duration: 750,
               easing: 'linear',
               queue: false
            }
         });

         /*$container.isotope( 'on', 'layoutComplete', function() {
           $('body').animate({scrollTop: $('#portfolio').offset().top}, 100, function() {
                location.hash = '#portfolio';
              });
         });*/
         $('#galleryTab a').click(function(){
            var este = $(this);
            $('body').animate({scrollTop: $('#portfolio').offset().top}, 250, function() {
                  location.hash = '#portfolio';
                  $('#galleryTab .current').removeClass('current');
                  este.addClass('current');

                  var selector = este.attr('data-filter');
                  $container.isotope({
                     filter: selector,
                     animationOptions: {
                        duration: 950,
                        easing: 'linear',
                        queue: false
                     }
                  });
            return false;
              });
         }); 

         $('.fancybox-thumbs').fancybox({
            prevEffect : 'fade',
            nextEffect : 'elastic',
            preload: 40,

            closeBtn  : true,
            arrows    : true,
            nextClick : true,
            padding: 0,

            openEffect : 'elastic',
            openSpeed  : 150,

            closeEffect : 'elastic',
            closeSpeed  : 150,
            helpers : {
               title : {
                  type: 'over'
               },
               thumbs : {
                  width  : 100,
                  height : 100
               }
            }, // helpers
            beforeShow : function() {
             this.title = (this.title ? '' + this.title + '' : '') + '<br /> Imagen ' + (this.index + 1) + ' de ' + this.group.length;
            }/*,
            afterShow: function() {
               if($('#fancybox-thumbs').length>0){
                  alert('a');
               }
               $('#fancybox-thumbs').show().scrollingCarousel({});
               
            }*/
         });
      });
      $(document).ready(function(){
         $('.portfolio-item, .portfolio-item img, .portfolio-item-meta').height($('.portfolio-item').width()).width($('.portfolio-item').width());

      });







