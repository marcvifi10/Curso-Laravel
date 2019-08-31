@extends('../layouts.plantilla')

@section('cabecera')



@endsection

@section('contenido')

	<form method="post" action="/productos">
	
		<input type="text" name="NombreArticulo">
		
		{{csrf_field()}}
		
		<br><br>
		
		<input type="text" name="NombreArticulo">
		<br><br>
		
		<input type="text" name="Seccion">
		<br><br>
		
		<input type="text" name="Precio">
		<br><br>
		
		<input type="text" name="Fecha">
		<br><br>
		
		<input type="text" name="PaisOrigen">
		<br><br>
		
		<input type="submit" name="enviar" value="Enviar">
	
	</form>

@endsection