<?php include "../php/session.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRDhotel</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <?php include('menuOpciones.php'); ?>

  <main>
    <div class="room">
      <h2>Habitación individual</h2>
      <img src="../img/habitacionindividual.jpg">
      <p>Disfruta de una habitación individual con todas las comodidades por solo $50.000 por noche.</p>
      <button onclick="window.location.href='formularioRe.php'">Reservar ahora</button>
    </div>

    <div class="room">
      <h2>Habitación doble</h2>
      <img src="../img/habitacion.jpg">
      <p>Comparte una habitación doble con tu pareja o amigo por solo $70.000 por noche.</p>
      <button onclick="window.location.href='formularioRe.php'">Reservar ahora</button>
    </div>

    <div class="room">
      <h2>Suite de lujo</h2>
      <img src="../img/habitacionlujo.jpg">
      <p>Siéntete como un rey en nuestra suite de lujo por solo $150.000 por noche.</p>
      <button onclick="window.location.href='formularioRe.php'">Reservar ahora</button>
    </div>
  </main>

  <footer>
    <div class="container">
      <button style="background-color: green;" onclick="window.location.href='consultarReserva.php'">Consultar reserva</button>
      <!-- <button style="background-color: red;" onclick="window.location.href='eliminarReserva.html'">Eliminar reserva</button> -->
    </div>
  </footer>
</body>
</html>

