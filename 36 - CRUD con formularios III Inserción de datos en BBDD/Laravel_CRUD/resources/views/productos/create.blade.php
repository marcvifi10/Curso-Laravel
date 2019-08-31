@extends('../layouts.plantilla')

@section('cabecera')



@endsection

@section('contenido')

	<form method="post" action="/productos">
	
		<input type="text" name="NombreArticulo">
		
		{{csrf_field()}}
		
		<br><br>
		<input type="submit" name="enviar" value="Enviar">
	
	</form>

@endsection