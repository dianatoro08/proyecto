
<?php include "../php/session.php";?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario PQR</title>
  <link rel="stylesheet" href="../css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<body>
<?php include('menuOpciones.php'); ?>
      <h1>Formulario de PQR</h1>
  <div class="container">
  <?php
     if(isset($_GET['message'])){
        echo "<div class='alert alert-success'>".$_GET['message']."</div>";
     }
    ?>
    <form method="POST" action="guardaPqr.php">
      <div class="mb-3">
        <label for="inputNombre" class="form-label">Nombre completo</label>
        <input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Nombre completo" required>
      </div>
      <div class="mb-3">
        <label for="inputEmail" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Correo electrónico" required>
      </div>
      <div class="mb-3">
        <label for="inputAsunto" class="form-label">Asunto</label>
        <input type="text" class="form-control" id="inputAsunto" name="asunto"  placeholder="Asunto" required>
      </div>
      <div class="mb-3">
        <label for="inputMensaje" class="form-label">Mensaje</label>
        <textarea class="form-control" id="inputMensaje" name="mensaje" rows="3" placeholder="Ingrese su mensaje" required></textarea>
      </div>
      <input type="hidden" name="documento" value="<?php echo $_SESSION['documento'];?>">
      <input type="submit" class="btn btn-primary" name="guardar" value="Enviar">
      <input type="button" class="btn btn-success" value="Consultar pqrs" name="registro" onclick="window.location.href='consultarPqr.php'">
    </form>
    
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>