<DOCTYPE HTML>
<html>
<head><title>
</title></head>
<body>
    <?php $vetor = array(array('nome'=>'Andre', 'idade'=>43, 'salario'=> 32000, '70'=>'teste'),
     array('nome'=>'Felipe', 'idade'=>24, 'salario'=> 3000, '70'=>'teste2'));

    //var_export($nome) ;
    foreach ($vetor as $linha){
        echo "<p> Nome:".$linha['nome']."</p>";
        echo "<p> Nome:".$linha['idade']."</p>";
        echo "<p> Nome:".$linha['salario']."</p>";
        echo "<p> Nome:".$linha['70']."</p>";
        echo "<hr>";

    }
    

    ?>
</body>
</html>