<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

   		<title>Laravel Repository Pattern CRUD</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	</head>
  	<body>
    
    <div class="container">

    	<h2>Data Guru Andalus</h2>

    	<a class="btn btn-danger btn-sm" href="{{ route('task.create') }}">Tambah</a>
    	<br><br>
		  <table class="table table-bordered">
  			<thead>
  			  <tr>
  			    <th scope="col">#</th>
  			    <th scope="col">Code</th>
  			    <th scope="col">Name_id</th>
  			    <th scope="col">Name_ar</th>
  			    <th scope="col">NIP</th>
  			    <th scope="col">Gender</th>
  			    <th scope="col">Action</th>
  			  </tr>
  			</thead>
  			<tbody>
  				@foreach($tasks as $key => $task)
  				{{ Form::open( 
					['route' => ['task.delete', $task->id], 
					'method' => 'delete',
					'class' => 'form-inline']) 
				}}	
  			  	<tr>
  			  	  	<th scope="row">{{ $key+1}}</th>
  			  	  	<td>{{ $task->code }}</td>
  			  	  	<td>{{ $task->name_id }}</td>
  			  	  	<td>{{ $task->name_ar }}</td>
  			  	  	<td>{{ $task->nip }}</td>
  			  	  	<td>{{ $task->gender }}</td>
  			  	  	<td>
  			  	  		<div class="pull-right">
							<a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-xs">Edit</a>
							{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) }}
						</div>
					</td>
  			  	</tr>
  			  	@endforeach
  			  	{{ Form::close() }}
  			</tbody>
		  </table>
				
    	<div class="footer">Copyright@2019 - Created by <a href="http://sigitsmkn1liwa.blogspot.com/"> Pesagi Code.</div></a>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 	</body>
</html>