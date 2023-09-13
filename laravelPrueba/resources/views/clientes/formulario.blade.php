<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="/crear" method="post">
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="text" class="form-control" id="edad" name="edad" required>
        </div>
        <div class="form-group">
          <label for="ci">CI</label>
          <input type="text" class="form-control" id="ci" name="ci" required>
        </div>
        <div class="form-group">
          <label for="correo">Correo Electrónico</label>
          <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="form-group">
          <label for="fecha_nac">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
        </div>
        <div class="form-group">
          <label for="estado">Estado:</label>
          <select name="estado" id="estado" class="form-control" required>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>