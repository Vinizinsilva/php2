<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
</head>
<body>
<h1>Exercicio 5</h1>

<?php

//Faça um Programa que pergunte em que turno você estuda.
//Peça para digitar M-matutino ou V-Vespertino ou N- Noturno
//Imprima a mensagem "Bom Dia!", "Boa Tarde!" ou "Boa Noite!" ou "Valor Inválido!", conforme o caso.
echo "<br><br>";
$turno = 9;
switch ($turno) {
case '1':
echo "Bom Dia! M-matutino";
break;
case '2':
echo "Boa Tarde! V-Vespertino";
break;
case '3':
echo "Boa Noite! N- Noturno";
break;
default:
echo "Valor Inválido!";
break;
}
?>
</body>
</html>
