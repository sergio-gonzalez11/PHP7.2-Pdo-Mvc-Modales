
<!-- Añadir Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="" action="controller/controller_registro.php" method="GET">
                <div class="modal-header">
                    <h4 class="modal-title">Añadir registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div id="validacionNombre"></div>
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                    </div>
                    <div id="validacionApellidos"></div>
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="text" class="form-control" name="edad" id="edad" required>
                    </div>
                    <div id="validacionEdad"></div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" name="operacion" value="Agregar">
                    <!-- <input type="submit" class="btn btn-success" value="Añadir"> -->
                </div>
            </form>
        </div>
    </div>
</div>