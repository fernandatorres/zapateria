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
        <?php include ("../pasto/headerP.php"); ?>
        
        <div>
            
             <div id="menu">
            <nav>
                <ul>
                    <li ><a href="index.php"><img src="img/casa.png" width="25" height="25"></a></li>
                    <li> <a href="#">Zapatos</a></li>
                    <li> <a href="#">Vendendor</a></li>
                    <li> <a href="#">Venta</a></li>                    
                </ul>

            </nav>
        </div> 
        
        
            <div id="content" class="center_content">
                <div class="tabla">
          <?php include '../conex.php';
            include '../modelo/zapatos.php';
            Zapatos::lista_zapatos_sucursal(1)?>
                    </div>
        </div>
        
       
            </div>
    </body>
</html>

