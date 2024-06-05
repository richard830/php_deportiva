<?php

class InvoiceController
{
    private $model;
    public function __construct()
    {
        $this->model = new InvoiceModel(ConnectionDB::getInstance());
    }

    public function ViewInvoice()
    {
        $response = $this->model->getAllInvoice();
        return $response;
    }

    public function getCountAllInvoice()
    {
        $response = $this->model->getCountAllInvoice();
        return $response;
    }

    public function getInvoiceDataId($Uid)
    {
        $response = $this->model->getInvoiceDataId($Uid);

        if (empty($response)) {
            echo '<script>window.location.href = "invoice-add";</script>';
        } else {
            return $response;
        }
    }

    public function getInvoiceDataIdPOS($Uid)
    {
        $response = $this->model->getInvoiceDataId($Uid);

        if (empty($response)) {
            echo '<script>window.location.href = "invoice-add-pos";</script>';
        } else {
            return $response;
        }
    }



    public function createInvoiceOnline()
    {
        if (isset($_POST["submit-invoice-add"])) {

            $Uid = $_POST['Uid'];
            $Cid = $_POST['Cid'];
            $QHid = $_POST['QHSid'];
            $banco = $_POST['banco_pay'];
            $number = $_POST['number_pay'];
            $date = $_POST['date_pay'];
            $defaultImage = "default.png";
            if (!empty($_FILES['imagen']['name'])) {
                $nameTypeImage = $_FILES['imagen']['name'];
                $routeImage = $_FILES['imagen']['tmp_name'];
                $directory = "./../assets/image/system/voucher/";
                $routeDestination = $directory . $nameTypeImage;
                if (!file_exists($directory)) {
                    mkdir($directory, 0777, true);
                }
                if (move_uploaded_file($routeImage, $routeDestination)) {
                    $nameRoute = $routeDestination;
                    echo $nameRoute;
                } else {
                    echo '<script src="./alert/registerError.js"></script>';
                }
            } else {
                $nameTypeImage = $defaultImage;
            }
            $invoice = $this->model->createInvoiceOnline($Uid, $Cid, $QHid, $banco, $number, $date, $nameTypeImage);
            if ($invoice) {
                $stockCourse = $this->model->updateStockCourse($QHid);
                echo '<script src="./alert/registerSuccess.js"></script>';
            } else {
                echo '<script src="./alert/registerError.js"></script>';
            }
            echo '<script> setTimeout(function(){ window.location = "invoice-my-course"; }, 1000); </script>';
            return $invoice;
        }
    }

