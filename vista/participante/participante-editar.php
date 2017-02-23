<h1 class="page-header">
    <?php echo $participante->id != null ? $participante->Nombre . $participante->Apellido : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?control=Participante">Participantes</a></li>
  <li class="active"><?php echo $participante->id != null ? $participante->Nombre . $participante->Apellido: 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-participante" action="?control=Participante&accion=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $participante->id; ?>" />

    <div class="form-group">
        <label class="sr-only" for="Cedula">Cédula</label>
        <input type="text" name="Cedula" value="<?php echo $participante->Cedula; ?>" class="form-control" placeholder="Ingrese su cédula" data-validacion-tipo="requerido|max:8" />
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $participante->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="Apellido">Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $participante->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="Correo">Correo</label>
        <input type="text" name="Correo" value="<?php echo $participante->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="Sexo">Sexo</label>
        <select name="Sexo" class="form-control">
            <option <?php echo $participante->Sexo == 1 ? 'selected' : ''; ?> value="1">Masculino</option>
            <option <?php echo $participante->Sexo == 2 ? 'selected' : ''; ?> value="2">Femenino</option>
        </select>
    </div>

    <div class="form-group">
        <label class="sr-only" for="Direccion">Direccion</label>
        <input type="text" name="Direccion" value="<?php echo $participante->Direccion; ?>" class="form-control" placeholder="Ingrese una dirección de habitación" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="FechaNacimiento">Fecha de nacimiento</label>
        <input readonly type="text" name="FechaNacimiento" value="<?php echo $participante->FechaNacimiento; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />
    </div>
   
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){     
        $("#frm-participante .form-control:first").focus();     
        $("#frm-participante").submit(function(){
            return $(this).validate();
        });
    })
</script>