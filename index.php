<!DOCTYPE html>
<html>
<head>
    <title>Operación CRUD en PHP y MySQL</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div style="height:50px;"></div>
    <div class="well" style="margin:auto; padding:auto; width:80%;">
    <span style="font-size:25px; color:blue"><center><strong>Operación CRUD en PHP y MySQL</strong></center></span>    
        <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary">
		<span class="glyphicon glyphicon-plus"></span> Agregar Registro</a></span>
        <div style="height:50px;"></div>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Accion</th>
            </thead>
            <tbody>
            <?php
                include('models/conn.php');
                
                $query=mysqli_query($conn,"select * from `user`");
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo ucwords($row['firstname']); ?></td>
                        <td><?php echo ucwords($row['lastname']); ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a> || 
                            <a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                            <?php include('views/button.php'); ?>
                        </td>
                    </tr>
                    <?php
                }
            
            ?>
            </tbody>
        </table>
    </div>
    <?php include('views/add_modal.php'); ?>
</div>
</body>
</html>