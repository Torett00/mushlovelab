<head>
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('productss.store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Prdoduct_name
					</label>
					<input type="text" class="form-control"  name="Prdoductname" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Price
					</label>
					<input type="text" class="form-control"  name="Price"/>
				</div>
        
					 
          
         <div class="form-group">
					 
           <label for="exampleInputPassword1">
           Stock
           </label>
           <input type="text" class="form-control"  name="Stock" />
         </div>
		    
         <div class="form-group">
					 
           <label for="exampleInputPassword1">
           description
           </label>
           <input type="text" class="form-control"  name="description" maxlength="30" />
         </div>
         
         
				<div class="form-group">
					 
					<label for="exampleInputFile">
						Product Image
					</label>
					<input type="file" class="form-control-file"  name="image" />
					<p class="help-block">
						Example block-level help text here.
					</p>
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