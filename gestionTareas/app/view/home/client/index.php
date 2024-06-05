<?php $array = $this->model->calculateTaskCompletionPercentage() ?>
<!-- Hero -->
<br>
<div class="p-4 shadow-4 rounded-3" style="background-color: hsl(0, 0%, 94%);">
    <h3>Porcentaje de Tareas Completadas</h3>
    <p>
        Este es el porcentaje de tareas completadas
        <br>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: <?= $array['completedPercentage'] ?>%" aria-valuenow="<?= $array['completedPercentage'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
        <br>
    </div>
    <span><?= round($array['completedPercentage'], 2) ?>%</span>
</div>



<!-- Hero -->
<br>
<h1 class="text-center">Tareas por Completar</h1>
<br>
<br>
<h2>Listado de Tareas de Educación</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Estado de la Tarea</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasEducacion() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=changeStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-success">Marcar como completada</button></a><br>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<br>
<h2>Listado de Tareas de Desarrollo Personal</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Estado de la Tarea</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasDesarrolloPersonal() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=changeStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-success">Marcar como completada</button></a><br>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<br>
<h2>Listado de Tareas de Responsabilidades Domesticas</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Estado de la Tarea</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasResponsabilidadesDomesticas() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=changeStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-success">Marcar como completada</button></a><br>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<br>
<h2>Listado de Tareas de Relaciones Sociales</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Estado de la Tarea</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasRelacionesSociales() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=changeStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-success">Marcar como completada</button></a><br>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<br>
<h2>Listado de Tareas de Salud y Bienestar</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Estado de la Tarea</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasSaludBienestar() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=changeStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-success">Marcar como completada</button></a><br>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<br>
<h2>Listado de Desarrollo Profesional</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Descripción</th>
            <th scope="col">Estado de la Tarea</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasDesarrolloProfesional() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=changeStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-success">Marcar como completada</button></a><br>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>