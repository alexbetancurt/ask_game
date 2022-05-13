<?php
include("class/Jugador.php");
include("class/Ronda.php");
include("class/Pregunta.php");

$jugadoractual = new Jugador($_POST["nombre"]);
$ronda = new Ronda();

?>

<html>
<body>

<h1>Hola <?php echo $jugadoractual->getNombre(); ?>. Bienvenido a este juego.</h1>

<?php

$pregunta = new Pregunta();
$puntuacion = 0;

if( $ronda->getNivel() == 1){

    $pregunta->obtener_pregunta_aleatoria();

    echo("<h2>Pregunta Nivel 1</h2>");
    echo("<h3>" . $pregunta->enunciado . "</h3>" );
    echo("<p>Opción 1: " .$pregunta->opcion1 . "</p>" );
    echo("<p>Opción 2: " .$pregunta->opcion2 . "</p>" );
    echo("<p>Opción 3: " .$pregunta->opcion3 . "</p>" );
    echo("<p>Opción 4: " .$pregunta->opcion4 . "</p>" );

}

?>

</body>
</html>

