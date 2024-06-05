<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('app/model/client.php');

class ClientController
{
    private $model;

    public function __construct()
    {
        $this->model = new Client();
    }
    public function Home()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'user') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }
        require_once('app/view/templates/templatesUser/header.php');
        require_once('app/view/home/client/index.php');
        require_once('app/view/templates/templatesUser/footer.php');
    }

    public function TareasCompletas()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'user') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }
        require_once('app/view/templates/templatesUser/header.php');
        require_once('app/view/home/client/tareasCompletadas.php');
        require_once('app/view/templates/templatesUser/footer.php');
    }

    //Actions

    public function changeStateTarea()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'user') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }

        $this->model->changeStateTarea($_GET['tareaId']);
        header('Location: ?controller=client');
    }

    public function reverseStateTarea()
    {
        session_start();
        if (!isset($_SESSION['SESSION_USER']) || $_SESSION['SESSION_USER']->rol != 'user') {
            // Clear session data from memory
            session_unset();
            // Destroy the session
            session_destroy();
            // Redirect unauthorized users
            header('Location: index.php');
            exit();
        }

        $this->model->reverseStateTarea($_GET['tareaId']);
        header('Location: ?controller=client&action=TareasCompletas');
    }
}
