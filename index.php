<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <title>Login</title>
</head>

<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <img src="https://www.politecnicomayor.edu.co/moodle/form_inicio/images/logo1.png" style="width: 220px;" alt="logo">
                  </div>
                  <form action="accion.php" method="POST">
                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" class="form-control" placeholder="Dirección de correo electronico"/>
                      <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" class="form-control"/>
                      <label class="form-label" for="password">Contraseña</label>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg azul mb-3" type="submit">Log
                        in</button>
                      <a class="text-muted" href="#!">Olvidaste tu contraseña?</a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Asistente de Sistemas,</h4>
                  <p class="small mb-0">El técnico laboral por competencias en Asistente de Sistemas podrá desempeñarse como desarrollador de software, programador de aplicaciones informáticas, técnico de sistemas y analistas de sistemas de información.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>