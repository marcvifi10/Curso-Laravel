@extends('../layouts.plantilla')

@section('cabecera')

EDITAR

@endsection

@section('contenido')

	<form method="post" action="/productos/{{ $producto->id }}">
	
		<input type="text" name="NombreArticulo" value="{{ $producto->NombreArticulo }}">
		
		{{csrf_field()}}
		
		<input type="hidden" name="_method" value="PUT">
		
		<br><br>
		
		<input type="text" name="Seccion" value="{{ $producto->Seccion }}">
		<br><br>
		
		<input type="text" name="Precio" value="{{ $producto->Precio }}">
		<br><br>
		
		<input type="text" name="Fecha" value="{{ $producto->Fecha }}">
		<br><br>
		
		<input type="text" name="PaisOrigen" value="{{ $producto->PaisOrigen }}">
		<br><br>
		
		<input type="submit" name="enviar" value="Enviar">
	
	</form>

@endsection