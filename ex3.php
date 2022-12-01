<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salva</title>
</head>
<body>
   <h1>Exercicio3</h1>
    <?php

echo "<br><br>";
$sexo = 1;
switch ($sexo) {
    case '1':
        echo "Masculino";
        break;
    case '2':
        echo "Feminino";
        break;
    default:
        echo "Sexo Inválido";
        break;
}
?>
</body>
</html>