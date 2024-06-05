<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="./assets/css/core/libs.min.css" />


    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="./assets/css/hope-ui.min.css?v=2.0.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="./assets/css/custom.min.css?v=2.0.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="./assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="./assets/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="./assets/css/rtl.min.css" />
    <link rel="shortcut icon" href="./assets/images/favicon.ico">
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="./assets/css/core/libs.min.css">
    <!-- Sweetlaert2 css -->
    <link rel="stylesheet" href="./assets/vendor/sweetalert2/dist/sweetalert2.min.css">
    <!-- SwiperSlider css -->
    <link rel="stylesheet" href="./assets/vendor/swiperSlider/swiper-bundle.min.css">
    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="./assets/css/hope-ui.min.css?v=4.0.0">
    <link rel="stylesheet" href="./assets/css/pro.min.css?v=4.0.0">
    <!-- Custom Css -->
    <link rel="stylesheet" href="./assets/css/custom.min.css?v=4.0.0">
    <!-- RTL Css -->
    <link rel="stylesheet" href="./assets/css/rtl.min.css?v=4.0.0">
    <!-- Customizer Css -->
    <link rel="stylesheet" href="./assets/css/customizer.min.css?v=4.0.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/e-commerce.min.css" />
</head>
</head>

</head>

<?php
require_once "./App/controller/courses.php";
require_once "./App/model/courses.php";
$courseController = new CourseController();

$courses = $courseController->getAllCourseSport();
// include 'course-pagination-available.php';

?>

