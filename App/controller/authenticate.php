<?php
// include_once "./model/users.php";
class AuthenticateController
{
    private $model;

    public function __construct()
    {
        $this->model = new AuthenticateModel(ConnectionDB::getInstance());
    }


    public function checkEmail()
    {
        if (isset($_POST['auth-checkEmail'])) {
            $emailInput = $_POST['email'];
            echo "<script>function keepFormEmail(){
                document.getElementById('email').value = '" . htmlspecialchars($_POST['email'], ENT_QUOTES) . "';
            }</script>";
            $emailData = $this->model->checkEmail($emailInput);
            if ($emailData) {
                if ($emailData['Ustatus'] == 0) {

                    echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormEmail(); });</script>';
                    echo '<script src="./alert/emailDesactive.js"></script>';
                    return false;
                } else {
                    echo '<script src="./alert/emailSuccess.js"></script>';
                    return true;
                }
            } else {
                echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormEmail(); });</script>';
                echo '<script src="./alert/emailError.js"></script>';
                return false;
            }
        }
        return false;
    }


    public function signin()
    {
        if (isset($_POST['submit-auth-signin'])) {
           
                $email = $_POST['email'];
                $password = $_POST['password'];
                echo "<script>function keepFormPassword(){
                    document.getElementById('email').value = '" . htmlspecialchars($_POST['email'], ENT_QUOTES) . "';
                    document.getElementById('password').value = '" . htmlspecialchars($_POST['password'], ENT_QUOTES) . "';
                }</script>";
                $login = $this->model->signin($email, $password);
                if ($login) {
                    echo '<script src="./alert/loading.js"></script>';
                    $this->model->loginHistory($email);
                    $this->startSession($login);
                    echo '<script> setTimeout(function(){ window.location = "home"; }, 500); </script>';
                } else {
                    echo '<script src="./alert/accessError.js"></script>';
                    echo '<script> document.addEventListener("DOMContentLoaded", function() {keepFormPassword(); });</script>';
                    return false;
                }
          
        }
        return false;
    }

    private function startSession($login)
    {
        if (!is_array($login)) {
            // Manejar error si $login no es un array
            return false;
        }
    
        $_SESSION["login"] = true;
        foreach ($login as $key => $value) {
            // Filtrar datos sensibles antes de almacenarlos en la sesión
            if ($key !== 'Upassword' && $key !== 'UdateCreated' && $key !== 'UdateUpdated') {
               $_SESSION[$key] = $value;
            }
        }
    }


    function routesPermmisionsRole($permission_roleId)
    {
        $routes = $this->model->routesPermmisionsRole($permission_roleId);
        if (!empty($routes)) {
            return $routes;
        } else {
            return array('message' => 'No se encontraron rutas para el rol de usuario proporcionado.');
        }
    }


    public function userIdRole($userId_role)
    {
        $userRoleData = $this->model->userIdRole($userId_role);
        if (!empty($userRoleData)) {           
            return $userRoleData;
        } else {
            return array('message' => 'No se encontraron rutas para el rol de usuario proporcionado.');
        }
    }

    public function ViewRoles()
    {
        $response = $this->model->getAllRoles();
        return $response;
    }
}
