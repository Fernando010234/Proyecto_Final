<?php
   include('conexion.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<title>Proyecto Final</title>
  <style>
    h1{
      color: white;
      text-align: center;
    }
  </style>
</head>
<body style="max-width: 80%; margin: auto;" class="p-3 mb-2 bg-secondary">

<div class="row">
    <div class="col-8">
      <h1>Todos los usuarios</h1>
    </div>
    <div class="col-4">
      <button type="button" class="btn btn-primary" onclick="agregar()">Agregar más Usuarios✔</button>
    </div>
   </div>
<table class="table table-dark table-borderless">
     <thead>
       <tr class="table-info">
         <th scope="col">id</th>
         <th scope="col">Nombre</th>
         <th scope="col">Apellido Materno</th>
         <th scope="col">Apellido Paterno</th>
         <th scope="col">Edad</th>
         <th scope="col">Fecha de Nacimiento</th>
         <th scope="col">Redes</th>
         <th scope="col">Telefono</th>
         <th scope="col">Email</th>
         <th scope="col">Opciones</th>
       </tr>
     </thead>
     <tbody>
      <?php
      $counter = 0;
           foreach ($resultado as $r) { ?>
            <tr>
              <?php $counter = $counter + 1; ?>
               <td><?php echo $r['id']; ?></td>
               <td><?php echo $r['nombre']; ?></td>
               <td><?php echo $r['ap1']; ?></td>
               <td><?php echo $r['ap2']; ?></td>
               <td><?php echo $r['edad']; ?></td>
               <td><?php echo $r['fechaNacimiento']; ?></td>
               <td><?php echo $r['linkRedes']; ?></td>
               <td><?php echo $r['telefono']; ?></td>
               <td><?php echo $r['email']; ?></td>
               <td>
               	<a href="<?php echo 'editUser.php?id='.$r['id'];?>" type="button" class="btn btn-outline-secondary">Editar🖊</a>
               	<a href="<?php echo 'deleteUser.php?id='.$r['id'];?>" type="button" class="btn btn-outline-secondary">Eliminar🗑</a>
               </td> 
            </tr>  
            <?php }?>
   </table>
   <?php 
  if ($counter == 0) {
  ?>  
  <h1>Ups!!!</h1>
  <h1>Al parecer aún no tienes a ningún usuario regitrado</h1>
  <div class="row">
    <div class="col-5"></div>
    <div class="col-2">
      <button type="button" class="btn btn-primary" onclick="agregar()">Primer registro✔</button>
    </div>
    <div class="col-5"></div>
   </div>
  <?php
  }
   ?>

<script type="text/javascript">
	function agregar(){
		window.location.replace("addUser.php");

	}


</script>
</body>
</html>