<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/css.css">
        <link type="text/css" rel="stylesheet" href="../css/cssGen.css">
        <title></title>
    </head>
    <body>
        <?php include ("./headerC.php"); ?>

        <div>
            
             <div id="menu">
            <nav>
                <ul>
                    <li ><a href="../index.php"><img src="../img/casa.png" width="25" height="25"></a></li>
                    <li> <a href="vistaCali.php">Zapatos</a></li>
                    <li> <a href="vendedorCali.php">Vendedor</a></li>
                    <li> <a href="ventasC.php">Venta</a></li>
                    <li> <a href="venderCali.php">Vender</a></li>
                </ul>

            </nav>
        </div> 
        
        
            <div id="content" class="center_content">
                <div class="datagrid">
          <?php include '../conex.php';
            include '../modelo/ventas.php';

            Ventas::listar_ventas_sucursal(2) ?>
                    </div>
        </div>
        
       
            </div>
    </body>
</html>

