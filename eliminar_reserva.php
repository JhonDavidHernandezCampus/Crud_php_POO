<?php 
if (isset($_GET['id'])){
	include('conexion.php');
	$reserva = new basedatos();

	$id=intval($_GET['id']);
	$res = $reserva->eliminar_reserva($id);
	if($res){
		header('location: listar.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>