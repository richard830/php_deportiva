<?php
$authenticateController = new AuthenticateController;

$authenticateController->signin();
?>

<?php include 'auth-validation.php'; ?>

<section class="login-content">
   <div class="row m-0 align-items-center bg-white vh-100">
      <div class="col-md-6">
         <div class="justify-items-center mb-0 auth-card" style=" max-width: 400px; margin: 50px; margin: 0 auto;border-radius: 15px;">
            <div class="card-body">
                  <a href="login" class="navbar-brand d-flex align-items-center"></a>
                  <center>
                     <img src="./../assets/image/icons/logo-cdp.png" class="text-center mb-5 " alt="" width="50%" height="25%">
                  </center>
                  <h2 class="mb-2 text-center">INICIAR SESSIÓN</h2>
                  <p class="text-center">Inicie sesión para mantenerse conectado</p>
                  <form method="post" id="loginFormLogin" enctype="multipart/form-data">
                     <div class="form-floating  mt-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required oninput="validateForm()">
                        <label for="email" class="form-label">Correo Electrónico</label>
                     </div>

                     <div class="input-group  mt-3 ">
                        <div class="form-floating ">
                           <input type="password" class="form-control" id="password" name="password" aria-cribedby="password" placeholder="Cdp*100" required oninput="validateForm()">
                           <label for="password" class="form-label">Contraseña</label>
                        </div>
                     </div>

                     <div class="col-lg-12 mt-3 ">
                        <div class="d-flex justify-content-center">
                           <button type="submit" class="btn btn-primary" name="submit-auth-signin" id="submit-auth-signin" disabled>Iniciar Sesión</button>
                        </div>
                     </div>
                     <p class="mt-3 text-center">
                        ¡Crear una cuenta! <a href="auth-signup" class="text-underline">Clic aquí.</a>
                     </p>
                  </form>
               </div>
         </div>
      </div>
      <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
         <img src="./../assets/image/auth/vacacionales.jpeg" class="img-fluid " alt="images">
      </div>
   </div>
</section>