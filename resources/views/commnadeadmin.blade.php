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
				List Commandes
			</h3>
		</div>
	</div>
</div>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
			<table class="table">
				<thead>
					<tr>
						
						<th>
							quantite
						</th>
						<th>
							pict
						</th>
						<th>
							productname
						</th>
						<th>
							product_id
						</th>
                        <th>
							user_id
						</th>
						<th>
							delete
						</th>
                        
                        
                        
					</tr>
				</thead>
				<tbody>
                @foreach ($Minicommandee as $ss)
					<tr>
						
						<td>
                        {{$ss->quantite}}
						</td>
						<td>
                        {{$ss->productname}}
						</td>
						<td>
                        {{$ss->product_id}}
						</td>
						<td>
                        {{$ss->user_id}}
						</td>
                        
						<td><img src="/upload/imagesproduct/{{ $ss->pict }}" width="100px"></td>
                        
                        <td>
							<form action="{{route('userproducts.destroy',$ss->id)}}" method="POST">
								
								
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