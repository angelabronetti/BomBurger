<html>
	<head>
		<!-- Start of talentoshelp Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="talentoshelp.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
        /*]]>*/</script>
<!-- End of talentoshelp Zendesk Widget script -->


		
		<title>Bom Burguer</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../CSS/estilo.css" />
		
		<script type="text/javascript" src="../JS/jquery.js"></script>
		<script type="text/javascript" src="../JS/jquerycycle.js" >	</script>
		
		<script type="text/javascript">
			// slide
		
			$(function(){

					$("#slide ul").cycle({
							  //fx:'fade',
							  //speed:2000,
							  //Timeout:2000,
							  //prev:'#previous',
							  //;next:'#next',
							  fx:'turnDown', 
   							  delay:-8000, 
   							});

			});

		</script> 
		
		<script type="text/javascript"> 
		 // Função criada para dar efeito nos textos


				$(function(){
					$('#n').fadeOut('fast');
					$('#n').fadeIn(8000);
					
					$('#visite').fadeOut('fast');
					$('#visite').fadeIn(8000);
					
					$('#v1').fadeOut('fast');
					$('#v1').fadeIn(8000);
					
					$('#v2').fadeOut('fast');
					$('#v2').fadeIn(8000);
					
					$('#img1').fadeOut('fast');
					$('#img1').fadeIn(8000);
					
					$('#img4').fadeOut('fast');
					$('#img4').fadeIn(8000);
					
					$('#img6').fadeOut('fast');
					$('#img6').fadeIn(8000);
					
				});
		</script> 
		
		<script type="text/javascript"> 
			// Função criada para dar efeito nas imagens -->
			$(function(){
				
				$('#IMG1').css('position''relative;');
				$('#IMG1').css('top''50px;');
				
				
			});
		</script>
	</head>
	<body>
	
	<!--=============================================menu===============================================-->		
	

		<div id="menu1"> <!-- div usada para criação do menu -->
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
		<!-- Aqui acaba o código do menu -->
			</div>
			<div id="slide"> <!--Imagens do slishow -->
					<ul>
						<li><img id="IMGS2" src="../IMG/dois.jpg"/></li>
						
						<li><img id="IMGS5" src="../IMG/cinco.jpg"/></li>
					</ul>
			</div> 
			
			
			<!-- ====================== Conteúdo da página ================================ -->
		
			
						<!-- Imagens colocadas no coropo da página -->
					
			<p id="n"> Venha conhecer nosso espaço! </p> <!-- parágrafo usado para design da página, com movimento e efeito jquery -->					
				<img id="img1" src="../IMG/coca.jpg"/> <!-- Imagens usada para ilustrar bebida, espaço e lanches -->
				<img id="img4" src="../IMG/IMG1.jpg"/>
				<img id="img6" src="../IMG/lugar.jpg"/>
						
			<div id="visite"> <p id="v"> Visite Nossa Loja <br> </p></div><!-- paragrafo para informações da localidade da loja -->
			 
			<div id="v1">	
				<p id="end"> Endereço: 			      </p><br>
				<p id="av">  Av. José Paulino, 1033       </p> <br>
				<p id="sp">  São Paulo - Interior       </p><br>
				<p id="ctt"> Contato: (19) 7064-2911 </p>
				
			</div>	
		
			<div id="v2">
				<p id="hr"> Horários: </p><br>			
				<p id="sg"> Segunda a Sexta: 11h às 23h  </p><br>
				<p id="sa"> Sábado e Domingo: 11h às 00h </p><br>
			</div>	
			
			<br>
			<br>
			<br>
			
					<a href="https://www.facebook.com/BomBurguer-563748394012166/"><img id="d1" src="../IMG/rede.png"/></a>
					<a href="https://www.instagram.com/bom.burguer/"><img id="d1" src="../IMG/rede1.png"/></a>
					
					
			
			
			
			
			<footer id="rodape"> <!--Rodapé criado para informar sobre as imagens e também informar sobre produtos da loja -->
			
			<p id="texto"> <i> @ 2018 </i>| <i> As imagens expostas nesse site são meramente ilustrativas. </i><br>
			
Informações completas e precisas inclusive sobre preços, prazos de validade e origem podem ser obtidas diretamente nas lojas. Consulte a loja para verificar disponibilidade.
			</p>
			
			</footer> 
			
</body>
</html>