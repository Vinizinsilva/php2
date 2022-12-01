<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <?php
$nome = "Vinicius";
$idade = 17;
$louco = false;
//False -- Falso - 0 verdadeiro -- True */
echo "<p>ID do cliente: $nome <br>";
echo "Idade do cliente: $idade <br>";
echo "Louco: $louco </p>";

 /* OPERADORES ARTIMÉTICOS */

 echo 20*3;
 echo "<br>";

 // OPERADORES RELACIONAIS

 echo 20>10;
 echo "<br>";

// ESTRUTURA DE DECISÃO

// UMA PESSOA COM 75 ANOS NÃO PODE ENTRAR NA FESTA DA MELYSSA
// SE FOR FUMANTE NÃO PODE ENTRAR
// IF SIMPLES - TERÁ NO MÁXIMO 2 RESPOSTA DIFERENTES
echo "<br>";
$idade = 10;
$fumante = false;
// if = SE
if($idade > 75 || $fumante == true || $idade <= 10){
    echo "PROIBIDO A ENTRADA ACIMA DE 75 ANOS NA FESTA, NÃO PODE SER FUMANTE E NÃO ENTRA ABAIXO DE 10 ANOS";
}else{
    echo "pode entrar, seja bem vindo";
}




//UM ALUNO, SE TIRAR UMA ACIMA DE 8 ELE É APROVADO
// SE TIRAR UMA NOTA ENTRE 5 E 8 RECUPERAÇÃO
// SE ELE TIRAR ABAIXO DE 5 ESTARÁ REPROVADO

// IF COMPOSTO - TERÁ MAIS DE 2 RESPOSTA DIFERENTES
echo "<br>";
$nota = 10;
if($nota >= 8){
    echo "Aprovado(a)";
}else if($nota >= 5){
    echo "Recuperação";
}else{
   echo "Reprovado(a)";
}
echo "<br>";

// vcs irão np Senac somente se:
// estiver uniformisado
// chegar no horário
// mensagem: verdadeiro ---- PARABÉS, VC PODE IR
//              falso -------- FERROU, VC VAI FICAR NA SALA DO VALDEIR
echo "<br><br>";
$uniforme = true;
$horario = true;
if($uniforme == true && $horario == true){
    echo "PARABÉS, VC PODE IR";
}else{
    echo "FERROU, VC VAI FICAR NA SALA DO VALDEIR HAHAHAHA";
}


// ternário
echo "<br><br>";
$uniforme = true;
$horario = false;
echo ($uniforme == true && $horario == true) ? "PARABÉS, VC PODE IR" : "FERROU, VC VAI FICAR NA SALA DO VALDEIR HAHAHAHA";

// SUA COR FAVORITA PODE SER: VERMELHO, AZUL, VERME 
// SWTICH - ESCOLHER UMA DAS OPÇÕES


$cor = "Azul";
switch ($cor) {
    case 'Azul':
        echo "<br><br>";
        echo "Sua cor favorita é $cor";
        break;
     case 'Verde':
         echo "<br><br>";
         echo "Sua cor favorita é $cor";
        break;
    case 'Vermelho':
        echo "<br><br>";
        echo "Sua cor favorita é $cor";
        break;
    default:
        echo "<br>";
        echo "Sua cor favorita não é azul, verde ou vermelho";
        break;
}

//dias da semana ----- 1 domingo , 2 segunda, 3 terça, 4 quarta, 5 quinta, 6 sexta e 7 - sábado
echo "<br><br>";
$dia = 1;
switch ($dia) {
    case '1':
        echo "Domingo";
        break;
    case '2':
        echo "Segundo-Feira";
        break;
    case '3':
        echo "Terça-Feira";
        break;
    case '4':
        echo "Quarta-Feira";
        break;
    case '5':
        echo "Quinta-Feira";
        break;
    case '6':
        echo "Sexta-Feira";
        break;
    case '7':
        echo "Sábado";
        break;
    default:
        echo "Dia Inválido";
        break;
}

// escolha um presente para o professor em seu aniversário:
// 1 - Um pote de Sorvete
// 2 - Mouse quebrado
// 3 - Celular da biqueira funcionando desbloquedo
// 4 - Fone usado 
// 5 - Mouse pad rasgado
// 6 - 1 kg feijão
// 7 - Um Vale burger King 

echo "<br><br>";
$presente = 2;
switch ($dia) {
    case '1':
        echo "Um pote de Sorvete";
        break;
    case '2':
        echo "Mouse quebrado";
        break;
    case '3':"Celular da biqueira funcionando desbloquedo";
        break;
    case '4':
        echo "Fone usado";
        break;
    case '5':
        echo "Mouse pad rasgado";
        break;
    case '6':
        echo "1 kg feijão";
        break;
    case '7':
        echo "Um Vale burger King ";
        break;
    default:
        echo "Presente Inválido";
        break;
}





    ?>
</body>
</html>