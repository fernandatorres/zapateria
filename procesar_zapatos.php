<?php
include './zapatos.php';
switch ($_REQUEST['req_zap'])
{
    case 'Enviar':
        $marca = $_POST['txt_marca'];
        $modelo = $_POST['txt_modelo'];
        $cantidad = $_POST['txt_cant'];
        $valor = $_POST['txt_valor'];
        $sucursal_idsucursal = $_POST['txt_idsucu'];
        
        $mensaje= Zapatos::insertarZapatos($marca, $modelo, $cantidad, $valor, $sucursal_idsucursal);
        header('Location:./');
        break;
    
    case 'Eliminar':
        $id = $_REQUEST['id'];
        
        header('Location:');
        break;
    
    case "Modificar":
if(isset($_POST['txt_id']))
{
    $id= (int)$_POST['txt_id'];
    
    if($id>0)
    {
        
         $marca = $_POST['txt_marca'];
        $modelo = $_POST['txt_modelo'];
        $cantidad = $_POST['txt_cantidad'];
        $valor = $_POST['txt_valo'];
        //Colegio::editarColegio($id, $nombre, $estado, $ciudad);
        header('Location:../gestiones/gestionarColegio.php');
    }
    else
        echo 'id menor a 0';
}
        
}
