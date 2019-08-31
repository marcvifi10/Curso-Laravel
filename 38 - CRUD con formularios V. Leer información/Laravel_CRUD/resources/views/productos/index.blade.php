@extends('../layouts.plantilla')

@section('cabecera')

	LEER REGISTROS

@endsection

@section('contenido')

<ul>

	@foreach($productos as $producto)
	
		<li>
			{{ $producto->NombreArticulo }} &nbsp; 
			{{ $producto->Seccion }} &nbsp; 
			{{ $producto->Precio }} &nbsp; 
			{{ $producto->Fecha }} &nbsp; 
			{{ $producto->PaisOrigen }}
		</li>
	
	@endforeach
	
</ul>

@endsection