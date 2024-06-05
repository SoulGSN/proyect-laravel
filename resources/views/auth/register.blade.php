<!DOCTYPE html>
<html>
<head>
<title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}"> <!-- enlace con los estilos-->

</head>

<body>
    <!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <!-- Jumbotron -->
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
             <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
              alt="" />
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                    <div class="card-body p-5 shadow-5 text-center">
                    <h2 class="fw-bold mb-5">Registro de Usuario</h2>
                    <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">
                        <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="" class="form-control text-center" placeholder="Ingrese su nombre"/>
                            <label class="form-label" for="">Nombre</label>
                        </div>
                    </div>
                        <div class="col">
                        <div data-mdb-input-init class="form-outline">
                        <input type="text" id="" class="form-control text-center" placeholder="Ingrese su apellido"/>
                        <label class="form-label" for="">Apellido</label>
                        </div>
                    </div>
                    </div>
                        <div class="col">
                        <div data-mdb-input-init class="form-outline">
                        <input type="text" id="" class="form-control mt-3 text-center" placeholder="Ingrese el nombre de usuario que desea tener"/>
                        <label class="form-label" for="">Usuario</label>
                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="container mb-4">
                    <label class="form-label" for="">Correo</label>
                    <input type="email" id="" class="form-control" placeholder="Ingrese su correo"/>
                    
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="container mb-4">
                    <label class="form-label" for="">Contraseña</label>
                    <input type="password" id="" class="form-control" placeholder="Ingrese contraseña"/>
                    
                </div>
                <div data-mdb-input-init class="container mb-4">
                    <label class="form-label" for="">Confirma Contraseña</label>
                    <input type="password" id="" class="form-control" placeholder="Vuelva a introducir la contraseña"/>
                    
                </div>

                <!-- Submit button -->
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                    Registrar
                </button>


                </form>
            </div>
            </div>
        </div>
    </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</body>
</html>
