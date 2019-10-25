
<?php include 'template/header.php'; ?>

<body>

  <div class="container">
    <div id="mensaje"></div>
  </div>

  <div class="container">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Crud <b>PHP</b> con modales</h2>
          </div>
          <div class="col-sm-6 d-flex justify-content-between mx-auto">

            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                class="material-icons">&#xE147;</i> <span>Añadir persona</span></a>

            <a href="#deleteEmployeeModal" type="submit" class="btn btn-danger" name="operacion" value="EliminadoMultiple"><i class="material-icons">&#xE147;</i><span>Eliminar</span></a>

            <div id="custom-search-input">

              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                <div class="input-group">
                  <input type="text" class="search-query form-control" id="" name="buscador"
                    placeholder="Buscar" />
                  <span class="input-group-btn">
                    <button type="submit">
                      <span class="fa fa-search"></span>
                    </button>
                  </span>
                </div>
              </form>
            
            </div>

          </div>
        </div>
      </div>


      <table class="table table-striped table-hover">
          
          <thead>            
            <tr>
              <th>
                <span class="custom-checkbox">
                  <input type="checkbox" id="selectAll">
                  <label for="selectAll"></label>
                </span>
              </th>
              <th>Id</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Edad</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>

          <?php
           
            $conexion = new Conexion();
            $pdo = $conexion->conectar();

            $registro = new Registro();

            $listadoRegistros = $registro -> mostrarRegistros();

            foreach($listadoRegistros as $registro){ ?>

            <tr>

              <td>
                <span class="custom-checkbox">
                  <input type="checkbox" id="checkbox" name="borradoMultiple[]"
                    value="<?php echo $registro['id_registro']; ?>">
                  <label for="checkbox1"></label>
                </span>
              </td>
              <td><?php echo $registro['id_registro']; ?></td>
              <td><?php echo $registro['nombre']; ?></td>
              <td><?php echo $registro['apellidos']; ?></td>
              <td><?php echo $registro['edad']; ?></td>
              <td>

                <a href="#editEmployeeModal&id=<?php echo $registro['id_registro']; ?>" class="edit"
                  data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>


                <a href="#deleteEmployeeModal&id=<?php echo $registro['id_registro'] ?>" class="delete"
                  data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                <?php include 'template/editEmployeeModal.php'; ?>

                <?php include 'template/deleteEmployeeModal.php'; ?>
                
              </td>
            </tr>

            <?php } ?>

          </tbody>
        </table>

      <?php include 'template/paginacion.php'; ?>

      <?php include 'template/addEmployeeModal.php'; ?>
     
    </div>
  </div>


  <?php include 'template/buscador.php'; ?>

  <?php include 'template/footer.php'; ?>


  