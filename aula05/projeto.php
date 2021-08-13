<?php


 if ( isset($_POST["name"]) && isset($_POST["salario"]) &&
     isset($_POST["genero"]) && isset($_POST["cargo "]){

        $nome = $_POST["origem"];
        $salario = $_POST["salario"];
        $genero = $_POST["genero"];
        $cargo = $_POST["cargo"]

        $salarioNovo= $salario > 5000 ? $salario * 1.1 : $salario * 1.2;

    }else{
        die("<main> Você não enviou todos os dados</main>") 
    } 


    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento salarial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p> <?= $genero === "m" ? "0" : ($genero === "f"? "A" : "") ?>
    <?= $nome ?> passará a receber $
    <?= number_format($salarioNovo, 2, ",", ".") ?>,
    no cargo de <?= $cargo ?></p>
    </main>
</body>















 