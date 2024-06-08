<?php
include('header.php')
?>
<div class="row">
    <div class="col-12">
        <h1 class="mt-4">Hola, <?php echo $_SESSION['username']; ?></h1>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Usuarios</h5>
                <p class="card-text">100 nuevos usuarios</p>
                <a href="#" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ventas</h5>
                <p class="card-text">$12,000 en ventas</p>
                <a href="#" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Comentarios</h5>
                <p class="card-text">5 nuevos comentarios</p>
                <a href="#" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php')
?>