<?php
	/**
    	* Clase Ejemplo de Funciones Documentadas en php
    	*
    	* @author Dámaris Angulo Navarro
    	* @version 1.0
    	*/
	class EjemploFunciones{
   	/**
	 * Función para sumar dos números dados
	 *
	 * Nos permite realizar la suma de dos números introducidos como parámetros
	 *
	 * @param float $num1 primer número a sumar
	 * @param float $num2 segundo número a sumar
	 * @return float $resultado resultado de la suma
	 */
	 function sumar($num1, $num2){
	    $resultado = $num1 + $num2;
	    return $resultado;
	 }
	 /**
	  *
	  * Divide dos números dados
	  *
	  * Función que dados dos números, los divide y nos facilita el resultado.
	  *
	  * @internal Esta función será interna de éste proyecto
	  * @param float $num1 primer número de la división
	  * @param float $num2 segundo número de la división
	  * @return float $resultado resultado de la división
	  */
	  function dividir($num1, $num2){
	     $resultado = $num1 / $num2;
	     return $resultado;
	  }
   }
   ?>
