<head>
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="#!" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 4 items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>

              
              </div>
              </div>
                  @foreach($Minicommandee as $ss)
                  
                  <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                          src="/upload/imagesproduct/{{ $ss->pict }}" 
                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3 p-4">
                         
                          
                        </div>
                        <div class="ms-3 p-8 ">
                          
                          <h5>{{$ss->productname}}</h5>
                          <p class="small mb-0"></p>
                        </div>
                          <div class="ms-3 p-4 ">
                            <form action="{{route('userproducts.destroy',$ss->id)}}" method="POST" >
                                @csrf

                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </from>
                          
                          
                          </div>
                     
                        
							
                        </div>
                        <div class="ms-3 p-8">
                       
                          <div style="width: 50px;">
                          <label for="quantity">Quantity:</label>
                          <input type="number" id="quantity" name="quantity" min="1" max="5">
                          
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                  @endforeach

              </div>
              <form action="{{ route('CartController.store')}}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
      
      
                  <button type="submit" class="btn btn-primary">
					        valider
				          </button>
            
			
            
			          </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 

              
