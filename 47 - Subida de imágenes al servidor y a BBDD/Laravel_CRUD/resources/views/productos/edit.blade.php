@extends('../layouts.plantilla')

@section('cabecera')

EDITAR

@endsection

@section('contenido')

	<!-- <form method="post" action="/productos/{{ $producto->id }}"> -->
	
	{!! Form::model($producto, ['method' => 'post', 'action' => ['ProductosController@update', $producto->id]]) !!}
	
		<input type="text" name="NombreArticulo" value="{{ $producto->NombreArticulo }}">
		
		{{csrf_field()}}
		
		<br><br>
		
		<input type="text" name="Seccion" value="{{ $producto->Seccion }}">
		<br><br>
		
		<input type="text" name="Precio" value="{{ $producto->Precio }}">
		<br><br>
		
		<input type="text" name="Fecha" value="{{ $producto->Fecha }}">
		<br><br>
		
		<input type="text" name="PaisOrigen" value="{{ $producto->PaisOrigen }}">
		<br><br>
		
		<input type="submit" name="actualizar" value="Actualizar">
		
		<input type="reset" name="borrar" value="Borrar campos">
	
	<!-- </form> -->
	
	{!! Form::close() !!}
	
	{!! Form::open(['method' => 'delete', 'action' => ['ProductosController@destroy', $producto->id]]) !!}
	
		{{ csrf_field() }}
		
		<input type="hidden" name="_method" value="DELETE">
		
		<input type="submit" value="Eliminar registro">
		
	{!! Form::close() !!}

@endsection