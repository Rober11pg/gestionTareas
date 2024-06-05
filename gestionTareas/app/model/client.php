<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Client
{
    private $pdo;

    //Atributos Tareas
    private $tareaId;
    private $estado;
    private $userId;

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

    public function getEstado()
    {
        return $this->estado;
    }
    public function getUserId()
    {
        return $this->userId;
    }

    // set methods
    public function setTareaId($tareaId)
    {
        $this->tareaId = $tareaId;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    // Methods
    // List Methods for tareas pendientes

    public function listTareasEducacion()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'ED' AND tu.estado = 'pendiente'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasDesarrolloPersonal()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'DP' AND tu.estado = 'pendiente'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasResponsabilidadesDomesticas()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'RD' AND tu.estado = 'pendiente'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasRelacionesSociales()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'RS' AND tu.estado = 'pendiente'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasSaludBienestar()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'SB' AND tu.estado = 'pendiente'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasDesarrolloProfesional()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'PR' AND tu.estado = 'pendiente'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    // List Methods for tareas completadas
    public function listTareasEducacionCompletadas()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'ED' AND tu.estado = 'completada'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasDPCompletadas()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'DP' AND tu.estado = 'completada'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasRDCompletadas()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'RD' AND tu.estado = 'completada'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasRSCompletadas()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'RS' AND tu.estado = 'completada'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasSBCompletadas()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'SB' AND tu.estado = 'completada'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function listTareasDPRCompletadas()
    {
        try {
            $queryListTareaED = "SELECT tu.tareaId, t.descripcion, tu.estado FROM TareasUsuarios AS tu JOIN Usuarios as u ON tu.userId = u.userId JOIN Tareas AS t ON tu.tareaId = t.tareaId WHERE tu.userId = :userId AND t.tipoTarea = 'PR' AND tu.estado = 'completada'";
            $stmt = $this->pdo->prepare($queryListTareaED);
            $stmt->execute(array('userId' => $_SESSION['SESSION_USER']->userId));
            $resulQuery = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resulQuery;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    //Change state of task
    public function changeStateTarea($tareaId)
    {
        try {
            $queryChangeState = "UPDATE TareasUsuarios SET estado = 'completada' WHERE tareaId = :tareaId AND userId = :userId";
            $stmt = $this->pdo->prepare($queryChangeState);
            $stmt->execute(array('tareaId' => $tareaId, 'userId' => $_SESSION['SESSION_USER']->userId));
            return true;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    public function reverseStateTarea($tareaId)
    {
        try {
            $queryChangeState = "UPDATE TareasUsuarios SET estado = 'pendiente' WHERE tareaId = :tareaId AND userId = :userId";
            $stmt = $this->pdo->prepare($queryChangeState);
            $stmt->execute(array('tareaId' => $tareaId, 'userId' => $_SESSION['SESSION_USER']->userId));
            return true;
        } catch (PDOException $mes) {
            error_log($mes->getMessage());
            return false;
        }
    }

    // Calculate the percentage of complete and incomplete tasks
    public function calculateTaskCompletionPercentage()
    {
        try {
            // Count total tasks for the user
            $queryTotalTasks = "SELECT COUNT(*) as total FROM TareasUsuarios WHERE userId = :userId";
            $stmtTotal = $this->pdo->prepare($queryTotalTasks);
            $stmtTotal->execute(['userId' => $_SESSION['SESSION_USER']->userId]);
            $totalTasks = $stmtTotal->fetch(PDO::FETCH_OBJ)->total;

            // Count completed tasks for the user
            $queryCompletedTasks = "SELECT COUNT(*) as completed FROM TareasUsuarios WHERE userId = :userId AND estado = 'completada'";
            $stmtCompleted = $this->pdo->prepare($queryCompletedTasks);
            $stmtCompleted->execute(['userId' => $_SESSION['SESSION_USER']->userId]);
            $completedTasks = $stmtCompleted->fetch(PDO::FETCH_OBJ)->completed;

            // Calculate percentages
            $completedPercentage = ($totalTasks > 0) ? ($completedTasks / $totalTasks) * 100 : 0;
            $incompletePercentage = 100 - $completedPercentage;

            return [
                'completedPercentage' => $completedPercentage,
                'incompletePercentage' => $incompletePercentage,
            ];
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return false;
        }
    }
}
