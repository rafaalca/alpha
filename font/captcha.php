<?php 
//vamos a recibir lo que nos envia el captcha por método POST
$response_recaptcha = $_POST["g-recaptcha-response"];
if(isset($response_recaptcha)&& $response_recaptcha){
	// var_dump($_POST);
	$secret = "6Le1_QwUAAAAAGOcNUudABOrJmNA4gc8vPd7lgB6";
	$ip = $_SERVER['REMOTE_ADDR'];
	$validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
	var_dump($validation_server);
	$array = json_decode($validation_server,true);
	if ($array['success']) {
		echo "you are Human";
	}else{
		echo "you are a fuking chango ";
	}
}else{

}

?>