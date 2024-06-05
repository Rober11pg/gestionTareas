<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//Inclusion de la clase DataBase para conexiones a la db
require_once('app/model/dataBase.php');


//Estableciendo el controlador principal 
if (!isset($_GET['controller'])) {
    require_once('app/controller/user.controller.php');
    //Instanciamos el controlador de la pagina home
    $userController = new UserController();
    call_user_func(array($userController, 'Home')); // llamado al metodo HomePage  del controlador home: el segundo parametro del array es el metodo
} else {
    $urlController = $_GET['controller']; //obteniendo el controller de la url
    require_once('app/controller/' . $urlController . '.controller.php'); //cargando el archivo del controlador correspondiente
    $classController = $urlController;
    $classController = ucwords($classController) . 'Controller'; //ucwords capitaliza la primera letra de un string, esto nos sirve para instanciar la clase del controlador
    $classController = new  $classController(); //instanciando el controlador correspondiente a la url
    //conprobando si se mando un action en el url
    $action = isset($_GET['action']) ? $_GET["action"] : "Home";  //si no hay accion, por defecto es la accion HomePage del controlador
    call_user_func(array($classController, $action));
}
