<?php

class Zapatos
{
    var $marca;
    var $modelo;
    var $cantidad;
    var $valor;
    var $sucursal_idsucursal;
    
    function Zapatos($marca, $modelo, $cantidad, $valo, $sucursal_idsucursal)
    {
        $this-> marca = $marca;
        $this-> modelo = $modelo;
        $this-> cantidad = $cantidad;
        $this-> sucursal_idsucursal = $sucursal_idsucursal;        
    }
    
    static function insertarZapatos($marca, $modelo, $cantidad, $valo, $sucursal_idsucursal)
    {
        include './conex.php';
        $mensaje = "Resultados";
        
        $sql = @mysql_query("insert into zapatos(marca,modelo,cantidad,valor,sucursal_idsucursal) values ('$marca','$modelo',$cantidad,$valor,$sucursal_idsucursal);");
                
        if (!$sql) 
            {
            $mensaje.="Error Insertando Colegio en la base de datos: " . mysql_error();
            } 
        else 
            {
            $mensaje.="El Colegio con nombre: " . $pNombre . " fue agregado al sistema";
            }
        return $mensaje;
    }
    
    public function lista_zapatos()
    {
        include './conexi.php';
        $mysql = new conexioni();
        $mysqli=$mysql->conctar();
        $consulta= "SELECT idzapatos, marca,modelo,cantidad,valor,sucursal_idsucursal, sucursal.nombre as 'sucursal' from zapatos, sucursal where sucursal_idsucursal = sucursal.idsucursal;";
        $result   = $mysqli->query($consulta);
         echo "<table border = '3' id=res > \n";
         echo "<tr align =center> <th colspan=5>Lista de Zapatos global</th> </tr>";
         echo "<tr align=center id=tit><td >&nbsp;ID_Zapatos&nbsp;</td><td>&nbsp;MARCA&nbsp;</td><td>&nbsp;MODELO&nbsp;</td><td>&nbsp;VALOR&nbsp;</td><td>&nbsp;SUCURSAL&nbsp;</td><td>&nbsp;OPCIONES&nbsp;</td></tr> \n";
         while ($campo=mysqli_fetch_object($result)) 
                {
             echo "<tr id=resul><td>$campo->idzapatos</td><td>$campo->marca</td><td>$campo->modelo</td><td>$campo->cantidad</td><td>$campo->valor</td><td>$campo->sucursal</td> </tr> \n";
                }
                 echo "</table> \n";
                 $mysqli->close();
         
    }
    
    
     public function lista_zapatos_sucursal($sucursal)
    {
        include './conexi.php';
        $mysql = new conexioni();
        $mysqli=$mysql->conctar();
        $consulta= "select * from zapatos where zapatos.sucursal_idsucursal = $sucursal";
        $result   = $mysqli->query($consulta);
         echo "<table border = '3' id=res > \n";
         echo "<tr align =center> <th colspan=5>Lista de Zapatos global</th> </tr>";
         echo "<tr align=center id=tit><td >&nbsp;ID_Zapatos&nbsp;</td><td>&nbsp;MARCA&nbsp;</td><td>&nbsp;MODELO&nbsp;</td><td>&nbsp;VALOR&nbsp;</td><td>&nbsp;OPCIONES&nbsp;</td></tr> \n";
         while ($campo=mysqli_fetch_object($result)) 
                {
             echo "<tr id=resul><td>$campo->idzapatos</td><td>$campo->marca</td><td>$campo->modelo</td><td>$campo->cantidad</td><td>$campo->valor</td></tr> \n";
                }
                 echo "</table> \n";
                 $mysqli->close();
         
    }
    
}