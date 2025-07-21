<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

# rand - Gera um inteiro aleatorio
$sorteio = rand(0,5);
echo "Sorteado foi: $sorteio <hr/>";

#array_merge - Combina um ou mais arrays
#range - Cria um array contendo uma faixa de elementos
#(inicio,fim,passo)
$vetor = array_merge( range(0,10),
                        range($sorteio, 10, 2),
                        array($sorteio));

print_r($vetor);
echo "<hr/>";
#embaralha
shuffle($vetor);
print_r($vetor);
echo"<hr/>";

?>

<center><footer>Pedro Gabriel Leal Costa | Estudante Técnico</footer></center>
    
</body>
</html>