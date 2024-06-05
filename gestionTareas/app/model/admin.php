<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Admin
{
    private $pdo;

    //Atributos Tareas
    private $tareaId;
    private $descripcion;
    private $tipoTarea;
    // Constructor
    public function __construct()
    {
        $this->pdo = DataBase::ConnectDB();
    }

    // get methods
    public function getTareaId()
    {
        return $this->tareaId;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getTipoTarea()
    {
        return $this->tipoTarea;
    }

    // set methods
    public function setTareaId($tareaId)
    {
        $this->tareaId = $tareaId;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setTipoTarea($tipoTarea)
    {
        $this->tipoTarea = $tipoTarea;
    }

    //Methods
    //List methods

    public function listTareasEduacacion()
    {
        try {
            $queryListTED = "SELECT *FROM Tareas WHERE tipoTarea = 'ED'";
            $stmt = $this->pdo->prepare($queryListTED);
            $stmt->execute();
            $resultQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasDesarrolloPersonal()
    {
        try {
            $queryListTDP = "SELECT *FROM Tareas WHERE tipoTarea = 'DP'";
            $stmt = $this->pdo->prepare($queryListTDP);
            $stmt->execute();
            $resultQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasResponsabilidadesDomesticas()
    {
        try {
            $queryListTRD = "SELECT *FROM Tareas WHERE tipoTarea = 'RD'";
            $stmt = $this->pdo->prepare($queryListTRD);
            $stmt->execute();
            $resultQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasRelacionesSociales()
    {
        try {
            $queryListTRS = "SELECT *FROM Tareas WHERE tipoTarea = 'RS'";
            $stmt = $this->pdo->prepare($queryListTRS);
            $stmt->execute();
            $resultQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasSaludBienestar()
    {
        try {
            $queryListTSB = "SELECT *FROM Tareas WHERE tipoTarea = 'SB'";
            $stmt = $this->pdo->prepare($queryListTSB);
            $stmt->execute();
            $resultQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasDesarrolloProfesional()
    {
        try {
            $queryListTPR = "SELECT *FROM Tareas WHERE tipoTarea = 'PR'";
            $stmt = $this->pdo->prepare($queryListTPR);
            $stmt->execute();
            $resultQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    //Insert Methods
    public function insertNuevaTareaConUsuarios($descripcion, $tipoTarea)
    {
        try {
            $this->pdo->beginTransaction();

            // Insert new task into Tareas table
            $queryInsertNT = "INSERT INTO Tareas (descripcion, tipoTarea) VALUES (:descripcion, :tipoTarea);";
            $stmt = $this->pdo->prepare($queryInsertNT);
            $stmt->execute([':descripcion' => $descripcion, ':tipoTarea' => $tipoTarea]);

            // Get the ID of the newly inserted task
            $newTareaId = $this->pdo->lastInsertId();

            // Fetch all user IDs from Usuarios table
            $queryGetUserIds = "SELECT userId FROM Usuarios;";
            $stmt = $this->pdo->prepare($queryGetUserIds);
            $stmt->execute();
            $userIds = $stmt->fetchAll(PDO::FETCH_COLUMN);

            // Insert a record for each user into TareasUsuarios table
            $queryInsertTU = "INSERT INTO TareasUsuarios (tareaId, userId, estado) VALUES (:tareaId, :userId, 'pendiente');";
            $stmt = $this->pdo->prepare($queryInsertTU);
            foreach ($userIds as $userId) {
                $stmt->execute([':tareaId' => $newTareaId, ':userId' => $userId]);
            }

            $this->pdo->commit();
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            error_log($e->getMessage());
            // Optionally, handle the error more explicitly here
            return false;
        }
        return true;
    }

    //Delete Methods
    public function deleteTarea($tareaId)
    {
        try {
            $queryDeleteT = "DELETE FROM Tareas WHERE tareaId = :tareaId";
            $stmt = $this->pdo->prepare($queryDeleteT);
            $stmt->execute(array(':tareaId' => $tareaId));
            return true;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    //Get id method

    public function getTareaById($tareaId)
    {
        try {
            $queryGetTareaById = "SELECT *FROM Tareas WHERE tareaId = :tareaId";
            $stmt = $this->pdo->prepare($queryGetTareaById);
            $stmt->execute(array(':tareaId' => $tareaId));
            $resultQuery = $stmt->fetch(PDO::FETCH_OBJ);
            $objTareaId = new Admin();
            $objTareaId->setTareaId($resultQuery->tareaId);
            $objTareaId->setDescripcion($resultQuery->descripcion);
            $objTareaId->setTipoTarea($resultQuery->tipoTarea);
            return $objTareaId;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    //update methods

    public function updateTarea(Admin $objTareaId)
    {
        try {
            $queryUpdateTask = "UPDATE Tareas SET descripcion=:descripcion, tipoTarea=:tipoTarea WHERE tareaId=:tareaId";
            $stmt = $this->pdo->prepare($queryUpdateTask);
            $stmt->execute(array(':descripcion' => $objTareaId->getDescripcion(), ':tipoTarea' => $objTareaId->getTipoTarea(), ':tareaId' => $objTareaId->getTareaId()));
        } catch (PDOException $e) {
            // Log the error message
            error_log('Error inserting data into database: ' . $e->getMessage());
            return false; // Insertion failed
        }
    }
}
