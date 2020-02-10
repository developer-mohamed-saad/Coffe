<?php session_start();
session_regenerate_id();
?>
<html>
    <head>
        <title>
            Caffe
        </title>
        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css?ver=5.0.4" type="text/css" media="all">
        <link rel="stylesheet" href="css/fontawesome.min.css?ver=5.8.1" type="text/css" media="all">        
        <link rel="stylesheet" href="css/main.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">

        <style id="font-awesome-official-v4shim-inline-css" type="text/css">
            @font-face {
                font-family: "FontAwesome";
                src: url("fonts/fa-brands-400.eot"),
                     url("fonts/fa-brands-400.eot?#iefix") format("embedded-opentype"),
                     url("fonts/fa-brands-400.woff2") format("woff2"),
                     url("fonts/fa-brands-400.woff") format("woff"),
                     url("fonts/fa-brands-400.ttf") format("truetype"),
                     url("fonts/fa-brands-400.svg#fontawesome") format("svg");
            }
            
            @font-face {
                font-family: "FontAwesome";
                src: url("fonts/fa-solid-900.eot"),
                     url("fonts/fa-solid-900.eot?#iefix") format("embedded-opentype"),
                     url("fonts/fa-solid-900.woff2") format("woff2"),
                     url("fonts/fa-solid-900.woff") format("woff"),
                     url("fonts/fa-solid-900.ttf") format("truetype"),
                     url("fonts/fa-solid-900.svg#fontawesome") format("svg");
            }
            
            @font-face {
                font-family: "FontAwesome";
                src: url("fonts/fa-regular-400.eot"),
                     url("fonts/fa-regular-400.eot?#iefix") format("embedded-opentype"),
                     url("fonts/fa-regular-400.woff2") format("woff2"),
                     url("fonts/fa-regular-400.woff") format("woff"),
                     url("fonts/fa-regular-400.ttf") format("truetype"),
                     url("fonts/fa-regular-400.svg#fontawesome") format("svg");
                unicode-range: U+F004-F005,U+F007,U+F017,U+F022,U+F024,U+F02E,U+F03E,U+F044,U+F057-F059,U+F06E,U+F070,U+F075,U+F07B-F07C,U+F080,U+F086,U+F089,U+F094,U+F09D,U+F0A0,U+F0A4-F0A7,U+F0C5,U+F0C7-F0C8,U+F0E0,U+F0EB,U+F0F3,U+F0F8,U+F0FE,U+F111,U+F118-F11A,U+F11C,U+F133,U+F144,U+F146,U+F14A,U+F14D-F14E,U+F150-F152,U+F15B-F15C,U+F164-F165,U+F185-F186,U+F191-F192,U+F1AD,U+F1C1-F1C9,U+F1CD,U+F1D8,U+F1E3,U+F1EA,U+F1F6,U+F1F9,U+F20A,U+F247-F249,U+F24D,U+F254-F25B,U+F25D,U+F267,U+F271-F274,U+F279,U+F28B,U+F28D,U+F2B5-F2B6,U+F2B9,U+F2BB,U+F2BD,U+F2C1-F2C2,U+F2D0,U+F2D2,U+F2DC,U+F2ED,U+F328,U+F358-F35B,U+F3A5,U+F3D1,U+F410,U+F4AD;
            }
            </style>
    
  </head>
    <body>
    <!-- Header Section -->
        <header class="caffe-header">
          <div class="container">
              <div class="row">
                <div class="social col-xs-12 col-md-12 col-lg-3  fadeIn animated delay-1s">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                    <a href="#" class="fa fa-dribbble"></a>
                  </div>
            <div class="caffe-logo col-xs-12 col-md-12 col-lg-6 fadeIn animated delay-1s ">    
              <a class="navbar-brand " href="#"><img src="images/Coffee-white.png"></a>
                <h1 class="slogan">Coffe </h1>
                <p>The Taste Of Life</p>
              </div>
              <div class="col-xs-12 col-md-12 col-lg-3 fadeIn animated delay-1s">
                  <div class="contact_details">
                      <span class="title">Have any questions?</span>
                      <span class="phone"><i class="fa fa-phone"></i><a href="tel:+111000000000">+2(111)123456789</a></span>
                      <span class="mail"><i class="fa fa-envelope"></i><a href="mailto:mail@domain.com">mail@domain.com</a></span>				
                    </div>
              </div>
              <div class="col-md-12 fadeIn animated delay-1s">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
            <div class="sticky-logo">
                <a class="navbar-brand " href="#"><img src="images/Coffee-brown.png"></a>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#our-menu">Our Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#our-team">Our Team</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact-us">Contact Us</a>
                    </li>
                </ul>

              </div>
          </nav>
        </div>

        </div>
      </div>
        </header>
        <div class="container-fluid content">
        <!-- About Us Section -->
          <div id="about-us" class="row about-us wow slideInRight" data-wow-delay="0.5s">
            <div class="col-xs-6 col-md-6 about-text ">
              <h1 class="text-center">
                About Coffee
              </h1>
              <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                     specimen book.
              </p>
            </div>
            <div class="col-xs-4 col-md-4 about-img">
               <img src="images/Coffee-brown.png" >
              </div>
          </div>
          <!-- Our Menu Section -->
          <div id="our-menu" class="row our-menu">
                <h1 class="text-center template-color title wow fadeInUp" >
                    Our Menu
                  </h1>
  
              <div class="col-md-10 m-auto menu">
            <!-- Our Menu Navigations -->
                <ul class="nav nav-tabs wow fadeIn"  id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="Drinks-tab" data-toggle="tab" href="#Drinks" role="tab" aria-controls="Drinks" aria-selected="true">Drinks <i class="fas fa-mug-hot"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="Dishes-tab" data-toggle="tab" href="#Dishes" role="tab" aria-controls="Dishes" aria-selected="false">Dishes <i class="fas fa-pepper-hot"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="Dessert-tab" data-toggle="tab" href="#Dessert" role="tab" aria-controls="Dessert" aria-selected="false">Dessert  <i class="fas fa-ice-cream"></i></a>
                  </li>
                </ul>
                <div class="tab-content">
                <!-- Drinks Menu -->
                  <div class="tab-pane fade show active" id="Drinks" role="tabpanel" aria-labelledby="Drinks-tab">
                    <div class="container">
                      <div class="row">
                    <div class="col-4 menu-item wow slideInUp" >
                      <div class="front">
                        <img src="images/cafe-menu/drinks/coffee.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                          Cappuccino
                        </h1>
                        <div class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </div>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-4 menu-item wow slideInUp" >
                      <div class="front">
                        <img src="images/cafe-menu/drinks/espresso.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Espresso
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-4 menu-item wow slideInUp" >
                      <div class="front">
                        <img src="images/cafe-menu/drinks/lemon-tea.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Lemon Tea
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-4 menu-item wow slideInUp" >
                      <div class="front">
                        <img src="images/cafe-menu/drinks/Refreshing-mojito-cocktails.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Mojito Cocktail
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-4 menu-item wow slideInUp" >
                      <div class="front">
                        <img src="images/cafe-menu/drinks/soda-cups.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Soda
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-4 menu-item wow slideInUp" >
                      <div class="front">
                        <img src="images/cafe-menu/drinks/Whipped-cream-topping-a drink.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Whipped Cream
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 

                  </div> 
                      </div>
                  </div>
                  <!-- Dishes Menu -->
                  <div class="tab-pane fade" id="Dishes" role="tabpanel" aria-labelledby="Dishes-tab">
                  <div class="container">
                      <div class="row">
                  <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dishes/Chicken-Salad.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Chicken Salad
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dishes/chicken.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Chicken
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dishes/grilled meet.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Grilled Meet
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dishes/hamburger.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Hamburger
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dishes/pizza.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Pizza
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dishes/Yellow-rice-with-beans.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Yellow Rice
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                </div>
                </div>
                  </div>
                  <!-- Dessert Menu -->
                  <div class="tab-pane fade" id="Dessert" role="tabpanel" aria-labelledby="Dessert-tab">
                  <div class="container">
                      <div class="row">
                      <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dessert/Almond-milk.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Almond Milk
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dessert/Dobos-Torte.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Dobos Torte
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dessert/Glazed-cake.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Glazed Cake
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dessert/ice-cream.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Ice Cream
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dessert/Profiteroles.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Profiteroles
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 
                    <div class="col-md-4 menu-item">
                      <div class="front">
                        <img src="images/cafe-menu/dessert/Strawberries-and-cheesecake.jpg" alt="">
                      </div>
                      <div class="back">
                        <h1 class="text-center">
                        Cheesecake
                        </h1>
                        <span class="description">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </span>
                        <hr>                        
                    <span class="price">
                          <i class="fas fa-dollar-sign"></i> 50
                        </span>
                      </div>
                    </div> 

                  </div>
                </div>
                </div>
                </div>
              </div>
              </div>
              <!-- Team Section -->
          <div id="our-team" class="row our-team">
                  <div class="col-md-12">
                      <h1 class="text-center wow fadeInUp" >
                      Our Chefs                       
                        </h1>
  
                  </div>
                  <div class="col-md-2  col-sm-2 col-2 team-member wow fadeInUp" >
                    <img src="images/chefs/cold-drinks-chef.jpg">
                    <div class="team-info">
                    <hr>
                    <h4><i class="fas fa-angle-left" style="color:#b66623;"></i> David Green <i class="fas fa-angle-right" style="color:#b66623;"></i></h4>
                    <p>Dessert cheif</p>
                    </div>
                </div>
                <div class="col-md-2  col-sm-2 col-2 team-member wow fadeInUp" >
                    <img src="images/chefs/dishes-chef.jpg">
                    <div class="team-info">
                    <hr>
                    <h4><i class="fas fa-angle-left" style="color:#b66623;"></i> Mohamed Ali <i class="fas fa-angle-right" style="color:#b66623;"></i></h4>
                    <p>Dishes cheif</p>
                    </div>
                </div>
                <div class="col-md-2  col-sm-2 col-2 team-member wow fadeInUp" >
                    <img src="images/chefs/grilled-food-chef.jpg">
                    <div class="team-info">
                    <hr>
                    <h4><i class="fas fa-angle-left" style="color:#b66623;"></i> Hussien Makram <i class="fas fa-angle-right" style="color:#b66623;"></i></h4>
                    <p>Grill cheif</p>
                    </div>
                </div>
                <div class="col-md-2  col-sm-2 col-2 team-member wow fadeInUp" >
                    <img src="images/chefs/hot-drinks-chef.jpg">
                    <div class="team-info">
                    <hr>
                    <h4><i class="fas fa-angle-left" style="color:#b66623;"></i> Taki Moka <i class="fas fa-angle-right" style="color:#b66623;"></i></h4>
                    <p>Drinks Cheif</p>
                    </div>
                </div>
        </div>
        <!-- Including Contact control -->
        <?php include'forms-control.php';?>
        <!-- Contact Us Section -->
        <div id="contact-us"class="row contact-us wow fadeInUp" >
          <div class="col-md-12 contact">
            <h1 class="text-center">Contact Us</h1>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
            <input type="hidden" name="token" value="<?php $token?>">
                <div class="form-group row">
              <input class="form-control" type="text" name="name" placeholder="Your Name" required>
              <?php
              if(!empty($nameError)){
                echo '<div class="alert alert-danger alert-dismissible" role="start">
                <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
              </button>'.$nameError.'</div>';
              }
              ?>
              </div>
              <div class="form-group row">
                  <input class="form-control" type="email" name="email" placeholder="Your Email" required>
                  </div>
              <div class="form-group row">
                  <textarea class="form-control" rows="3" placeholder="Message" name="message" required></textarea>
                            </div>
            <div class="form-group row">
                <input type="submit" class="btn btn-outline-secondary" value='Submit'>
                            </div>
            </form>
            

          </div>
        </div>
        </div>
