<?php
class PosController
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



    public function createInvoice()
    {
        if (isset($_POST["submit-invoice-data-create"])) {

            $id = $_POST['id'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $ruc = $_POST['ruc'];
            $phone = $_POST['phone'];
            $canton = $_POST['canton'];

            $invoice = $this->model->createInvoice($id, $name, $lastname, $email, $ruc, $phone, $canton);
            if ($invoice) {
                echo '<script src="./alert/registerSuccess.js"></script>';
            } else {
                echo '<script src="./alert/registerError.js"></script>';
            }
            echo '<script> setTimeout(function(){ window.location = "invoice-data"; }, 1000); </script>';
            return $invoice;
        }
    }

    public function updateInvoice()
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

            $updateInvoice = $this->model->updateInvoice($id, $name, $lastname, $email, $ruc, $phone, $canton);
            if ($updateInvoice) {
                echo '<script src="./alert/updateSuccess.js"></script>';
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormCRol(); });</script>';
            } else {
                echo '<script src="./alert/updateError.js"></script>';
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormCRol(); });</script>';
            }
            echo '<script> setTimeout(function(){ window.location = "invoice-data"; }, 1000); </script>';
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
                echo '<script> setTimeout(function(){ window.location = "invoice-data"; }, 1500); </script>';
                return $deletedInvoice;
            }
        }
    }
}
