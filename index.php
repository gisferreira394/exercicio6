<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form method="POST">
        Positivo ou negativo
        <input type="int" name ="numero">

        <button type="submit" name="Verificar">Verificar</button>
    </form>


<?php

 if(isset($_POST["Verificar"])){
        $valor = $_POST["numero"];

    }

        if ($valor >=1){
        echo "<p>É positivo</p>";
        }

else if ($valor == 0) {
            echo "<p> É igual a 0 </p>";
        }
        else {
            echo "<p>É negativo</p>";
        }

?>
</body>
</html>