<html>
<head><title>Validação</title></head>
<body>
<?php 
$nome = (String)$_POST['nome'];
$senha = (String)$_POST['senha'];
if ($senha=="123"){
echo "Bem Vindo $nome";
}
else
{echo "senha incorreta";}
?>    

</body>
</html>