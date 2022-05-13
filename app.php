<?php
include("class/Jugador.php");

$jugadoractual = new Jugador($_POST["nombre"]);

?>

<html>
<body>

<h1>Hola <?php echo $jugadoractual->getNombre(); ?>. Bienvenido a este juego.</h1>

</body>
</html>

