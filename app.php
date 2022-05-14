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

    $pregunta->obtener_pregunta(1);

    $enunciado1 = $pregunta->enunciado;
    $p1_opcion1 =$pregunta->opcion1;
    $p1_opcion2 =$pregunta->opcion2;
    $p1_opcion3 =$pregunta->opcion3;
    $p1_opcion4 =$pregunta->opcion4;
    $r1 = $pregunta->respuesta;

    $pregunta->obtener_pregunta(2);

    $enunciado2 = $pregunta->enunciado;
    $p2_opcion1 =$pregunta->opcion1;
    $p2_opcion2 =$pregunta->opcion2;
    $p2_opcion3 =$pregunta->opcion3;
    $p2_opcion4 =$pregunta->opcion4;
    $r2 = $pregunta->respuesta;

    $pregunta->obtener_pregunta(3);

    $enunciado3 = $pregunta->enunciado;
    $p3_opcion1 =$pregunta->opcion1;
    $p3_opcion2 =$pregunta->opcion2;
    $p3_opcion3 =$pregunta->opcion3;
    $p3_opcion4 =$pregunta->opcion4;
    $r3 = $pregunta->respuesta;

    $pregunta->obtener_pregunta(4);

    $enunciado4 = $pregunta->enunciado;
    $p4_opcion1 =$pregunta->opcion1;
    $p4_opcion2 =$pregunta->opcion2;
    $p4_opcion3 =$pregunta->opcion3;
    $p4_opcion4 =$pregunta->opcion4;
    $r4 = $pregunta->respuesta;

    $pregunta->obtener_pregunta(5);

    $enunciado5 = $pregunta->enunciado;
    $p5_opcion1 =$pregunta->opcion1;
    $p5_opcion2 =$pregunta->opcion2;
    $p5_opcion3 =$pregunta->opcion3;
    $p5_opcion4 =$pregunta->opcion4;
    $r5 = $pregunta->respuesta;
?>

<form id="quiz-form">
        <label>
            <h2 id="demo">Espacio para el enunciado</h2>
            <p id="p1"></p>
            <p id="p2"></p>
            <p id="p3"></p>
            <p id="p4"></p>
                1 <input type="radio" name="opcion" value="1"> |  
                2 <input type="radio" name="opcion" value="2"> |  
                3 <input type="radio" name="opcion" value="3"> |  
                4 <input type="radio" name="opcion" value="4"> |  
        </label> <br>
        <button type="submit">Check Answer</button>
    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script type="text/javascript">

    //   CARGA AL INICIAR
    //   
	$(document).ready(function()
		{
            document.getElementById("demo").innerHTML = '<?php echo $enunciado1 ?>';
            document.getElementById("p1").innerHTML = '<?php echo $p1_opcion1 ?>';
            document.getElementById("p2").innerHTML = '<?php echo $p1_opcion2 ?>';
            document.getElementById("p3").innerHTML = '<?php echo $p1_opcion3 ?>';
            document.getElementById("p4").innerHTML = '<?php echo $p1_opcion4 ?>';

            var $nivel = 1;
        });
    </script>

    <script>
    
    //   COMPRUEBA SI ES CORRECTO O INCORRECTO
    //   submit
    $("#quiz-form").on("submit", function(event) {
        event.preventDefault();

        var $opcionseleccionada = $("input:radio[name=opcion]:checked").val();
        
        var respuestacorrecta = '<?php echo $r1 ?>';

        if(respuestacorrecta === $opcionseleccionada){

            alert ("Es Correcto");

            document.getElementById("demo").innerHTML = '<?php echo $enunciado2 ?>';
            document.getElementById("p1").innerHTML = '<?php echo $p2_opcion1 ?>';
            document.getElementById("p2").innerHTML = '<?php echo $p2_opcion2 ?>';
            document.getElementById("p3").innerHTML = '<?php echo $p2_opcion3 ?>';
            document.getElementById("p4").innerHTML = '<?php echo $p2_opcion4 ?>';

            $nivel = $nivel + 1; 

        }else{
            alert ("Es Incorrecto");  
        }
        
    });
    </script>


</body>
</html>

