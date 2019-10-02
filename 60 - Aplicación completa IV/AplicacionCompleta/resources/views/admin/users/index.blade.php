<html>
	<head>
		<meta charset="UTF8">
	</head>
	<body>
		<h1>PÁGINA PRINCIPAL DEL ADMINISTRADOR</h1>
		<table width="500">
			<tr>
				<th>ID</th>
				<th>ROLE ID</th>
				<th>NOMBRE</th>
				<th>EMAIL</th>
				<th>CREADO</th>
				<th>ACTUALIZADO</th>
			</tr>
			@if($users)
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->role_id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at }}</td>
						<td>{{ $user->updated_at }}</td>
					</tr>
				@endforeach
			@endif
		</table>
	</body>
</html>