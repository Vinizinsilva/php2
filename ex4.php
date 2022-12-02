<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
</head>
<body>
<h1>Exercicio4</h1>
    <?php

// Faça um programa para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar:
// A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
// A mensagem "Reprovado", se a média for menor do que sete;
// A mensagem "Aprovado com Distinção", se a média for igual a dez.
echo "<br>";
$nota = 6;
if($nota >= 8){
    echo "Aprovado(a)";
}else if($nota >= 5){
    echo "Recuperação";
}else{
   echo "Reprovado(a)";
}
echo "<br>";


    ?>
</body>
</html>