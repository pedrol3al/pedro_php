<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$nota1 = 5;
$nota2 = 8;
$nota3 = 8;
$media = ($nota1 + $nota2 + $nota3) / 3;

if($media >= 7){

echo ("Você foi aprovado, parabéns, sua nota foi: $media");

}elseif($media <= 5 ){

    echo ("Você esta de recuperação sua nota foi: $media");

}else{

echo ("Você foi reprovado, que pena!");

}
?>
    
</body>
</html>