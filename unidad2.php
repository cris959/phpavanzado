<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
                            <!-- UNIDAD II -->
	    
    
	<section class="fecha">
		<h2>Eventos</h2>
		 <h3>Función Fechas</h3>
		  <form action="calculo_fecha.php" method="POST">
            <input type="number" name="day" min="1" max="31" placeholder="Día" required>
			 <input type="number" name="month" min="1" max="12" placeholder="Mes" required>
			  <input type="number" name="year" min="1900" max="2099" placeholder="Año" required>
			   <input type="submit" value="Calcular"> 
          </form>

		  <?php
if(isset($_GET['ok'])) {
	echo "<h4>Fecha cargada!</h4>";
}
?>

<div id="ver_fechas">
	<h3>Calcular Fechas</h3>

	                             <!-- PHP -->
	<?php 
	include("calculo_fecha.php");
	?>                          
   <!-- div fecha -->   
	                            <!-- END PHP -->  
	                           
</div>

	</section>
	                            <!-- END -->
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>



/**
<?php 
	
//	$fecha = date("Y/m/d");
//	echo "<h4>Hoy es: $fecha</h4>";
//	if($fecha<"2023/05/15") {
//		echo "<p>Sitio en mantenimiento</p>";
//	} else {
//		echo "<h4>Bienvenidos al sitio !!</h4>";
//		}
	?> 

 */

 <?php //{ ?>

<!--<div class="fecha">
  <p>Día: <?php //echo $day['day']; ?></p>
   <p>Mes: <?php //echo $month['month']; ?></p>
	<p>Año: <?php //echo $year['year']; ?></p>
	
</div>	           -->
 <?php //} ?> 