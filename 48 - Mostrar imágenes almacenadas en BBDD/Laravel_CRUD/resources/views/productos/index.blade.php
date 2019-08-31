@extends('../layouts.plantilla')

@section('cabecera')

	LEER REGISTROS

@endsection

@section('contenido')

<ul>

	@foreach($productos as $producto)
	
		<li>
			<a href="{{ route('productos.edit', $producto->id) }}">
				{{ $producto->NombreArticulo }} &nbsp; 
			</a>
			{{ $producto->Seccion }} &nbsp; 
			{{ $producto->Precio }} &nbsp; 
			{{ $producto->Fecha }} &nbsp; 
			{{ $producto->PaisOrigen }} &nbsp;
			<img src="images/{{ $producto->ruta }}" width="50">
		</li>
	
	@endforeach
	
</ul>

@endsection