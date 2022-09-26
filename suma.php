<?php
$a;
$b;
$resul = 0;

// Comprobamos que a exista, y sino lo notificamos por pantalla
if (isset($_GET['a'])){
    $a = $_GET['a'];
    echo "valor A:$a ", "<br>";
} else {
    echo "Debe insertar el valor de A.<br>";
}

// Comprobamos que b exista, y sino lo notificamos por pantalla
if (isset($_GET['b'])){
    $b = $_GET['b'];
    echo "valor B:$b ", "<br>";
} else {
    echo "Debe insertar el valor de B.<br>";
}

// Comprobamos que op exista, y sino lo notificamos por pantalla
if (isset($_GET['op'])){
    switch ($_GET['op']) {
        case 'suma':
            $resul = $_GET['a'] + $_GET['b'];
            echo "resutlado: ", $resul;
            break;
        case 'resta':
            $resul = $_GET['a'] - $_GET['b'];
            echo "resutlado: ", $resul;
            break;
        case 'multiplicar':
            $resul = $_GET['a'] * $_GET['b'];
            echo "resutlado: ", $resul;
            break;
        case 'dividir':
            $resul = $_GET['a'] / $_GET['b'];
            echo "resutlado: ", $resul;
            break;
        default:
        // Si no es ninguno de los anteriores
            echo "Ese operador no existe, por favor use (suma/resta/multiplicar/dividir)";
            break;
    }
} else {
    echo "Debe insertar el valor de op.<br>";
}

?>
