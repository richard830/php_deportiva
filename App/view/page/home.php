<?php



switch ($roleId) {
    case 1:
        include "home/home-seller.php";
        break;
    case 2:
        include "home/home-store.php";
        break;
    case 3:
        include "home/home-supervisor.php";
        break;
    case 4:
        include "home/home-administrator.php";
        break;
    case 5:
        include "home/home-tsoftec.php";
        break;
    case 6:
        include "home/home-client.php";
        break;
}
