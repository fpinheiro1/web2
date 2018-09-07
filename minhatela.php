<html>
<head><title></title></head>
<body>
<?php 
$nome = $_GET['nome'];
$valor = $_GET['valor'];

if ($valor==1){
    echo "Bem Vindo Professor $nome";
}
    else if($valor==2){ 
    echo "Bem Vindo Aluno $nome";
    }

?>    

</body>
</html>