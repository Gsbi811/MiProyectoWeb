<?php

/**
 * Realiza la suma de dos números.
 *
 * @param int|float $num1 El primer número.
 * @param int|float $num2 El segundo número.
 * @return int|float La suma de los dos números.
 */
function suma($num1, $num2) {
    return $num1 + $num2;
}

/**
 * Realiza la resta de dos números.
 *
 * @param int|float $num1 El número al que se le resta.
 * @param int|float $num2 El número a restar.
 * @return int|float La diferencia entre los dos números.
 */
function resta($num1, $num2) {
    return $num1 - $num2;
}

/**
 * Realiza la multiplicación de dos números.
 *
 * @param int|float $num1 El primer número.
 * @param int|float $num2 El segundo número.
 * @return int|float El producto de los dos números.
 */
function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}

/**
 * Realiza la división de dos números.
 *
 * @param int|float $num1 El dividendo.
 * @param int|float $num2 El divisor.
 * @return int|float|string El resultado de la división o un mensaje de error si el divisor es cero.
 */
function division($num1, $num2) {
    if ($num2 == 0) {
        return "Error: División por cero.";
    }
    return $num1 / $num2;
}

/**
 * Controlador central para realizar operaciones matemáticas básicas.
 *
 * Permite ejecutar suma, resta, multiplicación o división según la operación indicada.
 *
 * @param int|float $num1 El primer número.
 * @param int|float $num2 El segundo número.
 * @param string $operacion La operación a realizar ('suma', 'resta', 'multiplicacion', 'division').
 * @return int|float|string El resultado de la operación o un mensaje de error si la operación no es válida.
 */
function calculadora($num1, $num2, $operacion) {
    switch ($operacion) {
        case 'suma':
            return suma($num1, $num2);
        case 'resta':
            return resta($num1, $num2);
        case 'multiplicacion':
            return multiplicacion($num1, $num2);
        case 'division':
            return division($num1, $num2);
        default:
            return "Error: Operación no válida.";
    }
}
?>
