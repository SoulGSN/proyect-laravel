<!doctype html>
<html lang="en,es">
    <head>
        <title>Sistema</title>
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
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 px-0 d-none d-sm-block">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                        alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: right;">
                    </div>
                    <div class="col-sm-6 text-black">
                        <div class="px-5 ms-xl-4">
                            <span class="h1 fw-bold mb-0">Logo</span>
                            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        </div>

                        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                            <form action="{{ route('login')}}" method="POST" style="width: 23rem;">
                                @csrf

                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h3>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label mt-4" for="">Usuario</label>
                                    <input type="text" id="" class="form-control form-control-lg" placeholder="Ingrese Usuario"/>
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label mt-4" for="">Contraseña</label>
                                    <input type="password" id="" class="form-control form-control-lg" placeholder="Ingrese Contraseña"/>
                                </div>
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" checked />
                                    <label class="form-check-label" for="">Recordarme</label>
                                </div>
                                <div class="pt-1 mb-4">
                                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                                </div>
                                <p>No tienes cuenta? <a href="{{ route('register')}}" class="link-info">registrate aqui</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
