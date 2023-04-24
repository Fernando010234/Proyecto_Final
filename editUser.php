<?php 
include 'conexion.php';
$id = $_GET ['id'];
$sql = 'SELECT * FROM usuarios WHERE id ='.$id;
$resultado = $con2->query($sql);
$resultado = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Editar Registro</title>
    <style>
    h1{
      color: white;
      text-align: center;
    }
  </style>
</head>
<body style="max-width: 80%; margin: auto;" class="p-3 mb-2 bg-secondary">

    <form  id="form1" name="form1" method="POST" action="editUser1.php" >
        <div class="row" >
            <div class="col-2"> </div>
            <div class="col-8">
                <h1>Editar Registro</h1>
                <br>
        <div class="row">
             <div class="col-3">
                <label for="">id:</label>
                <input  type="text"  class="form-control" disabled="true" id="nombre" name="nombre" required value="<?php echo $resultado['id']; ?>" >
            </div>

            <div class="col-3">
                <label for="">Nombre:</label>
                <input  type="text"  class="form-control" id="nombre" name="nombre" required value="<?php echo $resultado['nombre']; ?>" >
            </div>
            <div class="col-3">
                <label for="">Apellido Paterno:</label>
                <input  type="text"  class="form-control" id="ap1" name="ap1" required value="<?php echo $resultado['ap1']; ?>">
            </div>
            <div class="col-3">
                <label for="">Apellido Materno:</label>
                <input  type="text"  class="form-control" id="ap2" name="ap2" required value="<?php echo $resultado['ap2']; ?>">
            </div>
        </div>
      <br>
        <div class="row">
            <div class="col-6">
                <label for="">Edad:</label>
                <input  type="text"  class="form-control" id="edad" name="edad" required value="<?php echo $resultado['edad']; ?>">
            </div>
            <div class="col-6">
                <label for="">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required value="<?php echo $resultado['fechaNacimiento']; ?>" >
            </div>
        </div>
      <br>
        <div class="row">
            <div class="col-4">
                <label for="">linkRedes:</label>
                <input  type="text"  class="form-control" id="linkRedes1" name="linkRedes1" required value="<?php echo $resultado['linkRedes']; ?>">
            </div>
            <div class="col-4">
                <label for="">Email:</label>
                <input  type="text"  class="form-control" id="email" name="email" required value="<?php echo $resultado['email']; ?>">
            </div>
            <div class="col-4">
                <label for="">Telefono:</label>
                <input  type="text"  class="form-control" id="telefono" name="telefono" required value="<?php echo $resultado['telefono']; ?>">
            </div>
        </div>
      <br>
        <div class="row">
        <div class="col-5"></div>
        <div class="col-7">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
     </div>
            </div>
        </div>  
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>