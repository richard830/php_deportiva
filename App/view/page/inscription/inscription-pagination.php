<?php

$invoiceController = new InvoiceController();



$itemPage = 10;
$page = isset($_GET['pagination']) ? $_GET['pagination'] : 1;
$start = ($page - 1) * $itemPage;


if (isset($_GET['search'])) {
    $name = $_GET['search'];
    $mycourses = $invoiceController->searchMyCourse($name);
    $total = count($mycourses);
    $totalPage = ceil($total / $itemPage);
    $mycourses = array_slice($mycourses,  $start, $itemPage);
    
    
    $mycoursesPresent = $invoiceController->searchMyCoursePerson($name);
    $total = count($mycoursesPresent);
    $totalPage = ceil($total / $itemPage);
    $mycoursesPresent = array_slice($mycoursesPresent,  $start, $itemPage);
} else {
    $mycourses = $invoiceController->getAllInvoiceOnline();
    $mycoursesPresent = $invoiceController->getAllInvoicePresent();

    $total   = $invoiceController->countAllMyCourse();
    $totalPage = ceil($total / $itemPage);
    $mycourses = array_slice($mycourses,  $start, $itemPage);
    $mycoursesPresent = array_slice($mycoursesPresent,  $start, $itemPage);
}







