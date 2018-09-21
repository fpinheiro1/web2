<DOCTYPE HTML>
<html>
<head><title>
</title></head>
<body>
    <?php $nome = $_POST["nome"];
    
    if ($nome=="admin"){
        for ($x=0;$x<10;$x++){
            echo "<h1> $x - Seu Nome é: $nome</h1>"; }}
    else {
        while($x<10){
            echo "<h1> $x - Voce não é admin</h1>";
            $x++;
        }
    }
    ?>
</body>
</html>