        <h1 class="page-header">Participantes
            <img id="logo" src="complementos/img/logo.jpg">
        </h1>

        <div class="row">
            <div class="col-xs-12">
                <div class="well well-sm text-right">    
                    <div class="row">
                        <div class="col-xs-8 col-sm-9 col-md-10">            
                            <div id="resultadoBusqueda" class="<?php foreach($participante as $r): ?><?php if($r->Cedula != null){echo "alert alert-success";} ?><?php endforeach; ?>" role="alert">                
                            </div>    
                        </div>
                        
                        <div class="col-xs-2 col-sm-3 col-md-2">
                            <a class="btn btn-primary" href="?control=Participante&accion=Crud">Nuevo Participante</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <tr>            
                            <th style="width:60px;">Cédula</th>
                            <th style="width:100px;">Nombre</th>
                            <th style="width:180px;">Apellido</th>
                            <th style="width:40px;">Correo</th>
                            <th style="width:40px;">Sexo</th>
                            <th style="width:180px;">Dirección</th>
                            <th style="width:60px;">Nacimiento</th>
                            <th style="width:60px;"></th>
                            <th style="width:60px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($participante as $r): ?>
                        <tr>
                            <td><?php echo $r->Cedula; ?></td>
                            <td><?php echo $r->Nombre; ?></td>
                            <td><?php echo $r->Apellido; ?></td>
                            <td><?php echo $r->Correo; ?></td>
                            <td><?php echo $r->Sexo == 1 ? 'Hombre' : 'Mujer'; ?></td>
                            <td><?php echo $r->Direccion; ?></td>
                            <td><?php echo $r->FechaNacimiento; ?></td>
                            <td>
                                <a href="?control=Participante&accion=Crud&id=<?php echo $r->id; ?>">Editar</a>
                            </td>
                            <td>
                                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?control=Participante&accion=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                            </td>
                        </tr>            
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            $(document).ready(function(){

               if ( $("#resultadoBusqueda").hasClass("alert alert-success") ){
               $("#resultadoBusqueda").append("<h4 class='text-center'>Participante registrado en la base de datos</h4>");
               }else{
                    $("#resultadoBusqueda").addClass("alert alert-danger");
                    $("#resultadoBusqueda").html("<h4 class='text-center'>Participante no se encuentra en la base de datos</h4>");
               }
            });
        </script>
