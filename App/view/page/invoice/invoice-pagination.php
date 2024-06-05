<?php
$itemPage = 10;
$page = isset($_GET['pagination']) ? $_GET['pagination'] : 1;
$start = ($page - 1) * $itemPage;
if (isset($_GET['search'])) {
    $name = $_GET['search'];
    $mycourses = $invoiceController->searchMyCourse($name);
    $total = count($mycourses);
    $totalPage = ceil($total / $itemPage);
    $mycourses = array_slice($mycourses, $start, $itemPage);
} else {
    $mycourses = $invoiceController->getAllMyCourse();
    $total   = $invoiceController->countAllMyCourse();
    $totalPage = ceil($total / $itemPage);
    $mycourses = array_slice($mycourses, $start, $itemPage);
}

// $itemPage = 10;
// $page = isset($_GET['pagination']) ? $_GET['pagination'] : 1;
// $start = ($page - 1) * $itemPage;
// if (isset($_GET['search'])) {
//     $name = $_GET['search'];
//     $users = $userController->searchUser($name);
//     $total = count($users);
//     $totalPage = ceil($total / $itemPage);
//     $users = array_slice($users, $start, $itemPage);
// } else {
//     $users = $userController->getAllUsers();
//     $total = $userController->countUser();
//     $totalPage = ceil($total / $itemPage);
//     $users = array_slice($users, $start, $itemPage);
// }   