<!-- Footer -->
<footer id="footer">
		<div class="container">
    <!-- Newsletter  -->
			<div class="row text-center newsletter">
				<div class="col-xs-12 col-sm-12 col-md-12">
         <h2>Subscribe Our Newsletter</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
        <input type="hidden" name="token" value="<?php $token?>">
        <div class="form-group input-group-lg row">
                  <input class="form-control" type="email" name="newsletter-email" placeholder="Your Email" required>
                  </div>
        <div class="form-group row">
                <input type="submit" class="btn btn-outline-secondary" value='Subscribe'>
                            </div>
                  
                  </form>
        </div>
        <div class="separator">
<svg height="6" width="300">
  <polygon points="0,3 147,1.5 150,0 153,1.5 300,3 153,4.5 150,6 147,4.5"/>
</svg>
</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
        <!-- Footer Social -->
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
			</div>	
			<div class="row">
      <!-- Copyright -->
				<div class="col-xs-12 col-sm-12 col-md-12 text-center text-white">
					<h6 class="copyright">&copy All right Reversed.<a class="ml-2" href="#" target="_self">Coffee Template</a></h6>
				</div>
			</div>	
		</div>
	</footer>
	<!-- ./Footer -->

          <script type="text/javascript" src="js/jquery/jquery.js?ver=5.0.4"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script src="js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
    </body>
</html>