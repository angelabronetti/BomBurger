<?php


function coletardadoslg(){
    $nome = $_POST['tNome'];
    $dtnascimento = $_POST['tDate'];
    $sexo = $_POST['tsexo'];
    $telefone = $_POST['tTelefone'];
    $endereco = $_POST['tEnderco'];
    $numero = $_POST['tNumero'];
    $sexo = $_POST['tComplemento'];
    $bairro = $_POST['tBairro'];
    $cidade = $_POST['tCidade'];
    $cep = $_POST['tCep'];
    $estado = $_POST['tEstadoo'];
    $email = $_POST['tEmail'];
    $senha = $_POST['tSenha'];
    $senhaConf = $_POST['tSenhac'];
    $cpf = $_POST['tCpf'];
    $numeroC = $_POST['tCartao'];
    $codigoC = $_POST['tCodigo'];
    $bandeira = $_POST['tBandeira'];
    $validade = $_POST['tValidade'];
    $nomedoc = $_POST['tVomedoc'];

    $inserir = "insert into cliente(nome,dtnascimento,sexo,telefone,endereco,numero,sexo,bairro,
        cidade,cep,estado,email,senha,senhaconf,senha,cpf,numeroc,
        codigoc,bandeira,validade,nomedoc) values( $nome,$dtnascimento,
            $sexo,$telefone,$endereco,$numero,$sexo,$bairro,$cidadde,
            $cep,$estaddo,$email,$senha,$senhaconf,$cpf,$numeroC,
            $codigoC,$bandeira,$validade,$nomedoc)";



$result = mysqli_query($con,$inserir);

$row = mysqli_fetch_assoc($result);
$opcao = "<br>" . $row[""] ."".$row[""];
echo $opcao;

 // associação 

 for($i=0; $i<$row; $i++){    
        $row=mysqli_fetch_assoc($result);
        echo "<br>".$row["nome"]." ".$row["cpf"];
    }
   
    // Free result set
    mysqli_free_result($result);
     mysqli_close($con);


}

coletardadoslg();

 $con=mysqli_connect("localhost","root","","BomBurguer");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
    	
    };

$consulta = "select nome, cpf from cliente";
$result = mysqli_query($con,$consulta);

$row = mysqli_fetch_assoc($result);
$opcao = "<br>" . $row['nome'] ."".$row["cpf"];
echo $opcao;

 // associação 

 for($i=0; $i<$row; $i++){    
        $row=mysqli_fetch_assoc($result);
        echo "<br>".$row["nome"]." ".$row["cpf"];
    }
   
    // Free result set
    mysqli_free_result($result);
     mysqli_close($con);
    




?>