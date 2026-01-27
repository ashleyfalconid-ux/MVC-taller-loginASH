<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5">
    <h2 class="mb-3">Listado alumnos</h2>
    <form method="GET" action="index.php" class="row g-2 mb-4">
    <input type="hidden" name="accion" value="consultar">

    <div class="col-md-4">
        <input 
            type="text" 
            name="buscar" 
            class="form-control" 
            placeholder="Buscar por cédula, nombre o apellido"
            value="<?php echo $_GET['buscar'] ?? ''; ?>"
        >
    </div>

    <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">
            Buscar
        </button>
    </div>

    <div class="col-md-2">
      <a href="index.php?accion=consultar" class="btn btn-secondary">
    Limpiar
</a>
    </div>
</form>
    <p class="text-muted">Cantidad de registros: <?php echo $cantidad; ?></p>

    <table class="table table-bordered border-primary table-hover table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Fecha de nacimiento</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($alumnos)): ?>
                <?php foreach ($alumnos as $fila): ?>
                <tr>
                    <td><?php echo $fila['Id'] ?></td>
                    <td><?php echo $fila['Cedula'] ?></td>
                    <td><?php echo $fila['Nombres'] ?></td>
                    <td><?php echo $fila['Apellidos'] ?></td>
                    <td><?php echo $fila['Correo'] ?></td>
                    <td><?php echo $fila['Telefono'] ?></td>
                    <td><?php echo $fila['FechaNacimiento'] ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">No hay alumnos registrados</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>