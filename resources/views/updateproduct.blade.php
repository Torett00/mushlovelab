<head>
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('productss.update',$prod->id) }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      @method('PUT')

     
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Prdoduct_name
					</label>
					<input type="text" class="form-control"   value="{{ $prod->product_name }}" name="Prdoductnamee" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Price
					</label>
					<input type="text" class="form-control"   value="{{ $prod->price }}" name="Pricee"/>
				</div>
        
					 
          
         <div class="form-group">
					 
           <label for="exampleInputPassword1">
           Stock
           </label>
           <input type="text" class="form-control" value="{{ $prod->stock }}" name="Stocke" />
         </div>
		 <div class="form-group">
					 
           <label for="exampleInputPassword1">
           Stock
           </label>
           <input type="text" class="form-control" value="{{ $prod->description }}" name="description" />
         </div>
         
         
				
                            <div class="form-group">

            <strong>Image:</strong>

            <input type="file" name="image" class="form-control" placeholder="image">

            <img src="/upload/imagesproduct/{{ $prod->pict }}" width="300px">

            </div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox" /> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>