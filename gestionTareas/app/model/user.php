<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


class User
{


    //Atributos para Usuarios 
    private $userId;
    private $nombre;
    private $apellido;
    private $correo;
    private $contrasena;
    private $rol;

    public function __construct()
    {
    }

    // get methods

    public function getUserId()
    {
        return $this->userId;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function getRol()
    {
        return $this->rol;
    }

    // set methods 

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }
}

class UserModel
{

    private $pdo;
    public function __construct()
    {
        $this->pdo = DataBase::ConnectDB();
    }

    // Methods 

    //Insert methods: recive an object from the home controller 

    public function insertUsers(User $objUser)
    {
        try {
            $this->pdo->beginTransaction();

            // Insert new user into Usuarios table
            $queryInsertUsers = "INSERT INTO Usuarios (nombre, apellido, correo, contrasena, rol) VALUES (:nombre, :apellido, :correo, SHA2(:contrasena, 256), 'user')";
            $stmt = $this->pdo->prepare($queryInsertUsers);
            $stmt->execute([
                ':nombre' => $objUser->getNombre(),
                ':apellido' => $objUser->getApellido(),
                ':correo' => $objUser->getCorreo(),
                ':contrasena' => $objUser->getContrasena()
            ]);

            // Get the ID of the newly inserted user
            $newUserId = $this->pdo->lastInsertId();

            // Fetch all task IDs from Tareas table
            $queryGetTaskIds = "SELECT tareaId FROM Tareas;";
            $stmt = $this->pdo->prepare($queryGetTaskIds);
            $stmt->execute();
            $taskIds = $stmt->fetchAll(PDO::FETCH_COLUMN);

            // Insert a record for the new user for each task into TareasUsuarios table
            $queryInsertTU = "INSERT INTO TareasUsuarios (tareaId, userId, estado) VALUES (:tareaId, :userId, 'pendiente');";
            $stmt = $this->pdo->prepare($queryInsertTU);
            foreach ($taskIds as $tareaId) {
                $stmt->execute([':tareaId' => $tareaId, ':userId' => $newUserId]);
            }

            $this->pdo->commit();
            return true;
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            error_log($e->getMessage());
            // Optionally, handle the error more explicitly here
            return false;
        }
    }

    public function  loginUsers($correo, $psw)
    {
        try {

            $querySelectUsers =  "SELECT userId, nombre, apellido, correo, rol
            FROM Usuarios
            WHERE correo = :correo AND contrasena = SHA2(:psw, 256)";
            $stmt = $this->pdo->prepare($querySelectUsers);
            $stmt->execute([':correo' => $correo, ':psw' => $psw]);
            $result =  $stmt->fetchAll(PDO::FETCH_OBJ);
            return count($result) > 0 ? $result[0] : null;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }
}
