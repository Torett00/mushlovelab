<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">

  </head>
  <body>
	
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				List PRoducts
			</h3>
		</div>
	</div>
</div>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<a  class="btn btn-primary"  href="{{ route('productss.create') }}">Ajouter produit</a>
			<table class="table">
				<thead>
					<tr>
						<th>
							id
						</th>
						<th>
							Product_name
						</th>
						<th>
							Price
						</th>
						<th>
							Stock
						</th>
						<th>
							description
						</th>
                        <th>
							PICT
						</th>
                        <th>
							update
						</th>
                        <th>
							delete
						</th>
					</tr>
				</thead>
				<tbody>
                @foreach ($products as $ss)
					<tr>
						<td>
							{{$ss->id}}
						</td>
						<td>
                        {{$ss->product_name}}
						</td>
						<td>
                        {{$ss->price}}
						</td>
						<td>
                        {{$ss->stock}}
						</td>
						<td>
                        {{$ss->description}}
						</td>
                        <td>
						<a class="btn btn-primary" href="{{ route('productss.show',$ss->id) }}">show</a>
                         </td>
						<td><img src="/upload/imagesproduct/{{ $ss->pict }}" width="100px"></td>
                        <td>
							<form action="{{route('productss.destroy',$ss->id)}}" method="POST">
								<a class="btn btn-primary" href="{{ route('productss.edit',$ss->id) }}">Edit</a>
								</td>
								<td>
								@csrf

								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</from>
						</td>
                        
					</tr>
                    @endforeach	
				
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>