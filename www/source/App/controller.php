<?php

namespace Source\App;

class Controller
{

	protected function validarLogin(){
		$valid_password = array("printi" => "senha_segura");
		$valid_user = array_keys($valid_password);

		$user = $_SERVER['PHP_AUTH_USER'] ?: '';
		$pass = $_SERVER['PHP_AUTH_PW'] ?: '';

		$user_pass = (in_array($user, $valid_user)) && ($pass == $valid_password[$user]);

		return $user_pass;
	}

	protected function jsonResponse($message, $code){
		header('Content-Type: application/json; charset=UTF-8');
		http_response_code($code);
		echo json_encode($message, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		return;
	}

}