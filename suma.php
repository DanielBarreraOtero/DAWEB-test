<?php
$a = $_GET['a'];
$b = $_GET['b'];
$resul = 0;
echo "valor A:$a ", "<br>";
echo "valor B:$b ", "<br>";

switch ($_GET['op']) {
    case 'suma':
        $resul = $_GET['a'] + $_GET['b'];
        break;
    case 'resta':
        $resul = $_GET['a'] - $_GET['b'];
        break;
    case 'multiplicar':
        $resul = $_GET['a'] * $_GET['b'];
        break;
    case 'dividir':
        $resul = $_GET['a'] / $_GET['b'];
        break;
}

echo "resutlado: ", $resul;
