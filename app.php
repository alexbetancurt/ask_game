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

    $enunciado[1] = $pregunta->enunciado;
    $opcion1[1] =$pregunta->opcion1;
    $opcion2[1] =$pregunta->opcion2;
    $opcion3[1] =$pregunta->opcion3;
    $opcion4[1] =$pregunta->opcion4;
    $r[1] = $pregunta->respuesta;

    $pregunta->obtener_pregunta(2);

    $enunciado[2] = $pregunta->enunciado;
    $opcion1[2] =$pregunta->opcion1;
    $opcion2[2] =$pregunta->opcion2;
    $opcion3[2] =$pregunta->opcion3;
    $opcion4[2] =$pregunta->opcion4;
    $r[2] = $pregunta->respuesta;

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
            document.getElementById("demo").innerHTML = '<?php echo $enunciado[1] ?>';
            document.getElementById("p1").innerHTML = '<?php echo $opcion1[1] ?>';
            document.getElementById("p2").innerHTML = '<?php echo $opcion2[1] ?>';
            document.getElementById("p3").innerHTML = '<?php echo $opcion3[1] ?>';
            document.getElementById("p4").innerHTML = '<?php echo $opcion4[1] ?>';

            var $nivel = 1;
        });
    </script>

    <script>
    
    //   COMPRUEBA SI ES CORRECTO O INCORRECTO
    //   submit
    $("#quiz-form").on("submit", function(event) {
        event.preventDefault();

        var $opcionseleccionada = $("input:radio[name=opcion]:checked").val();
        
        var respuestacorrecta = "<?php echo $r[1] ?>";

        if(respuestacorrecta === $opcionseleccionada){

            alert ("Es Correcto");

            document.getElementById("demo").innerHTML = '<?php echo  $enunciado[2] ?>';
            document.getElementById("p1").innerHTML = '<?php echo $opcion1[2] ?>';
            document.getElementById("p2").innerHTML = '<?php echo $opcion2[2] ?>';
            document.getElementById("p3").innerHTML = '<?php echo $opcion3[2] ?>';
            document.getElementById("p4").innerHTML = '<?php echo $opcion4[2] ?>';

            $nivel = $nivel + 1; 

        }else{
            alert ("Es Incorrecto");  
        }
        
    });
    </script>


</body>
</html>

