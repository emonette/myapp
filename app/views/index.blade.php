<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hello</h1>
	<p>Where is Ellis?</p>
	{{ Form::open(array('url' => 'home'))}}
		
		<div>
			{{Form::label('name', 'Your name: ')}}
			{{Form::text('name')}}
		</div>
		<div>{{Form::label('username', 'Your Username: ')}}
			{{Form::text('username')}}</div>
		<div>{{Form::label('age', 'Your Age: ')}}
			{{Form::text('age')}}</div>
		<div>
			{{Form::submit('Send!')}}
		</div>

	{{ Form::close()}}
</body>
</html>


