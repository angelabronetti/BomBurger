<html>
	<head>
		<title>Bebidas</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../CSS/edicao1234.css">
		<script type="text/javascript" src="../JS/jquery.js"></script>
	<script type="text/javascript" src="../JS/Pagamentobe.js"></script>
	</head>
	<body>
	
<!--=============================================menu===============================================-->		
		<nav class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="cardapio.php">Cardapio</a>
						<ul>
							<li><a href="combo.php">Combos</a>
						<ul>
								
								
						</ul>
						</li>
						<li><a href="lanche.php">Lanches</a></li>
						<li><a href="bebida.php">Bebidas</a></li>
						<li><a href="porcoes.php">Porções</a></li>
					</ul>

				<li><a href="login.php">Cadastro</a></li>
				<li><a href="sobre.php">BomBurguer</a></li>
			</ul>
		</nav>


		<div id="bebi1">
			
			<form method="POST" action="pagamentobe.php">
				
				<div id="phpcoleta"><?php include 'coletaCompra.PHP' ?>
					
				</div>
				<img id="IMGB1" src="../IMG/bebidas.png">
				<p id="bebifra"> Bebidas</p>
				<input type="text" id="escolhabe" name="inp1" placeholder="Digite o codigo da bebida">
				<br><br>
				<input type="submit" onclick="coleta()" id="beped" value="Pedir" name="pedirbe">
				<br><br>
				<select id="es">
					<option value="0">Código das bebidas</option>
					<option value="1">1 Coca P </option>
					<option value="2">2 Coca M</option>
					<option value="3">3 Coca G</option>
					<option value="4">4 Fanta uva P</option>
					<option value="5">5 Fanta uva M</option>
					<option value="6">6 Fanta uva G</option>
					<option value="7">7 Guarana P</option>
					<option value="8">8 Guarana M</option>
					<option value="9">9 Guarana G</option>
				</select>
			</form>

		</div>
	</body>
</html>