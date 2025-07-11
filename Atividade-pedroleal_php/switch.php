<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$s = "lampada";

switch($s){

    case "casa":
        print "A casa é amarela";
        break;
    case "arvore":
        print "a arvore é bonita";
        break;
    case "lampada":
        print "joao apagou a lampada";
        break;        
    default:
        print "voce nao selecionou";
        break;        
}

?>
    
</body>
</html>