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
				List Variation
			</h3>
		</div>
	</div>
</div>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<a  class="btn btn-primary"   href="{{ route('VariationController.create') }}">Ajouter variation</a>
			<table class="table">
				<thead>
					<tr>
						<th>
							id
						</th>
						<th>
							product_id
						</th>
						<th>
							spicie
						</th>
						<th>
							des
						</th>
						
					
					</tr>
				</thead>
				<tbody>
               @foreach($Variationss as $ss)
					<tr>
						<td>
                        {{$ss->id}}
						</td>
						<td>
                        {{$ss->product_id}}
						</td>
						<td>
                        {{$ss->specie}}
						</td>
						<td>
                        {{$ss->description}}
						</td>
						
                        
						
                        <td>
							<form action="{{route('VariationController.destroy',$ss->id)}}" method="POST">
								
								
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