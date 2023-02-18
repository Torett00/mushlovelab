<head>
<link rel="stylesheet" type="text/css" href="tempcss/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="tempcss/css/style.css">
</head>
<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Shopping Cart</h2>
            {{ __('Cart') }}
        </div>
        <div class="card-body">
        @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">romove</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach ($cartItems as $item)
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="/upload/imagesproduct/{{ $item->attributes->image  }}" width="100px" height="100px"class="d-block ui-w-40 ui-bordered mr-4" alt="">
                        <div class="media-body">
                          <a href="#" class="d-block text-dark"></a>
                          <small>
                            
                            <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                            <span class="text-muted">{{ $item->name }} </span> EU 37 &nbsp;
                            
                          </small>
                        </div>
                      </div>
                    </td>
                        <td> {{$item->price}}</td>
                    <td class="text-right font-weight-semibold align-middle p-4">
                            <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                      <input type="text" class="form-control text-center" value="{{ $item->quantity }}" 
                                    class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                    <button class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                            </form>
                    </td>
                   
                    <td><form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                              </form></td>
                  </tr>

                 @endforeach
        
                 
                 <div> Total: ${{ Cart::getTotal() }}</div>
                  
        
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <div class="mt-4">
                <label class="text-muted font-weight-normal">Promocode</label>
                <input type="text" placeholder="ABC" class="form-control">
              </div>
              <div class="d-flex">
                <div class="text-right mt-4 mr-5">
                  <label class="text-muted font-weight-normal m-0">Discount</label>
                  <div class="text-large"><strong>$20</strong></div>
                </div>
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong>Total: ${{ Cart::getTotal() }}</strong></div>
                </div>
              </div>
            </div>
        
            <div class="float-right">
              <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3"><a  href="{{ route('products.liste') }}">Back to shopping</a></button>
              <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
            </div>
        
          </div>
      </div>
  </div>