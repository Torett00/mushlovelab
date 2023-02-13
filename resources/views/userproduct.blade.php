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
      <title>Product</title>
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
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{  route('userproducts.index')  }}">Product</a>
                     </li>
                    
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact')}}">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">Login</a></li>
                           <li><a ><img src="tempcss/images/user-icon.png"></a></li>
                           <li><a href="{{url('panier')}}"><img src="tempcss/images/trolly-icon.png"></a></li>
                           <li><a ><img src="tempcss/images/search-icon.png"></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- product section start -->
      <div class="product_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="product_taital">Products</h1>
                  <p class="product_text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
         
               </div>
            </div>
          
				
            <div class="row">
					
            @foreach ($products as $ss)
						
            
            <div class="ccontent" style="width: 15rem; " style="padding:12px;">
  <img class="card-img-top" src="/upload/imagesproduct/{{ $ss->pict }}" alt="Card image cap" style="padding:10px;">
  <div class="card-body">
    <h6 class="hh66">{{$ss->product_name}}</h6>
    <a href="{{ route('userproducts.show',$ss->id) }}">
    <p class="p33">{{$ss->description}}</p>
    <form action="{{ route('CartController.update',$ss->id)}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      @method('PUT')
      
      <button type="submit" class="btn btn-primary">
					add To cart
		</button>
            
			</form>
   
	
							
   
      </div>
</div>
                  @endforeach
</diV>
            
            
         </div>
      </div>
      <!-- product section start -->
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