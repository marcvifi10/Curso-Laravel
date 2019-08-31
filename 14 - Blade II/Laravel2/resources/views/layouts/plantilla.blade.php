<html>
	<head>
		<style>
		
			.contenedor
			{
				
				background-color:red;
				text-align:center;
				
			}
			
			.infoGeneral
			{
				
				background-color: #00F;
				margin: 200px 0;
				color: #FFF;
				
			}
			
			.pie
			{
				
				background-color: #FF0;
				
			}
		
		</style>
	</head>
	<body>
		<div class="contenedor">
			
			@yield("cabecera")
			
		</div>
		<div class="infoGeneral">
		
			@yield("infoGeneral")
		
		</div>
		<div class="pie">
		
			@yield("pie")
		
		</div>
	</body>
</html>