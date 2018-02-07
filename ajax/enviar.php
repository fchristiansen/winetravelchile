<?php
date_default_timezone_set('America/Santiago');

require_once('_config.php');
require_once ('lib/MysqliDb.php');

if ($_SERVER['REQUEST_METHOD']== "POST") {
$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

$destino 	= $_POST["destino"];
$pasajeros 	= $_POST["pasajeros"];
$nombre 	= $_POST["nombre"];
$apellido 	= $_POST["apellido"];
$email 	= $_POST["email"]; 
$fecha1 = $_POST["fecha1"]; 
$fecha2 = $_POST["fecha2"]; 
$phone = $_POST["phone"];

if(isset($_POST["comment"])){
	$mensaje = $_POST["comment"];
}else{
	$mensaje = "";
}

$hoy = date("Y-m-d H:i:s");


// Sanitize data
function sanatize_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function validEmail($email){
// Check the formatting is correct
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
	return FALSE;
	}else{
		return TRUE;
	}
}

$error_count = 0;

//validar info
	if (empty($destino)) {
		$error_count++;
	}

	if (empty($pasajeros)) {
		$error_count++;
	}

	if (empty($nombre)) {
		$error_count++;
	}

	if (empty($apellido)) {
		$error_count++;
	}

	if (empty($email)) {
		$error_count++;
	}else{
		if(!validEmail($email)){
			$error_count++;
		}
	}

	if (empty($phone)) {
		$error_count++;
	}

	if (empty($fecha1)) {
		$error_count++;
	}

	if (empty($fecha2)) {
		$error_count++;
	}

	//validar fecha1 sea menor a fecha2 


	//guardar en bd
	if($error_count == 0){
		$data = Array (
				'destino' => sanatize_input($destino), 
				'pasajeros' => sanatize_input($pasajeros), 
				'nombre' => sanatize_input($nombre), 
				'apellido' => sanatize_input($apellido), 
				'email' => sanatize_input($email), 
				'phone' => sanatize_input($phone), 
				'fecha_ini' => sanatize_input($fecha1), 
				'fecha_ter' => sanatize_input($fecha2), 
				'mensaje' => sanatize_input($mensaje), 
				'fecha_contacto' => sanatize_input($hoy)
				);
		$id = $db->insert ('contacto', $data);
		if($id){
			echo $id;
		}else{
			echo '0';
		}

	//enviar email
		$to = "carorojas27@gmail.com";
		$subject = "Contact Form - Winetravel.com";
		$txt = "Destination: ".$destino."\n";
		$txt.= "#Of Passengers: ".$pasajeros."\n";
		$txt.= "First Name: ".$nombre."\n";
		$txt.= "Last Name: ".$apellido."\n";
		$txt.= "Email: ".$email."\n";
		$txt.= "Phone: ".$phone."\n";
		$txt.= "Dates of Travel From: ".$fecha1."\n";
		$txt.= "Dates of Travel To: ".$fecha2."\n\n";
		$txt.= " Comments:\n".$mensaje;

		$headers = "From: ".$email;

		mail($to,$subject,$txt,$headers);


	}else{
		echo '0';
	}


}
//echo "nain";
?>