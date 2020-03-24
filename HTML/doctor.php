<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>DOCTOR LOCATION</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <style>
        #map {
        height: 60%;
        width: 100%;
        padding-top: 30%;
        border-top: 30%;
        border-color: #0000;


      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .size{
        padding-right: 50px;
        padding-left: 10px;
        height: 100%;
        padding-top: 20px;

      }
     
    </style>

    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    
    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                   

                    

                  </div>
              </div>

            </div>

                  


                  
            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.html"><p><img src="assets/images/logo.png" alt="" align="middle"> HELP LINE</p></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="" href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="has-child"><a href="#">HOW IT WORKS</a>

                     
                    </li>
                    <li><a class="is-active" href="doctor.html">FIND DOCTORS</a></li>
                    <li><a href="price.php">PRICE COMPARATOR</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 
<div style="background-image: url('assets/images/1.jpg')" class="text-center" >
	
        

		<div class="container zoomIn animated">
			
			<h1 class="page-title">Find Doctor<span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>
    </div>

    <div class="size">
    <div id="map"></div>
     <div  style="position: relative; font-size: 20px;" id="details_div"></div> 
  </div>
  <div style=" list-style-image: url('assets/images/logo.png');"></div>
 
  <script>


      function display_details(loc1){

        for (var i = 0; i < loc1.length; i++) {

          var details = document.getElementById('details_div').innerHTML;

          document.getElementById('details_div').innerHTML = details + "<div style='border: solid; width: 60%; margin: auto;'><div style='padding-left: 25px; display: block; font-size: 20px'> <b>" + loc1[i].name + "</b></div> <div style='padding-left: 45px'>"+ loc1[i].Address + "</div></div><br>";
        }

      }
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });

        var loc1 = [];
        loc1.push({lat: 19.1604 ,lng: 72.9955, name: "doc1", Address: "5 Vamanrao Pai Marg, Navi Mumbai, Mumbai Urban Agglomerate, Maharashtra, 400708 Sector 3, Sector 2, Airoli Navi Mumbai India"});
        loc1.push({lat: 19.1602 ,lng: 72.9956, name:"doc2", Address: "Navi Mumbai Sector 3, Mumbai Urban Agglomerate, Maharashtra, 400708 Sector 3, Airoli Navi Mumbai India"});
        loc1.push({lat: 19.161 ,lng: 72.996, name: "doc3", Address: "Navi Mumbai Sector 2, Mumbai Urban Agglomerate, Maharashtra, 400708 Sector 2, Airoli Navi Mumbai India"});
        loc1.push({lat: 19.163 ,lng: 72.9956, name: "doc4", Address: "Navi Mumbai Sector 20, Mumbai Urban Agglomerate, Maharashtra, 400708 Sector 20, Sector 2, Airoli Navi Mumbai India"});
        loc1.push({lat: 19.1656 ,lng: 72.9956, name: "doc5", Address: "Navi Mumbai Secor 20A, Mumbai Urban Agglomerate, Maharashtra, 400708 Secor 20A, Airoli Navi Mumbai India"});
        loc1.push({lat: 19.165 ,lng: 72.99, name: "doc6", Address: "Airoli Village Marg, Navi Mumbai Sector 1A, Mumbai Urban Agglomerate, Maharashtra, 400708 Sector 1A, Sector 1, Airoli Navi Mumbai India"});

        

        infoWindow = new google.maps.InfoWindow;


          var marker = [];
        for(j=0; j<loc1.length;j++){
          marker = new google.maps.Marker({position: loc1[j], map: map});
          google.maps.event.addListener(marker, 'click', (function(marker,j) {
            return function(){
            infoWindow.setContent(loc1[j].details,);
            infoWindow.open(map, marker);
          }
          })(marker, j));
        }

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('You are here');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        display_details(loc1);
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjBC78Pdm4IFsWhmis5M1h7VSGus2m8IU&callback=initMap">
    </script>


 
 
      

    
       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>

        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        
    </body>
</html>