<body class="boxed bg-dark">
    <!-- <div class="boxed-inner"> -->
    <div class="">

        <main class="main-content" id="home">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                <div class="container-fluid  navbar-inner">

                    <a href="home" class="navbar-brand">
                        <div class="logo-main">
                            <div class="logo-normal">
                                <img src="./assets/image/icons/new-logo-cdp.png" alt="" width="60px" height="25%">

                            </div>
                            <div class="logo-mini">
                                <img src="./assets/image/icons/new-logo-cdp.png" alt="" width="60px" height="25%">

                            </div>
                        </div>
                        <h4 class="logo-title">
                            <img src="./assets/image/icons/logo-cdp-letras.png" alt="" width="100px" height="25%">
                            <img src="./assets/image/icons/100-años-cdp.png" alt="" width="100px" height="25%">

                        </h4>
                    </a>

                    <!-- Sidebar Menu End --> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="navbar-toggler-bar bar1 mt-2"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item ">
                                <a href="https://teampichincha.com" target="_blank" class="btn btn-white rounded-pill">
                                    Página Oficial
                                </a>
                                <a href="#courseAvailble" class="btn btn-white rounded-pill">
                                    Cursos Disponibles
                                </a>
                                <a href="#socialMedia" class="btn btn-white rounded-pill">
                                    Redes Sociales
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="./App/" class="btn btn-primary rounded-pill">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M2 6.447C2 3.996 4.03024 2 6.52453 2H11.4856C13.9748 2 16 3.99 16 6.437V17.553C16 20.005 13.9698 22 11.4744 22H6.51537C4.02515 22 2 20.01 2 17.563V16.623V6.447Z" fill="currentColor"></path>
                                        <path d="M21.7787 11.4548L18.9329 8.5458C18.6388 8.2458 18.1655 8.2458 17.8723 8.5478C17.5802 8.8498 17.5811 9.3368 17.8743 9.6368L19.4335 11.2298H17.9386H9.54826C9.13434 11.2298 8.79834 11.5748 8.79834 11.9998C8.79834 12.4258 9.13434 12.7698 9.54826 12.7698H19.4335L17.8743 14.3628C17.5811 14.6628 17.5802 15.1498 17.8723 15.4518C18.0194 15.6028 18.2113 15.6788 18.4041 15.6788C18.595 15.6788 18.7868 15.6028 18.9329 15.4538L21.7787 12.5458C21.9199 12.4008 21.9998 12.2048 21.9998 11.9998C21.9998 11.7958 21.9199 11.5998 21.7787 11.4548Z" fill="currentColor"></path>
                                    </svg>
                                    Iniciar Sesión
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </nav> <!--Nav End-->

            <div class="p-2" >

                <div class="conatiner-fluid content-inner  py-1">
                    <!-- <div class="conatiner-fluid content-inner pb-0"> -->
                    <br>
                    <div class="row">
                        <div class="col-xl-12  p-3" style="border-radius: 15px; ">
                            <div class="d-flex align-items-center" style="border-radius: 15px; ">
                                <img src="./assets/image/icons/banner-cdp.jpg" alt="User-Profile" width="100%" class="theme-color-default-img img-fluid" style="border-radius: 15px;">
                            </div>
                        </div>
                        <!-- <div class="col-xl-4 p-2" style="border-radius: 15px; ">
                        <div class="d-flex align-items-center" style="border-radius: 15px; ">
                            <img src="./assets/image/icons/logo-profile-cdp.jpg" alt="User-Profile" width="100%" class="theme-color-default-img img-fluid" style="border-radius: 15px;">
                        </div>
                    </div> -->
                        <div class="text-center" id="courseAvailble">
                            <div class="form-group mt-5">
                                <h2 class="card-title text-white">Cursos Vacacionales Disponibles</h2>
                            </div>
                        </div>
                        <!-- <div class="overflow-hidden slider-circle-btn" id="ecommerce-slider">
                            <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                                <li class="swiper-slide card-slide">
                                    <div>
                                        <div class="card iq-product-custom-card animate:hover-media mb-0">
                                            <div class="iq-product-hover-img position-relative animate:hover-media-wrap">
                                                <a href="../e-commerce/product-detail.html">
                                                    <img src="./assets/image/icons/100-años-cdp.png" alt="product-details" class="img-fluid iq-product-img hover-media" loading="lazy">
                                                </a>
                                                <div class="iq-product-card-hover-effect-1 iq-product-info">
                                                    <a href="#" class="btn btn-icon iq-product-btn rounded-pill wishlist-btn">
                                                        <span class="btn-inner">
                                                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4" d="M11.7761 21.8374C9.49311 20.4273 7.37081 18.7645 5.44807 16.8796C4.09069 15.5338 3.05404 13.8905 2.41735 12.0753C1.27971 8.53523 2.60399 4.48948 6.30129 3.2884C8.2528 2.67553 10.3752 3.05175 12.0072 4.29983C13.6398 3.05315 15.7616 2.67705 17.7132 3.2884C21.4105 4.48948 22.7436 8.53523 21.606 12.0753C20.9745 13.8888 19.944 15.5319 18.5931 16.8796C16.6686 18.7625 14.5465 20.4251 12.265 21.8374L12.0161 22L11.7761 21.8374Z" fill="currentColor"></path>
                                                                <path d="M12.0109 22.0001L11.776 21.8375C9.49013 20.4275 7.36487 18.7648 5.43902 16.8797C4.0752 15.5357 3.03238 13.8923 2.39052 12.0754C1.26177 8.53532 2.58605 4.48957 6.28335 3.28849C8.23486 2.67562 10.3853 3.05213 12.0109 4.31067V22.0001Z" fill="currentColor"></path>
                                                                <path d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="iq-product-card-hover-effect-2 iq-product-info">
                                                    <a href="#" class="btn btn-icon iq-product-btn rounded-pill cart-btn">
                                                        <span class="btn-inner">
                                                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z" fill="currentColor"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <a href="../e-commerce/product-detail.html" class="h6 iq-product-detail mb-0">Casual Shoes</a>
                                                    <div class="d-flex align-items-center">
                                                        <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329" />
                                                        </svg>
                                                        <h6 class="mb-0">3.5</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="mb-0">$56.00</h5>
                                                    <span>3.5k Ratings</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->

                        <?php
                        $modal_counter = 1;
                        foreach ($courses as $row) {
                            $imageSport =  $row["Simage"];
                            $imageCourse =  $row["CIimage"];
                        ?>
                            <div class="overflow-hidden slider-circle-btn col-xl-4  p-2" style="border-radius: 15px; ">
                                <div class="d-flex align-items-center" style="border-radius: 15px; ">
                                    <img style="border-radius: 15px; box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);" src="<?php echo './assets/image/system/course/' . $imageCourse ?>" alt="User-Profile" width="100%" class="theme-color-default-img img-fluid">
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="col-xl-12 p-3" id="socialMedia" style="border-radius: 15px; ">
                            <aside class="text-center " id="masinformacion">
                                <div class="form-group mt-5">
                                    <h2 class="card-title text-white">Visita nuestras Redes Sociales</h2>
                                </div>
                                <div class=" px-5">

                                    <div class="row">
                                        <div class="col-2">
                                            <a href="https://www.facebook.com/ConcentracionDeportiva/" target="_blank"><img src="./assets/image/icons/facebook.png" width="100%" class="rounded-5 shadowmb-5 bg-body-tertiary" alt="..." />
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="https://www.instagram.com/teampichincha/" target="_blank"><img src="./assets/image/icons/instagram.png" width="100%" class="rounded-5 shadowmb-5 bg-body-tertiary" alt="..." />
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="https://twitter.com/TeamPichincha" target="_blank"><img src="./assets/image/icons/twiter.png" width="100%" class="rounded-5 shadowmb-5 bg-body-tertiary" alt="..." />
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="https://www.tiktok.com/@team.pichincha" target="_blank"><img src="./assets/image/icons/tiktok.png" width="100%" class="rounded-5 shadowmb-5 bg-body-tertiary" alt="..." />
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="https://www.youtube.com/TeamPichincha" target="_blank"><img src="./assets/image/icons/youtube.png" width="100%" class="rounded-5 shadowmb-5 bg-body-tertiary" alt="..." />
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a href="https://api.whatsapp.com/send?phone=593993024613" target="_blank"><img src="./assets/image/icons/whatsapp.png" width="100%" class="rounded-5 shadowmb-5 bg-body-tertiary" alt="..." />
                                            </a>
                                        </div>

                                    </div>


                                </div>
                            </aside>

                        </div>
                        <div class="col-xl-12  p-2" style="border-radius: 15px; ">
                            <div class="d-flex align-items-center" style="border-radius: 15px; ">

                                <img src="https://www.comunidad.madrid/sites/default/files/styles/aspect_ratio_16_9_desktop/public/img/publicaciones/deportistas_alto_nivel_y_alto_rendimiento.jpg?itok=iaN5pyAf&timestamp=1589187802" alt="User-Profile" width="100%" class="theme-color-default-img img-fluid" style="border-radius: 15px;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="conatiner-fluid content-inner pb-0">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between flex-wrap">
                                        <div class="header-title">
                                            <h4 class="card-title">Earnings</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                This Week
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                                            <div class="d-grid gap col-md-4 col-lg-4">
                                                <div class="d-flex align-items-start">
                                                    <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                                                        <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                                                    </svg>
                                                    <div class="ms-3">
                                                        <span class="text-gray">Fashion</span>
                                                        <h6>251K</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start">
                                                    <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                                                        <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                                                    </svg>
                                                    <div class="ms-3">
                                                        <span class="text-gray">Accessories</span>
                                                        <h6>176K</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between flex-wrap">
                                        <div class="header-title">
                                            <h4 class="card-title">Conversions</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                                This Week
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="d-activity" class="d-activity"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="card overflow-hidden">
                                    <div class="card-header d-flex justify-content-between flex-wrap">
                                        <div class="header-title">
                                            <h4 class="card-title mb-2">Enterprise Clients</h4>
                                            <p class="mb-0">
                                                <svg class="me-2 icon-24" width="24" viewBox="0 0 24 24">
                                                    <path fill="#3a57e8" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                                </svg>
                                                15 new acquired this month
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive mt-4">
                                            <table id="basic-table" class="table table-striped mb-0" role="grid">
                                                <thead>
                                                    <tr>
                                                        <th>COMPANIES</th>
                                                        <th>CONTACTS</th>
                                                        <th>ORDER</th>
                                                        <th>COMPLETION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="./assets/images/shapes/01.png" alt="profile">
                                                                <h6>Addidis Sportwear</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="iq-media-group iq-media-group-1">
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                                </a>
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                                </a>
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>$14,000</td>
                                                        <td>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <h6>60%</h6>
                                                            </div>
                                                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 4px">
                                                                <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="./assets/images/shapes/05.png" alt="profile">
                                                                <h6>Netflixer Platforms</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="iq-media-group iq-media-group-1">
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                                </a>
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>$30,000</td>
                                                        <td>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <h6>25%</h6>
                                                            </div>
                                                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 4px">
                                                                <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="./assets/images/shapes/02.png" alt="profile">
                                                                <h6>Shopifi Stores</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="iq-media-group iq-media-group-1">
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                                </a>
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>$8,500</td>
                                                        <td>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <h6>100%</h6>
                                                            </div>
                                                            <div class="progress bg-soft-success shadow-none w-100" style="height: 4px">
                                                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="./assets/images/shapes/03.png" alt="profile">
                                                                <h6>Bootstrap Technologies</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="iq-media-group iq-media-group-1">
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                                </a>
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                                </a>
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                                </a>
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>$20,500</td>
                                                        <td>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <h6>100%</h6>
                                                            </div>
                                                            <div class="progress bg-soft-success shadow-none w-100" style="height: 4px">
                                                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img class="bg-soft-primary rounded img-fluid avatar-40 me-3" src="./assets/images/shapes/04.png" alt="profile">
                                                                <h6>Community First</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="iq-media-group iq-media-group-1">
                                                                <a href="#" class="iq-media-1">
                                                                    <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>$9,800</td>
                                                        <td>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <h6>75%</h6>
                                                            </div>
                                                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 4px">
                                                                <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="card credit-card-widget">

                                    <div class="card-body">
                                        <div class="d-flex align-itmes-center flex-wrap  mb-4">
                                            <div class="d-flex align-itmes-center me-0 me-md-4">
                                                <div>
                                                    <div class="p-3 mb-2 rounded bg-soft-primary">
                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z" fill="currentColor"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="ms-3">
                                                    <h5>1153</h5>
                                                    <small class="mb-0">Products</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-itmes-center">
                                                <div>
                                                    <div class="p-3 mb-2 rounded bg-soft-info">
                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="ms-3">
                                                    <h5>81K</h5>
                                                    <small class="mb-0">Order Served</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-flex justify-content-between flex-wrap">
                                                <h2 class="mb-2">$405,012,300</h2>
                                                <div>
                                                    <span class="badge bg-success rounded-pill">YoY 24%</span>
                                                </div>
                                            </div>
                                            <p class="text-info">Life time sales</p>
                                        </div>
                                        <div class="d-grid grid-cols-2 gap">
                                            <button class="btn btn-primary text-uppercase">SUMMARY</button>
                                            <button class="btn btn-info text-uppercase">ANALYTICS</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body d-flex justify-content-around text-center">
                                        <div>
                                            <h2 class="mb-2">750<small>K</small></h2>
                                            <p class="mb-0 text-gray">Website Visitors</p>
                                        </div>
                                        <hr class="hr-vertial">
                                        <div>
                                            <h2 class="mb-2">7,500</h2>
                                            <p class="mb-0 text-gray">New Customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between flex-wrap">
                                        <div class="header-title">
                                            <h4 class="card-title mb-2">Activity overview</h4>
                                            <p class="mb-0">
                                                <svg class="me-2 icon-24" width="24" viewBox="0 0 24 24">
                                                    <path fill="#17904b" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                                                </svg>
                                                16% this month
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class=" d-flex profile-media align-items-top mb-2">
                                            <div class="profile-dots-pills border-primary mt-1"></div>
                                            <div class="ms-4">
                                                <h6 class=" mb-1">$2400, Purchase</h6>
                                                <span class="mb-0">11 JUL 8:10 PM</span>
                                            </div>
                                        </div>
                                        <div class=" d-flex profile-media align-items-top mb-2">
                                            <div class="profile-dots-pills border-primary mt-1"></div>
                                            <div class="ms-4">
                                                <h6 class=" mb-1">New order #8744152</h6>
                                                <span class="mb-0">11 JUL 11 PM</span>
                                            </div>
                                        </div>
                                        <div class=" d-flex profile-media align-items-top mb-2">
                                            <div class="profile-dots-pills border-primary mt-1"></div>
                                            <div class="ms-4">
                                                <h6 class=" mb-1">Affiliate Payout</h6>
                                                <span class="mb-0">11 JUL 7:64 PM</span>
                                            </div>
                                        </div>
                                        <div class=" d-flex profile-media align-items-top mb-2">
                                            <div class="profile-dots-pills border-primary mt-1"></div>
                                            <div class="ms-4">
                                                <h6 class=" mb-1">New user added</h6>
                                                <span class="mb-0">11 JUL 1:21 AM</span>
                                            </div>
                                        </div>
                                        <div class=" d-flex profile-media align-items-top mb-1">
                                            <div class="profile-dots-pills border-primary mt-1"></div>
                                            <div class="ms-4">
                                                <h6 class=" mb-1">Product added</h6>
                                                <span class="mb-0">11 JUL 4:50 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Footer Section Start -->
            <footer class="footer">
                <div class="footer-body">
                    <ul class="left-panel list-inline mb-0 p-0">
                        <li class="list-inline-item"><a href="#">Politicas de privacidad</a></li>
                        <li class="list-inline-item"><a href="">Terminos de uso</a></li>
                    </ul>
                    <div class="right-panel">
                        <span class="">Desarrollado </span> por <a href="https://tsoftec.com/">TSoftware Ecuador</a>.

                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
        </main>
        <!-- Wrapper End-->
    </div>
    <div class="btn-download">
        <a class="btn btn-success px-3 py-2 rounded-pill" href="#home" >
            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.4" d="M2 12C2 6.485 6.486 2 12 2C17.514 2 22 6.485 22 12C22 17.514 17.514 22 12 22C6.486 22 2 17.514 2 12Z" fill="currentColor"></path>
                <path d="M7.77942 13.4425C7.77942 13.2515 7.85242 13.0595 7.99842 12.9135L11.4684 9.42652C11.6094 9.28552 11.8004 9.20652 12.0004 9.20652C12.1994 9.20652 12.3904 9.28552 12.5314 9.42652L16.0034 12.9135C16.2954 13.2065 16.2954 13.6805 16.0014 13.9735C15.7074 14.2655 15.2324 14.2645 14.9404 13.9715L12.0004 11.0185L9.06042 13.9715C8.76842 14.2645 8.29442 14.2655 8.00042 13.9735C7.85242 13.8275 7.77942 13.6345 7.77942 13.4425Z" fill="currentColor"></path>
            </svg>
        </a>
    </div>
    <!-- Library Bundle Script -->
    <script src="./assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="./assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="./assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="./assets/js/charts/vectore-chart.js"></script>
    <script src="./assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="./assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="./assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="./assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="./assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="./assets/js/hope-ui.js" defer></script>





    <!-- SwiperSlider Script -->
    <script src="./assets/vendor/swiperSlider/swiper-bundle.min.js" type="41360a7ac64efeda9f5c28d3-text/javascript"></script>
    <!-- Lodash Utility -->
    <script src="./assets/vendor/lodash/lodash.min.js" type="41360a7ac64efeda9f5c28d3-text/javascript"></script>
    <!-- Utilities Functions -->
    <script src="./assets/js/iqonic-script/utility.min.js" type="41360a7ac64efeda9f5c28d3-text/javascript"></script>
    <!-- Settings Script -->
    <script src="./assets/js/iqonic-script/setting.min.js" type="41360a7ac64efeda9f5c28d3-text/javascript"></script>
    <!-- Settings Init Script -->
    <script src="./assets/js/setting-init.js" type="41360a7ac64efeda9f5c28d3-text/javascript"></script>
    <!-- External Library Bundle Script -->
    <script src="./assets/js/core/external.min.js" type="41360a7ac64efeda9f5c28d3-text/javascript"></script>
    <!-- Widgetchart Script -->
    <script src="./assets/js/charts/widgetcharts.js?v=4.0.0"></script>
    <!-- Dashboard Script -->
    <script src="./assets/js/charts/dashboard.js?v=4.0.0"></script>
    <script src="./assets/js/charts/alternate-dashboard.js?v=4.0.0"></script>
    <!-- Hopeui Script -->
    <script src="./assets/js/hope-ui.js?v=4.0.0"></script>
    <script src="./assets/js/hope-uipro.js?v=4.0.0"></script>
    <script src="./assets/js/sidebar.js?v=4.0.0"></script>
    <script src="./assets/js/ecommerce.js"></script>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"></script>
</body>
</body>

</html>