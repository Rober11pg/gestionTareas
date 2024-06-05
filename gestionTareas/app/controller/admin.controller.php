<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('app/model/admin.php');

class AdminController
{
    private $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    public function Home()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'admin') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }

        require_once('app/view/templates/header.php');
        require_once('app/view/home/admin/index.php');
        require_once('app/view/templates/footer.php');
    }

    public function FormAgregar()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'admin') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }
        require_once('app/view/templates/header.php');
        require_once('app/view/home/admin/formAgregar.php');
        require_once('app/view/templates/footer.php');
    }

    public function FormEditar()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'admin') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }

        $objTareaId = $this->model->getTareaById($_GET['tareaId']);

        require_once('app/view/templates/header.php');
        echo "FormEditar is called";
        require_once('app/view/home/admin/formEditar.php');
        echo "FormEditar is called";
        require_once('app/view/templates/footer.php');
    }


    //Actions
    public function insertNuevaTarea()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'admin') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }
        $descripcion = $_POST['descripcion'];
        $tipoTarea = $_POST['tipoTarea'];
        $this->model->insertNuevaTareaConUsuarios($descripcion, $tipoTarea);
        header('Location: index.php?controller=admin');
    }

    public function deleteTarea()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'admin') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }
        $this->model->deleteTarea($_GET['tareaId']);
        header('Location: index.php?controller=admin');
    }

    public function updateTarea()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'admin') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }
        $objTareaId = new Admin(); // Create a new instance of Admin or fetch the existing one
        $objTareaId->setTareaId($_POST['tareaId']);
        $objTareaId->setDescripcion($_POST['descripcion']);
        $objTareaId->setTipoTarea($_POST['tipoTarea']);

        $this->model->updateTarea($objTareaId);
        header('Location: index.php?controller=admin');
    }
}
