<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include_once('app/model/user.php');

class  UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function Home()
    {

        require_once('app/view/userSessions/index.php');
    }

    public function SignUpForm()
    {
        $objUser = new User();
        $message = '';
        require_once('app/view/userSessions/signUpForm.php');
    }

    //actions

    public function SignUp()
    {
        $objUser = new User();
        if (isset($_POST)) {

            $objUser->setNombre($_POST['nombre']);
            $objUser->setApellido($_POST['apellido']);
            $objUser->setCorreo($_POST['correo']);
            $objUser->setContrasena($_POST['contrasena']);
        }

        if (!empty($objUser->getNombre()) && !empty($objUser->getApellido()) && !empty($objUser->getCorreo()) && !empty($objUser->getContrasena())) {

            if ($this->model->insertUsers($objUser)) {

                header('location:?controller=user&message=success');
            } else {

                $message = "500 - Error interno del servidor";
                require_once('app/view/userSessions/signUpForm.php');
            }
        } else {
            $message = "Por favor, Ingresa correctamente los datos!";
            require_once('app/view/userSessions/signUpForm.php');
            // header("Location:?controller=user&action=SignUpForm&message=error");
        }
    }

    public function logIn()
    {
        if (isset($_POST)) {
            $correo = $_POST['correo'];
            $psw = $_POST['contrasena'];
            $user = $this->model->loginUsers($correo, $psw);
            if ($user) {
                session_start();
                $_SESSION['SESSION_USER'] = $user;
                // Check user role and redirect accordingly
                if ($user->rol == 'admin') {
                    header('Location:?controller=admin'); // Redirect to admin dashboard
                } else if ($user->rol == 'user') {
                    header('Location:?controller=client'); // Redirect to user dashboard
                }
                exit();
            } else {
                // Redirect back to the login page with an error message
                header('Location: index.php?message=loginFailed');
                exit();
            }
        }
    }

    public function logOut()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php'); // Redirect to login page
        exit();
    }
}
