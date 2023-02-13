<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Muchlovelab</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="tempcss/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="tempcss/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="tempcss/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="tempcss/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="tempcss/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
   </head>
   <body>
      
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="#"><img src="tempcss/images/3.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{ url('index') }}">Home</a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('userproducts.index') }}">Product</a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact')}}">Contact</a>
                     </li>
                     @if(Auth::user())
                           
         
                           <li>
                           <form method="POST" action="{{ route('logout') }}">
                                 @csrf
                                 <x-dropdown-link :href="route('logout')"
                                          onclick="event.preventDefault();
                                                      this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                 </x-dropdown-link>
                              </form>
                           </li>
                        
                        @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> </li> 
                        <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                  </ul>
                  
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">Login</a></li>
                           <li><a href="#"><img src="tempcss/images/user-icon.png"></a></li>
                           <li><a href="{{route('CartController.index')}}"><img src="tempcss/images/trolly-icon.png"></a></li>
                           
                          
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section banner_bg">
         <div class="container-fluid">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="taital_main">
                        <div class="taital_left">
                           <h1 class="banner_taital">Mushroms for All uses</h1>
                           <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                        <div class="taital_right">
                           <div class="product_img"><img src="tempcss/images/Magic-Mushrooms-Natural-Pattern.png" width="100%"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="taital_main">
                        <div class="taital_left">
                           <h1 class="banner_taital">Deni Product For Skin</h1>
                           <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                        <div class="taital_right">
                           <div class="product_img"><img src="tempcss/images/Magic-Mushrooms-Natural-Pattern.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="taital_main">
                        <div class="taital_left">
                           <h1 class="banner_taital">Mushrooms for </h1>
                           <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                        <div class="taital_right">
                           <div class="product_img"><img src="tempcss/images/Magic Mushrooms Natural Pattern.jfif"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class='fa fa-arrow-up'></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class='fa fa-arrow-down'></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div><img src="tempcss/images/ef1c01e8-a554-458e-81ae-cc2ccfeb1599.png" class="about_img"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">About company</h1>
                  <div class="border"></div>
                  <p class="about_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationconsectetur adipiscing </p>
                  <div class="read_bt_1"><a href="#">Read More</a></div>
                  <div class="image_1"><img src="tempcss/images/img-1.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- product section start -->
      
      <!-- product section start -->
      <!-- client section start -->
      
      <!-- client section end -->
      <!-- Blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital">Latest Blog</h1>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-5">
                     <div class="face_img"><img src="tempcss/tempcss/images/face-img.png" class="face_img"></div>
                  </div>
                  <div class="col-md-7">
                     <h1 class="face_text">Face Cream Very mosurations</h1>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                     <div class="read_bt_1"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
            <div class="blog_section_3">
               <div class="row">
                  <div class="col-md-7">
                     <h1 class="face_text">Face Cream Very mosurations Skin</h1>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-5">
                     <div class="face_img"><img src="tempcss/images/face-img1.png" class="face_img"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Blog section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <h1 class="contact_taital">Contact Us</h1>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_7"><img src="tempcss/images/img-7.png"></div>
                  </div>
                  <div class="col-md-6">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                        <input type="text" class="mail_text" placeholder="Email" name="Email">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">SEND</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="location_icon">
                     <ul>
                        <li><a href="#"><img src="tempcss/images/map-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/mail-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/call-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="mail_box">
                     <textarea class="enter_email_text" placeholder="Enter Your Email" rows="5" id="comment" name="Message"></textarea>
                     <div class="subscribe_bt_1"><a href="#">Subscribe</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="tempcss/images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/instagram-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/youtub-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Product</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Shop</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Company</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">MY ACCOUNT</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free html Templates</a></p>
         </div>
      </div>
      <!-- copyright section end  -->
      <!-- Javascript files-->
      <script src="tempcss/js/jquery.min.js"></script>
      <script src="tempcss/js/popper.min.js"></script>
      <script src="tempcss/js/bootstrap.bundle.min.js"></script>
      <script src="tempcss/js/jquery-3.0.0.min.js"></script>
      <script src="tempcss/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="tempcss/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="tempcss/js/custom.js"></script>
      <!-- javascript --> 
      <script src="tempcss/js/owl.carousel.js"></script>
      <!-- owl carousel -->
      <script>
         $('.owl-carousel').owlCarousel({
         loop:true,
         margin:30,
         nav:true,
         responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:4
          }
         }
         })
      </script>
   </body>
</html>