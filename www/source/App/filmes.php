<?php

namespace Source\App;

use Source\Models\Filmes as MdFilmes;

class Filmes extends Controller
{

	public function consultar(){
		$filmes = new MdFilmes();

		$response["filmes"] = $filmes->listar();

		return $this->jsonResponse($response, 200);
	}

	public function cadastrar(){

		if(!$this->validarLogin()){
			return $this->jsonResponse(["message" => "Você não tem autorização para acessar este recurso"], 401);
		}

		$request = json_decode(file_get_contents("php://input"), true) ?: [];

		if(!$request or !$request["nome"]){
			return $this->jsonResponse(["message" => "Nenhum dado de filme informado"], 400);
		}

		$request = filter_var_array($request, FILTER_SANITIZE_STRING);
		$filme = new MdFilmes();
		$filme->nome = $request["nome"];
		$filme->categoria_id = $request["categoria_id"];

		if($filme->save()){
			return $this->jsonResponse(["message" => "Filme cadastrado com sucesso"], 201);
		}

		return $this->jsonResponse(["message" => "Algum erro inesperado aconteceu"], 500);
	}

}