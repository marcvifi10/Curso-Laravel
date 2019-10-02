<html>
	<head>
		<meta charset="UTF8">
	</head>
	<body>
		<h1>PÁGINA PARA AGREGAR USUARIOS</h1>
		{!! Form::open(['url' => 'foo/bar']) !!}
			<table>
				<tr>
					<td>
						{!! Form::label('email', 'E-Mail Address') !!}
					</td>
					<td>
						{!! Form::text('username') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('email', 'E-Mail Address') !!}
					</td>
					<td>
						{!! Form::text('username') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('email', 'E-Mail Address') !!}
					</td>
					<td>
						{!! Form::text('username') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('email', 'E-Mail Address') !!}
					</td>
					<td>
						{!! Form::text('username') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('email', 'E-Mail Address') !!}
					</td>
					<td>
						{!! Form::text('username') !!}
					</td>
				</tr>
			</table>
		{!! Form::close() !!}
	</body>
</html>