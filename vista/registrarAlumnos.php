<?php include __DIR__ . '/layout/header.php'; ?>
<div class="container mt-5">

<div class="row justify-content-center"> 
<div class="col-md-6 col-lg-5"> 
    <h2>Registro de Alumnos</h2>

    <form action="index.php?accion=guardarAlumno" method="post">
        <div class="mb-2">
            <label class="form-label" for="nombres">Nombres</label>
            <input class="form-control sm" type="text" id="nombres" name="nombres" required>
        </div>
        <div class="mb-2">
            <label class="form-label" for="apellidos">Apellidos</label>
            <input class="form-control sm" type="text" id="apellidos" name="apellidos" required>
        </div>
        <div class="mb-2"> 
            <label class="form-label" for="cedula">Cédula</label>
            <input class="form-control sm" type="text" id="cedula" name="cedula" required>
        </div>
        <div class="mb-2">
            <label class="form-label" for="correo">Correo</label>
            <input class="form-control sm" type="email" id="correo" name="correo" required>
        </div>      
        <div class="mb-2">
            <label class="form-label" for="telefono">Teléfono</label>
            <input class="form-control sm" type="text" id="telefono" name="telefono" required>
        </div>
        <div class="mb-3">
            <label class="form-label   " for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input class="form-control sm" type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>
<button class="btn btn-primary" type="submit">Guardar</button> 

</form>


</div> 


</div>    



</div>
    

<?php include __DIR__ . '/layout/footer.php'; ?>