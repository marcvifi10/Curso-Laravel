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
			{{ $producto->PaisOrigen }}
		</li>
	
	@endforeach
	
</ul>

@endsection