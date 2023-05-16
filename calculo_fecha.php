
<?php

//$day = $_POST['day'];
//$month = $_POST['month']; 
//$year = $_POST['year']; 


// Convierte la entrada a un formato de fecha

$fechaEntrada = date_create($day = $_POST['day'].'-'.$month = $_POST['month'].'-'.$year = $_POST['year']);

// *--Crear objeto DateTime con la fecha ingresada--*



// Calcular la diferencia entre la fecha ingresada y la fecha estática


// Valor estatico para comparar

$fechaEstatica = date_create('2023-05-15');

// *--Crear objeto DateTime con la fecha estática--*

$diferencia = date_diff($fechaEntrada, $fechaEstatica); 

// *--Calcular la diferencia entre las dos fechas--*


// *--Obtener la diferencia en dias --*

$dias = $diferencia ->format('%a');


// *--Mostrar el resultado --* 

echo "<h4>Diferencia de fechas: $dias días</h4>";


include("unidad2.php");



header("Location: unidad2.php?ok#fecha"); 


?>



Explicación:

Primero, creamos un objeto DateTime utilizando la fecha ingresada a través de la forma. La función
date_create() se utiliza para crear este objeto a partir de los componentes del día, mes y año 
obtenido del formulario.
Luego, creamos otro objeto DateTime con la fecha estática que es "2023-05-15".
A continuación, utilizamos la función date_diff() para calcular la diferencia entre las dos fechas.
Esta función devuelve un objeto DateInterval que contiene información sobre la diferencia entre las
fechas.
Usamos el método format('%a') del objeto DateInterval para obtener la diferencia en días como una 
cadena.
Finalmente, mostramos el resultado en el formato deseado usando echo.
Al utilizar la función date_diff(), podemos aprovechar la funcionalidad incorporada de PHP para 
calcular la diferencia entre dos fechas de manera más sencilla y precisa, sin la necesidad de 
realizar cálculos manuales o conversiones de tiempo.


----------------------------------------------------------------------------------------------------


Para obtener la diferencia en días, dividimos la diferencia de tiempo en segundos entre (60 * 60 * 24),
que es igual a 86.400, ya que hay 86.400 segundos en un día.

El resultado de esta división puede tener decimales, pero al aplicar floor() se redondea hacia abajo
al número entero más cercano, asegurando así que obtenemos la diferencia en días sin decimales.

En resumen, la fórmula toma los timestamps de las dos fechas, calcula la diferencia en segundos y 
luego la divide por la cantidad de segundos en un día para obtener la diferencia en días. El 
resultado final se almacena en la variable $diferencia.

