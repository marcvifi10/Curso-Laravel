<html>
	<head>
		<title>CRUD</title>
		<meta charset="utf8">
		<style>
		
			.imagen
			{
				
				float:right;
				padding-right: 150px;
				width: 150px;
				
				
			}
		
		</style>
	</head>
	<body bgcolor="skyblue">
		<div id="cabecera">

			@yield("cabecera")
			
			<img src="" class="imagen">

		</div>
		<div id="contenido">
		
			@yield("contenido")
		
		</div>
		<div id="pie">
		
			@yield("pie")
		
		</div>
	</body>
</html>