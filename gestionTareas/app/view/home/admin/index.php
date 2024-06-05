<br>
<br>
<h2>Listado de Tareas de Educación</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id Tarea</th>
            <th scope="col">Descripción</th>
            <th scope="col">Tipo de tarea</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasEduacacion() as $row) { ?>
                <td><?= $row->tareaId ?></td>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->tipoTarea ?></td>
                <td><a href="?controller=admin&action=FormEditar&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-warning">Editar</button></a><br><br>
                    <a href="?controller=admin&action=deleteTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
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
            <th scope="col">Id Tarea</th>
            <th scope="col">Descripción</th>
            <th scope="col">Tipo de tarea</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasDesarrolloPersonal() as $row) { ?>
                <td><?= $row->tareaId ?></td>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->tipoTarea ?></td>
                <td><a href="?controller=admin&action=FormEditar&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-warning">Editar</button></a><br><br>
                    <a href="?controller=admin&action=deleteTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
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
            <th scope="col">Id Tarea</th>
            <th scope="col">Descripción</th>
            <th scope="col">Tipo de tarea</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasResponsabilidadesDomesticas() as $row) { ?>
                <td><?= $row->tareaId ?></td>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->tipoTarea ?></td>
                <td><a href="?controller=admin&action=FormEditar&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-warning">Editar</button></a><br><br>
                    <a href="?controller=admin&action=deleteTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
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
            <th scope="col">Id Tarea</th>
            <th scope="col">Descripción</th>
            <th scope="col">Tipo de tarea</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasRelacionesSociales() as $row) { ?>
                <td><?= $row->tareaId ?></td>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->tipoTarea ?></td>
                <td><a href="?controller=admin&action=FormEditar&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-warning">Editar</button></a><br><br>
                    <a href="?controller=admin&action=deleteTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<br>
<h2>Listado de Tareas de Salud y Biestar</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id Tarea</th>
            <th scope="col">Descripción</th>
            <th scope="col">Tipo de tarea</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasSaludBienestar() as $row) { ?>
                <td><?= $row->tareaId ?></td>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->tipoTarea ?></td>
                <td><a href="?controller=admin&action=FormEditar&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-warning">Editar</button></a><br><br>
                    <a href="?controller=admin&action=deleteTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<br>
<h2>Listado de Tareas de Desarrollo Profesional</h2>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id Tarea</th>
            <th scope="col">Descripción</th>
            <th scope="col">Tipo de tarea</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($this->model->listTareasDesarrolloProfesional() as $row) { ?>
                <td><?= $row->tareaId ?></td>
                <td><?= $row->descripcion ?></td>
                <td><?= $row->tipoTarea ?></td>
                <td><a href="?controller=admin&action=FormEditar&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-warning">Editar</button></a><br><br>
                    <a href="?controller=admin&action=deleteTarea&tareaId=<?= $row->tareaId ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>