
<!-- Eliminar Modal HTML -->
<div id="deleteEmployeeModal&id=<?php echo $registro['id_registro'] ?>" class="modal fade">
    <div class="modal-dialog">

        <?php

            $conexion = new Conexion();
            $pdo = $conexion->conectar();
            $re = new Registro();

            $id = $registro['id_registro'];

            $busqueda = $re -> buscarUsuarioporId($id);
            // print_r(var_dump($busquedaRegistro));

            foreach($busqueda as $bus){  ?>

        <div class="modal-content">
            <form id="" action="controller/controller_registro.php" method="GET">
                <!-- <form id="eliminar" action="" method="GET"> -->
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id_registro" name="id_registro"
                            value="<?php echo $bus['id_registro']; ?>">
                    </div>
                    <p>Estás seguro que desear eliminar el registro?</p>
                    <p class="text-warning"><small><?php echo $bus['nombre']; ?>
                            <?php echo $bus['apellidos']; ?>, de
                            <?php echo $bus['edad']; ?> años.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" name="operacion" value="Eliminar">
                    <!-- <input type="submit" class="btn btn-danger" value="Eliminar"> -->
                </div>
            </form>
        </div>

        <?php } ?>

    </div>
</div>
