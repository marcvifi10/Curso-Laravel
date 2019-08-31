@extends('../layouts.plantilla')

@section('cabecera')



@endsection

@section('contenido')

	<!-- <form method="post" action="/productos"> -->
	
	{!! Form::open(['url' => '/productos', 'method' => 'post', 'files'=>true]) !!}
	
		{!! Form::file('file') !!}
	
		<br><br>
	
		<input type="text" name="NombreArticulo">
		
		{{csrf_field()}}
		
		<br><br>
		
		{!! Form::label('nombre','Nombre del articulo') !!}
		
		{!! Form::text('nombre') !!}
		
		<!-- <input type="text" name="NombreArticulo"> -->
		<br><br>
		
		{!! Form::label('seccion','Seccion') !!}
		
		{!! Form::text('seccion') !!}
		
		<br><br>
		
		{!! Form::label('precio','Precio') !!}
		
		{!! Form::text('precio') !!}
		
		<br><br>
		
		{!! Form::label('fecha','Fecha') !!}
		
		{!! Form::text('fecha') !!}
		
		<br><br>
		
		{!! Form::label('PaisOrigen','Pais de origen') !!}
		
		{!! Form::text('PaisOrigen') !!}
		
		<br><br>
		
		<!-- <input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="borrar" value="Borrar"> -->
		
		{!! Form::submit('Enviar') !!}
		
		{!! Form::reset('Borrar campos') !!}
	
	{!! Form::close() !!}
	
	
	@if(count($errors) > 0)
		
		<ul>
		
			@foreach(errors->all() as $error)
			
				<li> 
				
					{{ $error }} 
					
				</li>
			
			@endforeach
			
		</ul>

	@endif
	
	
	<!-- </form> -->

@endsection