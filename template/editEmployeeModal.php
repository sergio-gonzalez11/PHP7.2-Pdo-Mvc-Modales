 
 
 <!-- Editar Modal HTML -->
 <div id="editEmployeeModal&id=<?php echo $registro['id_registro']; ?>" class="modal fade">
     <div class="modal-dialog">

        <?php

            $conexion = new Conexion();
            $pdo = $conexion->conectar();
            $reg = new Registro();

            $id = $registro['id_registro'];

            $busqueda = $reg -> buscarUsuarioporId($id);

            //  print_r(var_dump($id));

            foreach($busqueda as $busquedaEncontrada){  ?>

         <div class="modal-content">
             <form id="" action="controller/controller_registro.php" method="GET">
                 <div class="modal-header">
                     <h4 class="modal-title">Editar registro</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="hidden" class="form-control"
                             value="<?php echo $busquedaEncontrada['id_registro']; ?>" name="id_registro" id="">
                     </div>
                     <div class="form-group">
                         <label>Nombre</label>
                         <input type="text" class="form-control" value="<?php echo $busquedaEncontrada['nombre']; ?>"
                             name="nombre" id="" required>
                     </div>
                     <div id="validacionNombre"></div>
                     <div class="form-group">
                         <label>Apellidos</label>
                         <input type="text" class="form-control" value="<?php echo $busquedaEncontrada['apellidos']; ?>"
                             name="apellidos" id="" required>
                     </div>
                     <div id="validacionApellidos"></div>
                     <div class="form-group">
                         <label>Edad</label>
                         <input type="text" class="form-control" value="<?php echo $busquedaEncontrada['edad']; ?>"
                             name="edad" id="" required>
                     </div>
                     <div id="validacionEdad"></div>
                 </div>
                 <div class="modal-footer">
                     <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                     <input type="submit" class="btn btn-info" name="operacion" value="Actualizar">

                     <!-- <input type="submit" class="btn btn-info" value="Actualizar"> -->
                 </div>
             </form>
         </div>

         <?php } ?>
     
    </div>
 </div>
