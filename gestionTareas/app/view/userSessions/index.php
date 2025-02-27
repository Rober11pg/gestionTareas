<head>
    <title>Gestor de Tareas</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<?php if (isset($_GET['message']) && $_GET['message'] === 'success') { ?>
    <div class="alert alert-success" role="alert">
        Usuario Agregado con éxito!
    </div>
<?php } else if (isset($_GET['message']) && $_GET['message'] === 'unsuccess') { ?>
    <div class="alert alert-danger" role="alert">
        No se ha podido agregar al usuario!
    </div>
<?php } else if (isset($_GET['message']) && $_GET['message'] === 'loginFailed') { ?>
    <div class="alert alert-danger" role="alert">
        El Login fallo! Porfavor verifica tus credenciales e intenta de nuevo.
    </div>
<?php } ?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <form action="?controller=user&action=logIn" method="post">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" required id="typeEmailX" name="correo" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" required id="typePasswordX" name="contrasena" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>



                            </form>

                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="?controller=user&action=SignUpForm" class="text-white-50 fw-bold">Sign Up</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>