<?php
        include '../conexi.php';
        $id=$_GET['id'];
        $mysql = new conexion();
        $mysqli=$mysql->conctar();
        $consulta= "SELECT * FROM zapatos where idzapatos = $id";
        $result=$mysqli->query($consulta);
        $campo=mysqli_fetch_object($result)
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/css.css">
        <link type="text/css" rel="stylesheet" href="../css/cssGen.css">
        <title></title>
    </head>
    <body>
        <?php include ("../pasto/headerP.php"); ?>
        
        <div>
            
             <div id="menu">
            <nav>
                <ul>
                    <li ><a href="index.php"><img src="../img/casa.png" width="25" height="25"></a></li>
                    <li> <a href="vistaPasto.php">Zapatos</a></li>
                    <li> <a href="vendedorP.php">Vendendor</a></li>
                    <li> <a href="ventasP.php">Venta</a></li>                    
                </ul>

            </nav>
        </div> 
        
        
            <div id="content" class="center_content">
                <div class="datagrid">
                    <form action="../modelo/procesar_zapatos.php" method="post">
            <table border="1">
                <thead>
                    <tr align ="center">
                        <th colspan="2">Modificar Zapato</th> <!-- titulos de el formulario -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Id Zapatos:</td>
                        <td><input type="text" name="txt_id" value="<?php echo $campo->idzapatos ;?>" readonly="" required=""/></td>
                    </tr>
                    <tr>
                        <td>Marca:</td>
                        <td><input type="text" name="txt_marca" value="<?php echo $campo->marca ;?>" required=""/></td>
                    </tr>
                    <tr>
                        <td>Modelo:</td>
                        <td><input type="text" name="txt_modelo" value="<?php echo $campo->modelo ;?>" required=""/></td>
                    </tr>
                    <tr>
                        <td>Cantidad:</td>
                        <td><input type="number" name="txt_cantidad" value="<?php echo $campo->cantidad ;?>" required=""/></td>
                    </tr>
                    <tr>
                        <td>Valor:</td>
                        <td><input type="number" name="txt_valor" value="<?php echo $campo->valor ;?>" required=""/></td>
                    </tr>
                     <input hidden="" type="hidden" name="txt_idsucu" value="1" />
                    
                    
                </tbody>
            </table>
            
            <table>
                <tr>
                    <td>
            <input type="submit" value="Modificar" class="boton"/>
            <input type="hidden" value="Modificar" name="req_zap" >
            </td>
            </tr>
            </table>

          
                    </div>
        </div>
        
       
            </div>
    </body>
</html>

