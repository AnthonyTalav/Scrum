
<?php
include_once '../modelo/CRUDusuario.php';
?>
<br>
<div class="login-logo">

    
    <p>Tabla Usuarios</p>
    </div>
    
    <div class="container login-box-body">
        
        <div class="row">
        <div class="col-sm-12">
    
           
    <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                <span class="glyphicon glyphicon-plus"></span>
                Agregar nuevo 
                
            </button>
            <p></p>
            
    </caption>
    <p></p>
                
           
        
    <table class="table table-hover" border="2">
        <tr>
            <th>Id</th>
            
            <th>Usuario</th>
            <th>Password</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>            
            <th>Estado</th>            
            <th>Acciones</th>         
            
            </tr>
            <?php
            $obj= new Usuario();
            
            $datos=$obj->mostrarUsuario();
                
            
            foreach($datos as $dat) {    
            $dato=$dat['idusuario']."||".
                    $dat['usuario']."||".
                    $dat['pass']."||".
                    $dat['nombre']."||".
                    $dat['apepat']."||".
                    $dat['apemat']."||".
                    $dat['estado'];                                                    
                            ?> 
            <tr>
                <td><?php echo $dat['idusuario'] ?></td>
                <td><?php echo $dat['usuario'] ?></td>
                <td><?php echo $dat['pass'] ?></td>
                <td><?php echo $dat['nombre'] ?></td>
                <td><?php echo $dat['apepat'] ?></td>
                <td><?php echo $dat['apemat']?></td>  
                <td><?php echo $dat['estado']?></td>
                <td>
                    <center>
                <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformUsuario('<?php echo $dato ?>')">     
                </button>
                </center>
                </tr>
                <?php } ?>                                
                   
                </table>
                </div>
        </div>
    </div> 
</div>