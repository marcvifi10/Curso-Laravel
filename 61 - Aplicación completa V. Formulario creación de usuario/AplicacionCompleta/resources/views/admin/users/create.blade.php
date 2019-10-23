<html>
	<head>
		<meta charset="UTF8">
	</head>
	<body>
		<h1>PÁGINA PARA AGREGAR USUARIOS</h1>
		{!! Form::open(['method' => 'POST', 'action'=>'AdminUsersController@store']) !!}
			<table>
				<tr>
					<td>
						{!! Form::label('name', 'Nombre: ') !!}
					</td>
					<td>
						{!! Form::text('name') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('password', 'Password: ') !!}
					</td>
					<td>
						{!! Form::text('password') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('email', 'E-Mail: ') !!}
					</td>
					<td>
						{!! Form::text('email') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('email', 'Verificar E-Mail') !!}
					</td>
					<td>
						{!! Form::text('email_verified_at') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('role', 'Role: ') !!}
					</td>
					<td>
						{!! Form::text('role') !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::submit('Crear usuario') !!}
					</td>
					<td>
						{!! Form::reset('Borrar') !!}
					</td>
				</tr>
			</table>
		{!! Form::close() !!}
	</body>
</html>