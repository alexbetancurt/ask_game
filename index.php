<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <h1
>Bienvenido al juego de preguntas y respuestas</h1>
<hr>
<p>Este juego consta de 5 preguntas por nivel, cada nivel tiene un premio especial:</p>

<h3>PREMIOS </h3>
<P>NIVEL 1: 1 MILLON</p>
<P>NIVEL 2: 5 MILLONES</p>
<P>NIVEL 3: 20 MILLONES</p>
<P>NIVEL 4: 50 MILLONES</p>
<P>NIVEL 5: 100 MILLONES </p>

<hr>

<h3>Ingresa tu nombre y da click en iniciar para empezar</h3>
<p>Si no sabes la respuesta, puedes abandonar el juego para llevarte los premios acomulados. 
    En caso de errar con una sola pregunta, perderas todo el puntaje</p>
    <p><strong>Mucha Suerte!</strong></p>

<form name="myForm" action="app.php" onsubmit="return validateForm()" method="post" required>
    Nombre: <input type="text" name="nombre"><br><br>
    <input type="submit" value="Iniciar Juego">
</form>
<hr>


<script>
function validateForm() {
  var x = document.forms["myForm"]["nombre"].value;
  if (x == "") {
    alert("Debe ingresar nombre para iniciar");
    return false;
  }
}

</script>
</body>
</html>