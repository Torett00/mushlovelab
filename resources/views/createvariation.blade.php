<head>
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('VariationController.store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						nameVariation 
					</label>
					<input type="text" class="form-control"  name="specie" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						description 
					</label>
					<input type="text" class="form-control"  name="description" />
				</div>
				<div class="form-group">
					
                 <select class="form-select" aria-label="Default select example" name="product_id" required>
                                <option disabled selected>Selectionné un  produit</option>
                                @foreach ($Products as $m)
                                <option value=" {{ $m->id }}"> {{ $m->product_name }}</option>
                                @endforeach
                            </select>
                            
					
				</div>
        
					
				
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>