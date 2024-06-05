<h1 class="text-center">Tareas Completadas</h1>
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
            <?php foreach ($this->model->listTareasEducacionCompletadas() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=reverseStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Desmarcar como completada</button></a><br>
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
            <?php foreach ($this->model->listTareasDPCompletadas() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=reverseStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Desmarcar como completada</button></a><br>
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
            <?php foreach ($this->model->listTareasRDCompletadas() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=reverseStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Desmarcar como completada</button></a><br>
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
            <?php foreach ($this->model->listTareasRSCompletadas() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=reverseStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Desmarcar como completada</button></a><br>
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
            <?php foreach ($this->model->listTareasSBCompletadas() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=reverseStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Desmarcar como completada</button></a><br>
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
            <?php foreach ($this->model->listTareasDPRCompletadas() as $row) { ?>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->estado ?></td>
                <td><a href="?controller=client&action=reverseStateTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Desmarcar como completada</button></a><br>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>