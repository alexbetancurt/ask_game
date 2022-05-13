<?php
include("class/Jugador.php");
include("class/Ronda.php");

$jugadoractual = new Jugador($_POST["nombre"]);
$ronda = new Ronda();

?>

<html>
<body>

<h1>Hola <?php echo $jugadoractual->$nombre; ?>. Bienvenido a este juego.</h1>

<?php


if( $ronda->getNivel() == 1){
    
}

?>

</body>
</html>

