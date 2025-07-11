<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php


//Loop para apresentar qual sera a tabuada exibida
for ($i = 0; $i <= 10; $i++) { 
    //Exibe por qualnumero sera multiplicado
    for ($contador = 0; $contador <= 10; $contador++){ 
        //Quando chegar ao 10, vai parar de repetir
        while ($i == $contador) {
           echo "<br>";

            break;
        }
            }
            //Exibe a quantida de vezes que será multiplicado
        for ($num = 0; $num <= 10; $num ++){
            
        $calc = $i * $num;
        echo "$i X $num = $calc\n <br>";
        }
}

?>
    
</body>
</html>