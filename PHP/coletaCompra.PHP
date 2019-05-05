<?php



$bebidaC = $_POST['inp1'];

switch ($bebidaC) {
	case '1':
		$nome = 'Coca P';
		$valor = 6.90;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result; 
		# code...
		break;
		case '2':
		$nome = 'Coca M';
		$valor = 9.00;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result;  
		# code...
		break;
		case '3':
		$nome = 'Coca G';
		$valor = 11.00;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result; 
		# code...
		break;
		case '4':
		$nome = 'Fanta Uva P';
		$valor = 6.90;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result; 
		# code...
		break;
		case '5':
		$nome = 'Fanta Uva M';
		$valor = 9.00;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result; 
		# code...
		break;
		case '6':
		$nome = 'Fanta Uva G';
		$valor = 11.00;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result; 
		# code...
		break;
		case '7':
		$nome = 'Guarana P';
		$valor = 6.90;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result; 
		# code...
		break;
		case '8':
		$nome = 'Guarana M';
		$valor = 9.00;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result; 
		# code...
		break;
		case '9':
		$nome = 'Guarana G';
		$valor = 11.00;
		$limite = 500;
		$result = $limite - $valor;
		echo $nome.'<br>'.$valor.'<br>'.'Seu limite é: '.'<br>'.'R$ '. $result;  
		# code...
		break;	
		default:
		echo '';
		break;
};





?>