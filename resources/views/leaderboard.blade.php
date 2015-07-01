<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ask a question</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ url() }}/css/main.css"> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		
	</head> 
	

	<body class="container">
		<div class="col-md-8 col-md-offset-2">

		<div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		            <li><a href="javascript:history.back()">Questions</a></li>
		            <li class="active"><a href="leaderboard">Leaderboard</a></li>
		          </ul>
        	</div>
			<div class="page-header">
				<h2>Leaderboard</h2>
			</div>
			
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Vote</th>
					</tr>
				</thead>
				<tbody>
				@foreach($users as $index => $user)
					<tr>
						<td>{{ ++$index }}</td>
						<td>{{ $user->author }}</td>
						<td>{{ $user->vote }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div> 
		
	</body> 
</html>