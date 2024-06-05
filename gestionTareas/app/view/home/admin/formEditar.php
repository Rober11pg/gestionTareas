<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<br>
<br>
<div class="card" style="width: 100%;">
    <div class="card-body">
        <h1 class="card-title">Editar Datos</h1>
        <br>



        <form action="?controller=admin&action=updateTarea" method="post">

            <div class="mb-3">
                <label for="tareaId" class="form-label">Id de la Tarea:</label>
                <input type="input" class="form-control" name="tareaId" id="tareaId" value="<?= $objTareaId->getTareaId() ?>" readonly>
            </div>
            <br>
            <label for="tipoTarea">Selecciona el Tipo de Tarea:</label>
            <select class="form-select" id="tipoTarea" name="tipoTarea" aria-label="Default select example" required>
                <option value="ED" <?= $objTareaId->getTipoTarea() == 'ED' ? 'selected' : '' ?>>Educación</option>
                <option value="DP" <?= $objTareaId->getTipoTarea() == 'DP' ? 'selected' : '' ?>>Desarrollo Personal</option>
                <option value="RD" <?= $objTareaId->getTipoTarea() == 'RD' ? 'selected' : '' ?>>Responsabilidades Domesticas</option>
                <option value="RS" <?= $objTareaId->getTipoTarea() == 'RS' ? 'selected' : '' ?>>Relaciones Sociales</option>
                <option value="SB" <?= $objTareaId->getTipoTarea() == 'SB' ? 'selected' : '' ?>>Salud y Bienestar</option>
                <option value="PR" <?= $objTareaId->getTipoTarea() == 'PR' ? 'selected' : '' ?>>Desarrollo Profesional</option>
            </select>
            <br>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="input" required class="form-control" name="descripcion" id="descripcion" value="<?= $objTareaId->getDescripcion() ?>">
            </div>
            <br>
            <button class="btn btn-dark" type="submit">Guardar Cambios</button>

        </form>
    </div>
</div>