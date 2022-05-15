<?php
include("class/Jugador.php");
include("class/Pregunta.php");

if($_POST["nombre"])
$jugadoractual = new Jugador($_POST["nombre"]);

$pregunta = new Pregunta();

?>

<html>
<body style="text-align: center;">

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

    $enunciado[3] = $pregunta->enunciado;
    $opcion1[3] =$pregunta->opcion1;
    $opcion2[3] =$pregunta->opcion2;
    $opcion3[3] =$pregunta->opcion3;
    $opcion4[3] =$pregunta->opcion4;
    $r[3] = $pregunta->respuesta;

    $pregunta->obtener_pregunta(4);

    $enunciado[4] = $pregunta->enunciado;
    $opcion1[4] =$pregunta->opcion1;
    $opcion2[4] =$pregunta->opcion2;
    $opcion3[4] =$pregunta->opcion3;
    $opcion4[4] =$pregunta->opcion4;
    $r[4] = $pregunta->respuesta;

    $pregunta->obtener_pregunta(5);

    $enunciado[5] = $pregunta->enunciado;
    $opcion1[5] =$pregunta->opcion1;
    $opcion2[5] =$pregunta->opcion2;
    $opcion3[5] =$pregunta->opcion3;
    $opcion4[5] =$pregunta->opcion4;
    $r[5] = $pregunta->respuesta;
?>
<hr>
<form id="quiz-form">
        <label>
            <h1 id="nivel">NIVEL 1</h2>
            <h2 id="enunciado">Espacio para el enunciado</h2>
            <p id="p1"></p>
            <p id="p2"></p>
            <p id="p3"></p>
            <p id="p4"></p> 
            <hr>
                 <input type="radio" name="opcion" value="1">1 |  
                 <input type="radio" name="opcion" value="2">2 |  
                 <input type="radio" name="opcion" value="3">3 |  
                 <input type="radio" name="opcion" value="4">4 |  
        </label> <br><br>
        <button type="submit">ENVIAR Y CONTINUAR</button>
        <hr>
    </form>

<form id="exit">
<p id="miacomulado"></p>
<button id="exitbutton" type="submit" hidden="hidden">RETIRARME DEL JUEGO</button>
</form>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script type="text/javascript">

    //   CARGA AL INICIAR
    //   
	$(document).ready(function()
		{
            document.getElementById("enunciado").innerHTML = '<?php echo $enunciado[1] ?>';
            document.getElementById("p1").innerHTML = "OPCIÓN 1:  " +'<?php echo $opcion1[1] ?>';
            document.getElementById("p2").innerHTML = "OPCIÓN 2:  " +'<?php echo $opcion2[1] ?>';
            document.getElementById("p3").innerHTML = "OPCIÓN 3:  " +'<?php echo $opcion3[1] ?>';
            document.getElementById("p4").innerHTML = "OPCIÓN 4:  " +'<?php echo $opcion4[1] ?>';

        });
    </script>

    <script>
    
    //   COMPRUEBA SI ES CORRECTO O INCORRECTO
    //   submit

    var $nivel = 1;

    $("#quiz-form").on("submit", function(event) {
        event.preventDefault();

        let element = document.getElementById("exitbutton");
        element.removeAttribute("hidden");

        var $opcionseleccionada = $("input:radio[name=opcion]:checked").val();
        
        
        if ($nivel === 1){
        //carga respuesta actual
        var respuestacorrecta = "<?php echo $r[1] ?>";
        //carga siguiente pregunta
        var mienunciado = '<?php echo  $enunciado[2] ?>';
        var opcion1 = '<?php echo $opcion1[2] ?>';
        var opcion2 = '<?php echo $opcion2[2] ?>';
        var opcion3 = '<?php echo $opcion3[2] ?>';
        var opcion4 = '<?php echo $opcion4[2] ?>';
        }

        if ($nivel === 2){
        //carga respuesta actual
        var respuestacorrecta = "<?php echo $r[2] ?>";
        //carga siguiente pregunta
        var mienunciado = '<?php echo  $enunciado[3] ?>';
        var opcion1 = '<?php echo $opcion1[3] ?>';
        var opcion2 = '<?php echo $opcion2[3] ?>';
        var opcion3 = '<?php echo $opcion3[3] ?>';
        var opcion4 = '<?php echo $opcion4[3] ?>';
        }

        if ($nivel === 3){
        //carga respuesta actual
        var respuestacorrecta = "<?php echo $r[3] ?>";
        //carga siguiente pregunta
        var mienunciado = '<?php echo  $enunciado[4] ?>';
        var opcion1 = '<?php echo $opcion1[4] ?>';
        var opcion2 = '<?php echo $opcion2[4] ?>';
        var opcion3 = '<?php echo $opcion3[4] ?>';
        var opcion4 = '<?php echo $opcion4[4] ?>';
        }

        if ($nivel === 4){
        //carga respuesta actual
        var respuestacorrecta = "<?php echo $r[4] ?>";
        //carga siguiente pregunta
        var mienunciado = '<?php echo  $enunciado[5] ?>';
        var opcion1 = '<?php echo $opcion1[5] ?>';
        var opcion2 = '<?php echo $opcion2[5] ?>';
        var opcion3 = '<?php echo $opcion3[5] ?>';
        var opcion4 = '<?php echo $opcion4[5] ?>';
        }

        if ($nivel === 5){
        //carga respuesta actual
        var respuestacorrecta = "<?php echo $r[5] ?>";
        //carga siguiente pregunta
        var mienunciado = '<?php echo  $enunciado[5] ?>';
        var opcion1 = '<?php echo $opcion1[5] ?>';
        var opcion2 = '<?php echo $opcion2[5] ?>';
        var opcion3 = '<?php echo $opcion3[5] ?>';
        var opcion4 = '<?php echo $opcion4[5] ?>';
        }

        if(respuestacorrecta === $opcionseleccionada){

            var $premio;
            if ($nivel === 1)
            $premio = "1 MILLÓN";

            if ($nivel === 2)
            $premio = "5 MILLONES";

            if ($nivel === 3)
            $premio = "20 MILLONES";

            if ($nivel === 4)
            $premio = "50 MILLONES";

            if ($nivel === 5){
            $premio = "100 MILLONES";
            window.location.href = 'index.php';

            //Aqui seguiria la funcion para guardar datos y finalizar juego

            }

            alert ("Es Correcto, acabas de ganar " + $premio);

            $nivel = $nivel + 1; 

            //Muestra la siguiente pregunta
            document.getElementById("nivel").innerHTML = "NIVEL " + $nivel;
            document.getElementById("enunciado").innerHTML = mienunciado;
            document.getElementById("p1").innerHTML = "OPCIÓN 1:  " + opcion1; 
            document.getElementById("p2").innerHTML = "OPCIÓN 2:  " + opcion2;
            document.getElementById("p3").innerHTML = "OPCIÓN 3:  " + opcion3;
            document.getElementById("p4").innerHTML = "OPCIÓN 4:  " + opcion4;

            document.getElementById("miacomulado").innerHTML = "PREMIO ALCANZADO:  " + $premio;

            

        }else{
            alert ("Es Incorrecto, acabas de perderlo todo!");  
            window.location.href = 'index.php';
        }
        
    });

    $("#exit").on("submit", function(event) {
        event.preventDefault();
        alert ("Felicidades. Te retiraste con tu acomulado");
        window.location.href = 'index.php';
    });
    </script>


</body>
</html>

