<?php
$authenticateController = new AuthenticateController;

$authenticateController->signin();
?>

<?php include 'auth-validation.php'; ?>

<section class="login-content">
    <div class="row m-0 align-items-center bg-white vh-100">

        <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
            <img src="./../assets/image/auth/vacacionales.jpeg" class="img-fluid " alt="images">
        </div>
        <div class="col-md-6">
            <div class=" justify-items-center mb-0 auth-card" style=" max-width: 500px; margin: 10px; margin: 0 auto;border-radius: 15px; ">
                <div class="card-body">
                    <a href="login" class="navbar-brand d-flex align-items-center"></a>
                    <center>
                        <img src="./../assets/image/icons/logo-cdp.png" class="text-center mb-2 " alt="" width="50%" height="25%">
                    </center>
                    <h2 class="mb-1 text-center">REGISTRARME</h2>
                    <p class="text-center">Ingresa los datos del deportista que tomará el curso</p>
                    <form method="post" id="loginFormLogin" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name"  name="name"placeholder=" ">
                                        <label for="name">Nombres</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder=" ">
                                        <label for="lastname">Apellidos</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="credential" name="credential" placeholder=" ">
                                        <label for="credential">Cédula</label>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="birthday" name="birthday" placeholder=" ">
                                        <label for="birthday">Fecha de nacimiento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="email" name="email" placeholder=" ">
                                        <label for="email">Correo Electrónico</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password"  name="password" placeholder=" ">
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 mt-3 ">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" name="submit-auth-signup" id="submit-auth-signup" disabled>Registrarme</button>
                            </div>
                        </div>
                        <p class="mt-3 text-center">
                            ¡Ya tengo una Cuenta! <a href="auth-signin" class="text-underline">Clic aquí.</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>