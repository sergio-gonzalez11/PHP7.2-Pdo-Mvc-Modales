
<div class="container">
    <div class="table-wrapper">
        <div class="table-title text-center">
            <h2>Resultado de la <b>búsqueda</b></h2>
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
           

                    if(!empty($_GET['buscador'])){

                    
                    $busqueda = $_GET['buscador'];

                    $conexion = new Conexion();
                    $pdo = $conexion->conectar();

                    $stmt = $pdo->prepare("SELECT * FROM registro WHERE nombre LIKE '%$busqueda%'");
                    $stmt->execute();

                    $busqueda = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    $mensaje = "";
           
                    foreach($busqueda as $bus){ ?>

                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                            <label for="checkbox1"></label>
                        </span>
                    </td>
                    <td><?php echo $bus['id_registro']; ?></td>
                    <td><?php echo $bus['nombre']; ?></td>
                    <td><?php echo $bus['apellidos']; ?></td>
                    <td><?php echo $bus['edad']; ?></td>
                    <td>

                        <a href="#editEmployeeModal&id=<?php echo $registro['id_registro']; ?>" class="edit"
                        data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>


                        <a href="#deleteEmployeeModal&id=<?php echo $registro['id_registro'] ?>" class="delete"
                        data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                        <?php include 'editEmployeeModal.php'; ?>

                        <?php include 'deleteEmployeeModal.php'; ?>
                
                    </td>
                </tr>

                <?php }

                }else{

                  $mensaje ='El registro a buscar esta vacio!';

                }if(count($busqueda) == 0){

                  $mensaje ='El registro buscado, no pertenece a ningun registro, por favor vuelve a intentarlo, gracias!';
                
                }
                  ?>
            </tbody>
        </table>

        <div class="container">
            <div class="row d-felx justify-content-center">

                <?php if(!empty($mensaje)): ?>

                <div class="mensaje">
                    <?php echo $mensaje; ?>
                </div>

                <?php endif; ?>

            </div>
        </div>

    </div>
</div>