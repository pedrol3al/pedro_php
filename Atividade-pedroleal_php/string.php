<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$age = 16;

print("You are " .$age. " years old. \n <br>"); 
print("You are $age years old. \n <br>"); #Ainda interpreta as variaveis mesmo sem a co
print('You are $age years old. \n <br>'); # Aspas simples vira cadeia de caracteres



?>
    
<?php


$cidade = "Joinville";
$estado = "SC";
$idade = 174;
$frase_capital = "A cidade $cidade é a capital do $estado";
$frase_idade = "$cidade tem mais $idade anos";

echo "<h3>$frase_capital</h3>";
echo "<h4>$frase_idade</h4>";

print "Today is your $ageth birthday. <br>\n"; #$ageth not found


print "Today is your {$age} birthday. \n"; 


?>

</body>
</html>