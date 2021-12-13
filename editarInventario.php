<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Editar Inventario</title>
    <!-- Validación sesiones -->
        <?php
        session_Start();
        $usuario= $_SESSION['username'];

        if(!isset($usuario))
          header("location: index.php")
         ?>
    <!-- Fin  Validación sesiones -->
  </head>
  <body>

    <!-- NavBar -->
    <div class="navbar">
        <img src="./imagenes/cecyteqlogo1.png" class="logo" alt="Main Logo">
        <ul>
      <li class="f"><a href="menu.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Inicio</a></li>
      <li class="f"><a href="invcompleto.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Inventario</a></li>
      <li class="f"><a href="editarInventario.php?idInventario=<?php echo $row['idInventario']; ?>" style="color: yellowgreen; font-family: 'Pacifico', cursive; font-size: 1.3rem;" class="active">Editar Inventario</a></li>
      <li class="a"><button onclick="window.location.href='login/salir.php'" name="btncerrar" type="button" style="border-color: #FF5733; color: #FF5733; font-family: 'Pacifico', cursive;" class="btn btn-outline">Cerrar Sesión</button></li>
  </ul>
    </div>
    <!-- Fin NavBar -->
    <?php
        include("conexion.php");
        $idInventario=$_REQUEST['idInventario'];
        $query="select * from tbinventariotoño where idInventario ='$idInventario'";
        $resultado=$conexion->query($query);
        $row=$resultado->fetch_assoc();

       ?>
    <!--Formulario index -->
            <form class="contenedorform" style="margin: 0vw 30vw;height: auto;" action="funcionesBD.php?idInventario=<?php echo $row['idInventario'] ?>"  method="POST" enctype="multipart/form-data">
                                           <div class="form-group">
                                           <label >No Cons:</label>
                                           <input type="text" class="form-control" id="" name="idInventario" value="<?php echo $row['idInventario']; ?>" disabled required>
                                           </div>
                                           <br>
                                           <div class="form-group">
                                           <label>Descripción:</label>
                                           <input type="text" class="form-control" id="" name="descripcion" value="<?php echo $row['descripcion']; ?>" required>
                                           </div>
                                           <br>
                                           <div class="form-group">
                                           <label>Marca:</label>
                                           <input type="text" class="form-control" id="" name="marca" value="<?php echo $row['marca']; ?>" required>
                                           </div>
                                           <br>
                                           <div class="form-group">
                                           <label>Modelo:</label>
                                           <input type="text" class="form-control" id="" name="modelo" value="<?php echo $row['modelo']; ?>" required>
                                           </div>
                                           <br>
                                           <div class="form-group">
                                           <label>Serie:</label>
                                           <input type="text" class="form-control" id="" name="serie" value="<?php echo $row['serie']; ?>" required>
                                           </div>
                                           <br>
                                           <div class="form-group">
                                           <label>Costo:</label>
                                           <input type="number" class="form-control" id="" name="costo" step="0.01" value="<?php echo $row['costo']; ?>" required>
                                           </div>
                                           <br>
                                           <div class="form-group">
                                           <label>Inventario CECyTEQ:</label>
                                           <input type="text" class="form-control" id="" name="inventario" value="<?php echo $row['inventario']; ?>" required>
                                           </div>
                                           <br>
                                           <div class="form-group">
                                           <label>Observaciones:</label>
                                           <input type="text" class="form-control" id="" name="observaciones" value="<?php echo $row['observaciones']; ?>" required>
                                           </div>
                                           <br>
                                           <div class="form-group">
                                             <label >Imagen: </label>
                                             <input type="file" class="form-control" name="Imagen" id="Imagen">
                                             <label style="color: gray;">Inserte una imagen solo si la desea actualizar</label>
                                             <center><img style="border-radius:10px" height="180px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"/></center>                             
                                           </div>
                                           <br>
                                           <div class="col text-center">
                                               <button type="submit" name="btnActualizarInventario" class="btn btn-primary btn-sm" style="width: 500px; height: 50px; font-size: 1.1rem;">Actualizar Herramienta</button>
                                           </div>
                                         </form>


    <!--Fin Formulario registro de herramientas -->




        <!-- JS para que los h1 se vean mamalon -->
        <script src="js/typer.js"></script>
        <!-- JS para que no acepte campos vacios -->
        <script src="js/camposvacios.js"></script>
  </body>
</html>
