<!-- eliminar -->
    <div class="modal fade" id="del<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Eliminar</h4></center>
                </div>
                <div class="modal-body">
                <?php
                    $del=mysqli_query($conn,"select * from user where userid='".$row['userid']."'");
                    $drow=mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h5><center>Estas seguro <strong><?php echo ucwords($drow['firstname'].' '.$row['lastname']); ?></strong> de eliminar el registro.</center></h5> 
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <a href="delete.php?id=<?php echo $row['userid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                </div>
                
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Editar -->
    <div class="modal fade" id="edit<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Editar</h4></center>
                </div>
                <div class="modal-body">
                <?php
                    $edit=mysqli_query($conn,"select * from user where userid='".$row['userid']."'");
                    $erow=mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                <form method="POST" action="edit.php?id=<?php echo $erow['userid']; ?>">
                    <div class="row">
                        <div class="col-lg-2">
                            <label style="position:relative; top:7px;">Nombres:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="firstname" class="form-control" value="<?php echo $erow['firstname']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label style="position:relative; top:7px;">Apellidos:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="lastname" class="form-control" value="<?php echo $erow['lastname']; ?>">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label style="position:relative; top:7px;">Direccion:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="address" class="form-control" value="<?php echo $erow['address']; ?>">
                        </div>
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<!-- /.modal -->