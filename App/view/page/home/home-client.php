<?php

$userController = new UserController();
$roleController = new RoleController();

$usersCount = $userController->getCountAllUsers();
$rolesCount = $roleController->getCountAllRoles();

?>

<!-- Nav Header Component Start -->
<div class="iq-navbar-header" style="margin-top: 10%;">
    <!-- <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div> -->
    <div class="iq-header-img">
        <img src="./../assets/image/dashboard/top-header-cdp.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">

    </div>
</div> <!-- Nav Header Component End -->
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="flex-wrap justify-content-between align-items-center">
            <div class="form-group">
                <h2 class="card-title text-white" style="box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);">Dashboard <?php echo $roleName; ?></h2>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">

            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="card" data-aos="fade-up" data-aos-delay="50">
                        <a href="user-list">
                            <div class="card-body">
                                <div class="progress-widget">
                                    <img src="./../assets/image/icons/3D-User.webp" width="75px" alt="">
                                    <div class="progress-detail">
                                        <p class="mb-2">Mis Cursos</p>
                                        <h4 class="counter"><?php echo $usersCount; ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" data-aos="fade-up" data-aos-delay="50">
                                <a href="role-list">
                                    <div class="card-body">
                                        <div class="progress-widget">
                                            <img src="./../assets/image/icons/3D-Role.webp" width="75px" alt="">

                                            <div class="progress-detail">
                                                <p class="mb-2">Roles disponibles</p>

                                                <h4 class="counter"><?php echo $rolesCount; ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card " data-aos="fade-up" data-aos-delay="50">
                                <div class="card-body">
                                    <img src="./../assets/image/system/banner/Modulo 1.jpg" alt="header" class="theme-color-default-img img-fluid w-100 h-100 ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card" data-aos="fade-up" data-aos-delay="50">
                        <div class="card-body">
                            <video width="100%" height="100%" controls autoplay loop>
                                <source src="./../assets/video/vacacionales-2023.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
