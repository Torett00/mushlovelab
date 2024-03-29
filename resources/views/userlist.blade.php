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
				List users
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
							id
						</th>
						<th>
							name
						</th>
						<th>
							email
						</th>
						<th>
							role 
						</th>
                        <th>
                            delete
                        </th>
						
                        
					</tr>
				</thead>
				<tbody>
                @foreach ($userr as $ss)
					<tr>
						<td>
							{{$ss->id}}
						</td>
						<td>
                        {{$ss->name}}
						</td>
						<td>
                        {{$ss->email}}
						</td>
						<td>
                        {{$ss->role_as}}
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