<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<br/>";
        $AmazonProducts = array(
            array("Código" => "Livro", "Descrição" => "Livros", "Preço" => 50),
            array("Código" => "DVDs", "Descrição" => "Filmes", "Preço" => 15),
            array("Código" => "CDs", "Descrição" => "Musica", "Preço" => 20)
        );

        for ($linha =0; $linha < 3; $linha++){ ?> 
        <p> |<?= $AmazonProducts[$linha]["Código"]?>
            |<?= $AmazonProducts[$linha]["Descrição"]?>
            |<?= $AmazonProducts[$linha]["Preço"]?>
        </p>
        
<?php
    }
?>
    <center><footer>Pedro Gabriel Leal Costa | Estudante Técnico</footer></center>

    
</body>
</html>