    public function updateInvoiceOnline()
    {
        if (isset($_POST["submit-invoice-data-update"])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $ruc = $_POST['ruc'];
            $phone = $_POST['phone'];
            $canton = $_POST['canton'];
            echo "<script>function keepFormCRol(){document.getElementById('name').value = '" . htmlspecialchars($_POST['name'], ENT_QUOTES) . "';}</script>";

            $updateInvoice = $this->model->updateInvoiceOnline($id, $name, $lastname, $email, $ruc, $phone, $canton);
            if ($updateInvoice) {
                echo '<script src="./alert/updateSuccess.js"></script>';
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormCRol(); });</script>';
            } else {
                echo '<script src="./alert/updateError.js"></script>';
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormCRol(); });</script>';
            }
            echo '<script> setTimeout(function(){ window.location = "invoice-my-course"; }, 1000); </script>';
        }
    }



    public function createInvoiceDataOnline()
    {
        if (isset($_POST["submit-invoice-data-add"])) {

            $Uid = $_POST['id'];
            $IDname = $_POST['name'];
            $IDlastname = $_POST['lastname'];
            $IDruc = $_POST['ruc'];
            $IDemail = $_POST['email'];
            $IDphone = $_POST['phone'];
            $IDcanton = $_POST['canton'];
            
            $invoice = $this->model->createInvoiceOnline($Uid, $IDname, $IDlastname, $IDruc, $IDemail, $IDphone, $IDcanton);
            if ($invoice) {
                echo '<script src="./alert/registerSuccess.js"></script>';
            } else {
                echo '<script src="./alert/registerError.js"></script>';
            }
            echo '<script> setTimeout(function(){ window.location = "invoice-my-course"; }, 1000); </script>';
            return $invoice;
        }
    }

    public function updateInvoiceDataOnline()
    {
        if (isset($_POST["submit-invoice-data-update"])) {
            $IDid = $_POST['IDid'];
            $Uid = $_POST['id'];
            $IDname = $_POST['name'];
            $IDlastname = $_POST['lastname'];
            $IDruc = $_POST['ruc'];
            $IDemail = $_POST['email'];
            $IDphone = $_POST['phone'];
            $IDcanton = $_POST['canton'];
            echo "<script>function keepFormCRol(){document.getElementById('name').value = '" . htmlspecialchars($_POST['name'], ENT_QUOTES) . "';}</script>";

            $updateInvoice = $this->model->updateInvoiceOnline($Uid, $IDname, $IDlastname, $IDruc, $IDemail, $IDphone, $IDcanton);
            if ($updateInvoice) {
                echo '<script src="./alert/updateSuccess.js"></script>';
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormCRol(); });</script>';
            } else {
                echo '<script src="./alert/updateError.js"></script>';
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormCRol(); });</script>';
            }
            echo '<script> setTimeout(function(){ window.location = "invoice-my-course"; }, 1000); </script>';
        }
    }


    
    public function createInvoicePOS()
    {
        if (isset($_POST["submit-course-pay"])) {

            $Uid = $_POST['Uid'];
            $Cid = $_POST['Cid'];
            $QHid = $_POST['QHSid'];
            $banco = $_POST['banco_pay'];
            $number = $_POST['number_pay'];
            $date = $_POST['date_pay'];
            $defaultImage = "default.png";
            if (!empty($_FILES['imagen']['name'])) {
                $nameTypeImage = $_FILES['imagen']['name'];
                $routeImage = $_FILES['imagen']['tmp_name'];
                $directory = "./../assets/image/system/voucher/";
                $routeDestination = $directory . $nameTypeImage;
                if (!file_exists($directory)) {
                    mkdir($directory, 0777, true);
                }
                if (move_uploaded_file($routeImage, $routeDestination)) {
                    $nameRoute = $routeDestination;
                    echo $nameRoute;
                } else {
                    echo '<script src="./alert/registerError.js"></script>';
                }
            } else {
                $nameTypeImage = $defaultImage;
            }
            $invoice = $this->model->createInvoicePOS($Uid, $Cid, $QHid, $banco, $number, $date, $nameTypeImage);
            if ($invoice) {
                $this->model->updateStockCourse($QHid);
                echo '<script src="./alert/registerSuccess.js"></script>';
            } else {
                echo '<script src="./alert/registerError.js"></script>';
            }
            echo '<script> setTimeout(function(){ window.location = "invoice-my-course"; }, 1000); </script>';
            return $invoice;
        }
    }

    public function updateInvoicePOS()
    {
        if (isset($_POST["submit-invoice-data-update"])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $ruc = $_POST['ruc'];
            $phone = $_POST['phone'];
            $canton = $_POST['canton'];
            echo "<script>function keepFormCRol(){document.getElementById('name').value = '" . htmlspecialchars($_POST['name'], ENT_QUOTES) . "';}</script>";

            $updateInvoice = $this->model->updateInvoicePOS($id, $name, $lastname, $email, $ruc, $phone, $canton);
            if ($updateInvoice) {
                echo '<script src="./alert/updateSuccess.js"></script>';
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormCRol(); });</script>';
            } else {
                echo '<script src="./alert/updateError.js"></script>';
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormCRol(); });</script>';
            }
            echo '<script> setTimeout(function(){ window.location = "invoice-my-course"; }, 1000); </script>';
        }
    }


    public function deleteInvoice()
    {
        if (isset($_POST["submit-invoice-data-delete"])) {
            $id = $_POST['Rid'];
            $getByIdInvoice = $this->model->getByIdInvoice($id);
            if ($getByIdInvoice > 0) {
                echo '<script src="./alert/deleteErrorRelation.js"></script>';
            } else {
                $deletedInvoice = $this->model->deleteInvoice($id);
                if ($deletedInvoice) {
                    echo '<script src="./alert/deleteSuccess.js"></script>';
                } else {
                    echo '<script src="./alert/deleteError.js"></script>';
                }
                echo '<script> setTimeout(function(){ window.location = "invoice-my-course"; }, 1500); </script>';
                return $deletedInvoice;
            }
        }
    }




    /* PAGINACION  */


    public function getMyCourseOnlineById($invoiceId)
    {
        $response = $this->model->getMyCourseOnlineById($invoiceId);
        return $response;
    }
  

    public function getAllMyCourse()
    {
        $response = $this->model->getAllMyCourse();
        return $response;
    }
  
    public function getAllInvoiceOnline()
    {
        $response = $this->model->getAllInvoiceOnline();
        return $response;
    }

    public function getAllInvoicePresent()
    {
        $response = $this->model->getAllInvoicePresent();
        return $response;
    }
  

    public function getMyCourseById($courseId)
    {
        // return $this->model->getMyCourseById($courseId);
       
    }
 

    public function getMyCoursePagination($inicio, $itemsPorPagina)
    {
        return $this->model->getMyCoursePagination($inicio, $itemsPorPagina);
    }

    

    public function searchMyCourse($name)
    {
        $searchCourse = $this->model->searchMyCourse($name);
        return $searchCourse;
    }

    public function searchMyCoursePerson($name)
    {
        $searchCourse = $this->model->searchMyCoursePerson($name);
        return $searchCourse;
    }
   
    public function countAllMyCourse()
    {
        $response = $this->model->countAllMyCourse();
        if (!empty($response)) {
            foreach ($response as $row) {
                return $row['count(*)'];
            }
        }
    }


}
