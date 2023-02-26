<?php
    include 'cabecera.php';
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "BrujA1509";
    $databases = "formulario";
    $conection = mysqli_connect($servername, $username, $password, $databases);
?>
<body style="background-color: #afbadf;">
<div class="container">
<div class="row g-4">
    <div class="col-md-9"> <br>
      <h3 class="pb-4 mb-4 fst-italic border-bottom border-primary">
        Contacto
      </h3>

      <form action="contacto.php" method="post">
        <div class="col-md-12">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" required autofocus autocomplete="of" name="nombre" id="nombre" placeholder="Nombre/nombres">
        </div> <br>
        <div class="col-md-12">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" required autocomplete="of" name="apellidos" id="apellidos"  placeholder="Apellidos">
        </div> <br>
        <div class="form-group col-md-12">
            <label for="correo">Email</label>
            <input type="email" class="form-control" required autocomplete="of" name="correo" id="correo" placeholder="Email">
        </div> <br>
        <div>
            <label for="asunto">Asunto</label> <br>
            <select class="form-group rounded border-0 col-md-4" name="asunto" id="asunto">
                <option value="Sugerencia">Sugerencia</option>
                <option value="Aportación de informacion">Aportación de información</option>
                <option value="Queja">Queja</option>
                <option value="Agradecimiento">Agradecimiento</option>
            </select>
        </div> <br>
        
        <div class="form-group col-md-12">
            <label for="comentario">Comentario</label>
            <input type="text" class="form-control" autocomplete="of" required name="comentario" id="comentario" placeholder="Ingresa un comentario">
        </div> <br>

        <button type="submit" class="btn btn-primary" value="enviar" name="enviar" id="enviar">Enviar</button>
    </form> <br> <br>
    <?php
        if (isset($_POST['enviar'])) {
            $nombre =$_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $asunto = $_POST['asunto'];
            $comantario = $_POST['comentario'];
            $insertarDatos = "INSERT INTO datos_personales(nombre, apellido, correo, asunto, comentario) VALUES ('$nombre', '$apellidos', '$correo', '$asunto', '$comantario')";
            $ejecutarInsertar = mysqli_query($conection,$insertarDatos);
             }
    ?>
    
    <div class="col-md-12">
    <?php
  $sql = "SELECT * FROM datos_personales"; 
  $resultado = mysqli_query($conection, $sql);
?>
        <h2 class="pb-4 mb-4 fst-italic border-bottom border-primary">
          Comentarios
        </h2>
        <table class="col-md-12 table table-success table-striped">
          <thead>
            <th>Nombre</th>
            <th>Comentario</th>
          </thead>
          <tbody>
            <?php
            while ($registros = $resultado ->fetch_assoc()) {
              ?>
              <tr>
                <td><?php echo $registros['nombre'];?></td>
                <td><?php echo $registros['comentario']; ?></td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
    </div>


    </div>
    <?php
      include 'aside.php';
    ?>
  </div>

</main>
</div>
</body>

<?php
    $conection->close();
?>
<?php
    include 'pie.php';
?>