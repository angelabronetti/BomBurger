<html>
	<head>
		<title>Combos</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../CSS/edicao12345.css">
	</head>
	<body class="Bcomb">

<!--====================================== barra de menu =======================================-->		
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
<!--====================================== barra de conteudo ====================================-->

<div id="comb1">
		<form action="Combo.php" method="POST">
			<img src="../IMG/cheeseburguer.jpg" id="IMGCI1" />
			<p id="fra">Cheeseburguer</p>
			<input type="text" id="colherdados" placeholder="Digite o Código da bebida" name="colherdados">
			<br><br>
			<input type="text" id="colherdados" placeholder="Digite o Código da Porção" name="colherdados">
			<br><br>				
			<select class="bebida">
				  <option value="1">Código da bebida</option>
				  <option value="2">1 Coca P</option>
				  <option value="3">2 Coca M</option>
				  <option value="4">3 Coca G</option>
				  <option value="5">4 Guarana P</option>
				  <option value="6">5 Guarana M</option>
				  <option value="7">6 Guarana G</option>
				  <option value="8">7 Fanta uva P</option>
				  <option value="9">8 Fanta uva M</option>
				  <option value="10">9 Fanta uva G</option>
			</select>
			<br><br>
			<select class="porcoes">
				  <option>Código da porção</option>
				  <option value="11">1 Batata Frita</option>
				  <option value="12">2 Batata Frita P</option>
				  <option value="13">3 Polenta Frita</option>
				  <option value="14">4 Polenta frita P</option>
			</select>
			<br><br>
			<input type="submit" name="enviarC" id="carrinhodecompra" value="Enviar ao carrinho">
			<br><br>
			<input type="submit" name="pagar" id="EfetuarPagamento" value="efetuar pagamento">
		</form>
			</div>

			<div id="comb2">
		<form action="Combo.php" method="POST">
			<img src="../IMG/CheeseFrango.jpg" id="IMGCI1" />
			<p id="fra">CheeseFrango</p>
			<input type="text" id="colherdados" placeholder="Digite o Código da bebida" name="colherdados">
			<br><br>
			<input type="text" id="colherdados" placeholder="Digite o Código da Porção" name="colherdados">
			<br><br>					
			<select class="bebida">
				  <option value="1">Código da bebida</option>
				  <option value="2">1 Coca P</option>
				  <option value="3">2 Coca M</option>
				  <option value="4">3 Coca G</option>
				  <option value="5">4 Guarana P</option>
				  <option value="6">5 Guarana M</option>
				  <option value="7">6 Guarana G</option>
				  <option value="8">7 Fanta uva P</option>
				  <option value="9">8 Fanta uva M</option>
				   <option value="10">9 Fanta uva G</option>
			</select>
			<br><br>
			<select class="porcoes">
				  <option>Código da porção</option>
				  <option value="11">1 Batata Frita</option>
				  <option value="12">2 Batata Frita P</option>
				  <option value="13">3 Polenta Frita</option>
				  <option value="14">4 Polenta frita P</option>
			</select>
			<br><br>
			<input type="submit" name="enviarC" id="carrinhodecompra" value="Enviar ao carrinho">
			<br><br>
			<input type="submit" name="pagar" id="EfetuarPagamento" value="efetuar pagamento">
		</form>
			</div>

			<div id="comb3">
		<form action="Combo.php" method="POST">
			<img src="../IMG/CheeseToscana.jpg" id="IMGCI1" />
			<p id="fra">CheeseToscana</p>
			<input type="text" id="colherdados" placeholder="Digite o Código da bebida" name="colherdados">
			<br><br>
			<input type="text" id="colherdados" placeholder="Digite o Código da Porção" name="colherdados">
			<br><br>					
			<select class="bebida">
				  <option value="1">Código da bebida</option>
				  <option value="2">1 Coca P</option>
				  <option value="3">2 Coca M</option>
				  <option value="4">3 Coca G</option>
				  <option value="5">4 Guarana P</option>
				  <option value="6">5 Guarana M</option>
				  <option value="7">6 Guarana G</option>
				  <option value="8">7 Fanta uva P</option>
				  <option value="9">8 Fanta uva M</option>
				   <option value="10">9 Fanta uva G</option>
			</select>
			<br><br>
			<select class="porcoes">
				  <option>Código da porção</option>
				  <option value="11">1 Batata Frita</option>
				  <option value="12">2 Batata Frita P</option>
				  <option value="13">3 Polenta Frita</option>
				  <option value="14">4 Polenta frita P</option>
			</select>
			<br><br>
			<input type="submit" name="enviarC" id="carrinhodecompra" value="Enviar ao carrinho">
			<br><br>
			<input type="submit" name="pagar" id="EfetuarPagamento" value="efetuar pagamento">
		</form>
			</div>

			<div id="comb4">
		<form action="Combo.php" method="POST">
			<img src="../IMG/cheesefilet].jpg" id="IMGCI1" />
			<p id="fra">Cheese Filet Mignon</p>	
			<input type="text" id="colherdados" placeholder="Digite o Código da bebida" name="colherdados">
			<br><br>
			<input type="text" id="colherdados" placeholder="Digite o Código da Porção" name="colherdados">
			<br><br>				
			<select class="bebida">
				  <option value="1">Código da bebida</option>
				  <option value="2">1 Coca P</option>
				  <option value="3">2 Coca M</option>
				  <option value="4">3 Coca G</option>
				  <option value="5">4 Guarana P</option>
				  <option value="6">5 Guarana M</option>
				  <option value="7">6 Guarana G</option>
				  <option value="8">7 Fanta uva P</option>
				  <option value="9">8 Fanta uva M</option>
				   <option value="10">9 Fanta uva G</option>
			</select>
			<br><br>
			<select class="porcoes">
				  <option>Código da porção</option>
				  <option value="11">1 Batata Frita</option>
				  <option value="12">2 Batata Frita P</option>
				  <option value="13">3 Polenta Frita</option>
				  <option value="14">4 Polenta frita P</option>
			</select>
			<br><br>
			<input type="submit" name="enviarC" id="carrinhodecompra" value="Enviar ao carrinho">
			<br><br>
			<input type="submit" name="pagar" id="EfetuarPagamento" value="efetuar pagamento">
		</form>
			</div>

			<div id="comb5">
		<form action="Combo.php" method="POST">
			<img src="../IMG/Cheesepicanha.jpg" id="IMGCI1" />
			<p id="fra">Cheesepicanha</p>	
			<input type="text" id="colherdados" placeholder="Digite o Código da bebida" name="colherdados">
			<br><br>
			<input type="text" id="colherdados" placeholder="Digite o Código da Porção" name="colherdados">
			<br><br>				
			<select class="bebida">
				  <option value="1">Código da bebida</option>
				  <option value="2">1 Coca P</option>
				  <option value="3">2 Coca M</option>
				  <option value="4">3 Coca G</option>
				  <option value="5">4 Guarana P</option>
				  <option value="6">5 Guarana M</option>
				  <option value="7">6 Guarana G</option>
				  <option value="8">7 Fanta uva P</option>
				  <option value="9">8 Fanta uva M</option>
				   <option value="10">9 Fanta uva G</option>
			</select>
			<br><br>
			<select class="porcoes">
				  <option>Código da porção</option>
				  <option value="11">1 Batata Frita</option>
				  <option value="12">2 Batata Frita P</option>
				  <option value="13">3 Polenta Frita</option>
				  <option value="14">4 Polenta frita P</option>
			</select>
			<br><br>
			<input type="submit" name="enviarC" id="carrinhodecompra" value="Enviar ao carrinho">
			<br><br>
			<input type="submit" name="pagar" id="EfetuarPagamento" value="efetuar pagamento">
		</form>
			</div>	

			<div id="comb6">
		<form action="Combo.php" method="POST">
			<img src="../IMG/bigxduplo.jpg" id="IMGCI1" />
			<p id="fra">Big X-Duplo</p>		
			<input type="text" id="colherdados" placeholder="Digite o Código da bebida" name="colherdados">
			<br><br>
			<input type="text" id="colherdados" placeholder="Digite o Código da Porção" name="colherdados">
			<br><br>			
			<select class="bebida">
				  <option value="1">Código da bebida</option>
				  <option value="2">1Coca P</option>
				  <option value="3">2Coca M</option>
				  <option value="4">3Coca G</option>
				  <option value="5">4Guarana P</option>
				  <option value="6">5Guarana M</option>
				  <option value="7">6Guarana G</option>
				  <option value="8">7Fanta uva P</option>
				  <option value="9">8Fanta uva M</option>
				   <option value="10">9Fanta uva G</option>
			</select>
			<br><br>
			<select class="porcoes">
				  <option>Código da porção</option>
				  <option value="11">1Batata Frita</option>
				  <option value="12">2Batata Frita P</option>
				  <option value="13">3Polenta Frita</option>
				  <option value="14">4Polenta frita P</option>
			</select>
			<br><br>
			<input type="submit" name="enviarC" id="carrinhodecompra" value="Enviar ao carrinho">
			<br><br>
			<input type="submit" name="pagar" id="EfetuarPagamento" value="efetuar pagamento">
		</form>
			</div>

			<div id="comb7">
		<form action="Combo.php" method="POST">
			<img src="../IMG/suino.jpg" id="IMGCI1" />
			<p id="fra">Big Suino</p>
			<input type="text" id="colherdados" placeholder="Digite o Código da bebida" name="colherdados">
			<br><br>
			<input type="text" id="colherdados" placeholder="Digite o Código da Porção" name="colherdados">
			<br><br>					
			<select class="bebida">
				  <option value="1">Código da bebida</option>
				  <option value="2">1 Coca P</option>
				  <option value="3">2 Coca M</option>
				  <option value="4">3 Coca G</option>
				  <option value="5">4 Guarana P</option>
				  <option value="6">5 Guarana M</option>
				  <option value="7">6 Guarana G</option>
				  <option value="8">7 Fanta uva P</option>
				  <option value="9">8 Fanta uva M</option>
				   <option value="10">9 Fanta uva G</option>
			</select>
			<br><br>
			<select class="porcoes">
				  <option>Código da porção</option>
				  <option value="11">Batata Frita</option>
				  <option value="12">Batata Frita P</option>
				  <option value="13">Polenta Frita</option>
				  <option value="14">Polenta frita P</option>
			</select>
			<br><br>
			<input type="submit" name="enviarC" id="carrinhodecompra" value="Enviar ao carrinho">
			<br><br>
			<input type="submit" name="pagar" id="EfetuarPagamento" value="efetuar pagamento">
		</form>
			</div>

	</body>
</html>