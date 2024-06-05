<br>
<br>
<br>
<div class="card" style="width: 100%;">
    <div class="card-body">
        <h1 class="card-title">Ingreso de Tareas</h1>

        <form action="?controller=admin&action=insertNuevaTarea" method="post">

            <label for="tipoTarea">Selecciona el Tipo de Tarea:</label>
            <select class="form-select" id="tipoTarea" name="tipoTarea" aria-label="Default select example" required>
                <option value="" disabled selected>Open this select menu</option>
                <option value="ED">Educación</option>
                <option value="DP">Desarrollo Personal</option>
                <option value="RD">Responsabilidades Domesticas</option>
                <option value="RS">Relaciones Sociales</option>
                <option value="SB">Salud y Bienestar</option>
                <option value="PR">Desarrollo Profesional</option>
            </select>
            <br>


            <div class="form-floating mb-3">
                <input required type="input" class="form-control" name="descripcion" id="descripcion">
                <label for="descripcion">Descripción de la Tarea</label>
            </div>

            <br>
            <button class="btn btn-dark" type="submit">Añadir Tarea</button>

        </form>
    </div>
</div>