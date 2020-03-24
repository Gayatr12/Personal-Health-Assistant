

<?php include 'connection.php';?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Price</title>
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
                  
                  <a class="navbar-brand" href="index.html"><p><img src="assets/images/logo.png" alt="" align="middle""> HELP LINE</p></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="" href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="has-child"><a href="#">HOW IT WORKS</a>

                     
                    </li>
                    <li><a href="doctor.html">FIND DOCTORS</a></li>
                    <li><a class="is-active" href="price.php">PRICE COMPARATOR</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 
<div style="background-image: url('assets/images/1.jpg')" class="text-center" >
    
        

        <div class="container zoomIn animated">
            
            <h1 class="page-title">Price Compare <span class="title-under"></span></h1>
            <p class="page-description">
                
            </p>
            
        </div>
    </div>
    </header>
    <div class="container" align="top" style="padding-top: 30px;">
<div class="panel panel-default">    
   
    <div align="center" style="padding: 150px;" >


<form action="" method="post">
    <div>
        YOUR PRESCRIPTION <input type="text" name="name"><br>
    </div>
        <div style="padding: 30px; padding-left: 50px; p">
        <input type="submit" name="">
    </div>
</form>
 <?php

 if(isset($_POST["name"])){
                $user_defined = $_POST["name"];
                $sql = "SELECT * FROM generic WHERE Brand_Name = '$user_defined'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    
                    while($row = $result->fetch_assoc()) {
                      echo "<table border='1'>
                            <tr>
                            <th>GENERIC NAME</th>
                            <th>PRICE </th>
                            </tr>";
                       
                       echo "<tr>";
                        echo "<td>" . $row["Generic_Name"]. "</td>";
                        echo "<td>" .  $row["Price"]. "</td>";
                        echo "</tr>";
                      
                       echo "</table>";
                    }
                    


                }
                 
                  else {
                    echo "0 results";
                }   
        }
        $conn->close();
        
?>
</div>
</div>
</div>

      

    
       
        
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
