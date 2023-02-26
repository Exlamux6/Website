<?php
    include 'cabecera.php';
?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider_2.jpg" class="d-block w-100" alt="...">
            </div> 
            <div class="carousel-item">
                <img src="img/slider_3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div> <br>
<body style="background-color: #ffff;">
<div class="container">
<div class="row g-4">
    <div class="col-md-9">
      <h3 class="pb-4 mb-4 fst-italic border-bottom border-primary">
        Noticias
      </h3>

      <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Leyenda</strong>
          <h3 class="mb-0">El dinero enterrado ¿se mueve?</h3>
          <div class="mb-1 text-muted">Agosto 2022</div>
          <p class="card-text mb-auto">De este hallazgo se desprende de...
           </p>
          <a href="leyenda.php" class="stretched-link">Continuar leyendo...</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="img/leyenda.JPG" alt=""position-relative class="bd-placeholder-img" width="200" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Libro</strong>
          <h3 class="mb-0">Desde el Rincón GRANDE</h3>
          <div class="mb-1 text-muted">Agosto 2022</div>
          <p class="card-text mb-auto">Desde el Rincón Grande, El Ejido...
           </p>
          <a href="libro/Desde-el-Rincón-GRANDE-EL-EJIDO.pdf" target="blank" class="stretched-link">Descargar el libro...</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="img/libro.jpg" alt=""position-relative class="bd-placeholder-img" width="200" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
      </div>
    </div>
  </div>

      <article class="blog-post">
       <h2 class="border-bottom border-primary">Otros Datos</h2> <br>
       <h5>Población en Nuevo Guerrero</h5> <br>
       <table width="100%" style="text-align:center">
            <thead>
                <tr>
                    <td><b>Año</b></td>
                    <td><b>Habitantes Mujeres</b></td>
                    <td><b>Habitantes Hombres</b></td>
                    <td><b>Total Habitantes</b></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2005</td>
                    <td>676</td>
                    <td>656</td>
                    <td>1332</td>
                </tr>
                <tr>
                    <td>2010</td>
                    <td>700</td>
                    <td>711</td>
                    <td>1411</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>649</td>
                    <td>711</td>
                    <td>1360</td>
                </tr>
            </tbody>
       </table>
      </article> <br> <br>

      <article class="blog-post">
          <h2 class="border-bottom border-primary">Ubicación</h2> <br>
            <p style="text-align:center ;">C.P. 40609, Nuevo Guerrero, Tlapehuala, Guerrero</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7579.251872673603!2d-100.5262566!3d18.22710555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ccc95428fccc7f%3A0x9829e4b33c7ec0fb!2sNuevo%20Guerrero%2C%20Gro.!5e0!3m2!1ses-419!2smx!4v1658803002935!5m2!1ses-419!2smx" 
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <?php
      include 'aside.php';
    ?>
  </div>

</main>
</div>
</body>
<?php
  include 'pie.php';
?>