<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagamento</title>
	
	<script type="text/javascript" src="../JS/Pagamentobe.js"></script>
	<style type="text/css">
		
		body{
			background-image: url('../IMG/HUM1.jpg');
		}
		#pag{
			font-size: 50px;
			position: absolute;
			top: 250px;
			background-color: red;
			color: currentColor;
			border-radius: 20px;
		}
		#inppag{
			position: absolute;
			top: 500px;
			font-size: 40px;
			border-radius: 20px;
			color: white;
			background-color: black;
		}
		

	</style>
</head>
<body>

	<div id="pag">
		<?php include 'coletacompra.php' ?>

	</div>
	
		<form method="POST" action="index.php">
	<input type="submit" onclick="" id="inppag" name="pagamento" value="Efetuar pagamento">

		</form>
</body>
</html>