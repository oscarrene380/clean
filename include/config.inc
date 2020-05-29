<?php
$EndPointUsuario ="https://servicetime.azurewebsites.net/Controllers/UsuarioController.php";
$EndPointLaboratorios ="https://servicetime.azurewebsites.net/Controllers/LaboratorioController.php";
$EndPointCuenta = "https://servicetime.azurewebsites.net/Controllers/CuentaController.php";
$EndPointEdificio = "https://servicetime.azurewebsites.net/Controllers/EdificioController.php";
$EndPointAsignacion = "https://servicetime.azurewebsites.net/Controllers/AsignacionesController.php";
function peticion_get($url, $params = null)
{
	try
	{
		$url .= $params != null ? '?'.http_build_query($params): '';
		$conexion = curl_init();
		curl_setopt($conexion, CURLOPT_URL,$url);
		curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
		curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
		curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($conexion,CURLOPT_FAILONERROR,true);
		$respuesta = curl_exec($conexion);
		if(curl_errno($conexion))
		{
			$respuesta = json_encode(array('error' => 'Error de conexion -> Get '.curl_error($conexion)));
		}
		else if(empty(json_decode($respuesta)))
		{
			$respuesta = json_encode(array('error' => 'Sin datos'));
		}
		curl_close($conexion);
	 	return json_decode($respuesta);
	}
	catch(Exception $e)
	{
		return  array('error' => "Error Processing Request msgs: ".$e->getMessage() );
	}
}

function peticion_post($url, $params)
{
	try
	{
		$conexion = curl_init();
		curl_setopt($conexion, CURLOPT_URL,$url);
		curl_setopt($conexion, CURLOPT_POSTFIELDS,http_build_query($params));	
		curl_setopt($conexion, CURLOPT_POST, true);
		curl_setopt($conexion, CURLOPT_HTTPGET, FALSE);
		curl_setopt($conexion, CURLOPT_HEADER, FALSE);
		curl_setopt($conexion,CURLOPT_FAILONERROR,true);
		$respuesta=curl_exec($conexion);
		if(curl_errno($conexion))
		{
			$respuesta = json_encode(array('error' => 'Error de conexion -> Post '.curl_error($conexion)));
		}
		else if(is_null($respuesta))
		{
			$respuesta = json_encode(array('error' => 'Sin respuesta de vuelta'));
		}
		curl_close($conexion);
		return json_decode($respuesta);
	}
	catch(Exception $e)
	{
		return  array('error' => "Error Processing Request msgs: ".$e->getMessage() );
	}
}
?>