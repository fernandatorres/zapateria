<?php
include './ventas.php';
switch ($_REQUEST['req_venta'])
{
    case 'Enviar':
        $fecha =$_POST['txt_fecha'];
        $valorT = $_POST['txt_valorT'];
        $nombreC = $_POST['txt_nombreC'];
        $cedula = $_POST['txt_cedula'];
        $vendedorCe = $_POST['txt_vendedorCe'];
        $zapatos_idzapatos = $_POST['txt_idzapa'];
        
        $mensaje= Ventas::insertarVenta($fecha, $valorT, $nombreC, $cedula, $vendedorCe, $zapatos_idzapatos);
        header('Location:../general/ventasG');
        break;
    
    case 'Eliminar':
        $id = $_REQUEST['id'];
        $mensaje = Ventas::eliminar_factura($id);
        header('Location:../general/ventasG.php');
        break;
    
        case 'Vender':
        
            $fecha=$_POST['txt_fecha'];
            $zapatos_idzapatos = $_POST['txt_id'];
            $valorUni = $_POST['valorUni'];
            $cant = $_POST['txt_cant'];
            $valorT=$cant*$valorUni;
            $nomcomprador=$_POST['txt_cliente'];
            $cedulacomprador=$_POST['txt_cedCli'];
            $vendedor_cedula=$_POST['txt_cedVend'];
            $cantDis=$_POST['cantDisp'];
            $total=$cantDis-$cant;
            
            if ($total>10)
            {
              Ventas::insertarVenta($fecha,$valorT,$nomcomprador,$cedulacomprador,$vendedor_cedula,$zapatos_idzapatos); 
              header('Location:../general/ventasG.php');
            }
           else if($total<10)
                {
                    "<script>alert('No se puede Realizar venta');location.href='history.go(-2);';</script>";
                }
            
            
          

        
}

