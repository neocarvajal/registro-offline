        <h1 class="page-header">Participantes
            <img id="logo" src="complementos/img/logo.jpg">
        </h1>

        <div class="well well-sm text-right">    
            <a class="btn btn-primary" href="?control=Participante&accion=Crud">Nuevo Participante</a>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-condensed">
                    <thead>
                        <tr class="info">
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
                    <?php foreach($this->model->Listar() as $r): ?>
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