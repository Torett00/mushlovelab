<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
    <link href="{{url('tempcss/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('tempcss/css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        
        <!-- Navigation-->
     
        <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="#"><img src="tempcss/images/logoo.png"></a>
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
                        <a class="nav-link" href="{{ url('contact-uss')}}">Contact</a>
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
                           <li><a href="{{url('cart')}}"><img src="tempcss/images/trolly-icon.png"></a></li>
                           
                          
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
        <!-- Product section-->
        
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-8"><img class="card-img-top mb-5 mb-md-0" src="/upload/imagesproduct/{{ $prod->pict }}"  width="600" height="400" alt="..." /></div>
                    <div class="col-md-4">
                        
                        <h1 class="display-5  text-center me-3">{{ $prod->product_name}}</h1>
                        <div class="fs-5 mb-5">
                            <h2 class="display-5 fw-bolder">{{$prod->price}}</h2>
                            
                           
                        </div>
                        <p class="display-5 fw-bolder">{{$prod->description}}</p>
                        <div class="d-flex">
                            <label>Quantite</label>
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        </div> 
                        
                        <div class="d-flex">
                            
                                
                            <select class="form-select" aria-label="Default select example" name="matiere_id" required>
                                <option disabled selected>Selectionné un variation</option>
                                @foreach ($variaa as $m)
                                <option value=" {{ $m->id }}"> {{ $m->specie }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-8 ">
                            <div class="d-flex " >
                                <form action="{{ route('CartController.update',$prod->id)}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    
                                    <button type="submit" class="btn btn-outline-dark flex-shrink-0">
                                    <i class="bi-cart-fill me-1"></i>
                                Add to cart
                                                </button>
            
			                    </form>
                            </div>
                        </div>
                        
                    </div>
                    @foreach($variaa as $m)
                    <div class="col-md-8">
                    
                    </div>
                    <div class="col-md-4">
                        <p class=" price_text" >  {{$m->specie}}  </p>
                            {{ $m->description }}
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Related items section-->
       
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url('tempcss/js/script.js')}}"></script>
    </body>
</html>
