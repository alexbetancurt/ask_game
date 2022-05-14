<?php
include("class/Jugador.php");
include("class/Ronda.php");
include("class/Pregunta.php");

if($_POST["nombre"])
$jugadoractual = new Jugador($_POST["nombre"]);


$ronda = new Ronda();
$pregunta = new Pregunta();

?>

<html>
<body>

<h1>Hola <?php echo $jugadoractual->nombre ?>. Bienvenido a este juego.</h1>

<?php

    $pregunta->obtener_pregunta_1();

    echo ("<div id='divpregunta1'>");
    echo("<h2>Pregunta Nivel 1</h2>");
    echo("<h3>" . $pregunta->enunciado . "</h3>" );
    echo("<p>Opción 1: " .$pregunta->opcion1 . "</p>" );
    echo("<p>Opción 2: " .$pregunta->opcion2 . "</p>" );
    echo("<p>Opción 3: " .$pregunta->opcion3 . "</p>" );
    echo("<p>Opción 4: " .$pregunta->opcion4 . "</p>" );
    echo ('<form action="app.php" method="post">
    1 <input type="radio" name="opcion" value="1"> |  
    2 <input type="radio" name="opcion" value="2"> |  
    3 <input type="radio" name="opcion" value="3"> |  
    4 <input type="radio" name="opcion" value="4"> |  
    <input type="button" value="Enviar" onclick="comprobar1()">
    </form>');
    echo ("</div>");

    $pregunta->obtener_pregunta_2();

    echo ("<div id='divpregunta2'>");
    echo("<h2>Pregunta Nivel 2</h2>");
    echo("<h3>" . $pregunta->enunciado . "</h3>" );
    echo("<p>Opción 1: " .$pregunta->opcion1 . "</p>" );
    echo("<p>Opción 2: " .$pregunta->opcion2 . "</p>" );
    echo("<p>Opción 3: " .$pregunta->opcion3 . "</p>" );
    echo("<p>Opción 4: " .$pregunta->opcion4 . "</p>" );
    echo ('<form action="app.php" method="post">
    1 <input type="radio" name="opcion" value="1"> |  
    2 <input type="radio" name="opcion" value="2"> |  
    3 <input type="radio" name="opcion" value="3"> |  
    4 <input type="radio" name="opcion" value="4"> |  
    <input type="button" value="Enviar" onclick="comprobar()">
    </form>');
    echo ("</div>");

    $pregunta->obtener_pregunta_3();

    echo ("<div id='divpregunta3'>");
    echo("<h2>Pregunta Nivel 3</h2>");
    echo("<h3>" . $pregunta->enunciado . "</h3>" );
    echo("<p>Opción 1: " .$pregunta->opcion1 . "</p>" );
    echo("<p>Opción 2: " .$pregunta->opcion2 . "</p>" );
    echo("<p>Opción 3: " .$pregunta->opcion3 . "</p>" );
    echo("<p>Opción 4: " .$pregunta->opcion4 . "</p>" );
    echo ('<form action="app.php" method="post">
    1 <input type="radio" name="opcion" value="1"> |  
    2 <input type="radio" name="opcion" value="2"> |  
    3 <input type="radio" name="opcion" value="3"> |  
    4 <input type="radio" name="opcion" value="4"> |  
    <input type="button" value="Enviar" onclick="comprobar()">
    </form>');
    echo ("</div>");

    $pregunta->obtener_pregunta_4();

    echo ("<div id='divpregunta4'>");
    echo("<h2>Pregunta Nivel 4</h2>");
    echo("<h3>" . $pregunta->enunciado . "</h3>" );
    echo("<p>Opción 1: " .$pregunta->opcion1 . "</p>" );
    echo("<p>Opción 2: " .$pregunta->opcion2 . "</p>" );
    echo("<p>Opción 3: " .$pregunta->opcion3 . "</p>" );
    echo("<p>Opción 4: " .$pregunta->opcion4 . "</p>" );
    echo ('<form action="app.php" method="post">
    1 <input type="radio" name="opcion" value="1"> |  
    2 <input type="radio" name="opcion" value="2"> |  
    3 <input type="radio" name="opcion" value="3"> |  
    4 <input type="radio" name="opcion" value="4"> |  
    <input type="button" value="Enviar" onclick="comprobar()">
    </form>');
    echo ("</div>");

    $pregunta->obtener_pregunta_5();

    echo ("<div id='divpregunta5'>");
    echo("<h2>Pregunta Nivel 5</h2>");
    echo("<h3>" . $pregunta->enunciado . "</h3>" );
    echo("<p>Opción 1: " .$pregunta->opcion1 . "</p>" );
    echo("<p>Opción 2: " .$pregunta->opcion2 . "</p>" );
    echo("<p>Opción 3: " .$pregunta->opcion3 . "</p>" );
    echo("<p>Opción 4: " .$pregunta->opcion4 . "</p>" );
    echo ('<form action="app.php" method="post">
    1 <input type="radio" name="opcion" value="1"> |  
    2 <input type="radio" name="opcion" value="2"> |  
    3 <input type="radio" name="opcion" value="3"> |  
    4 <input type="radio" name="opcion" value="4"> |  
    <input type="button" value="Enviar" onclick="comprobar()">
    </form>');
    echo ("</div>");

?>


<script>




function comprobar1() {

}

 

</script>


</body>
</html>

