<?php

namespace Source\App;

use Source\Models\Categorias as MdCategorias;

class Categorias extends Controller
{

	public function consultar(){
		$categorias = new MdCategorias();

		$response["categorias"] = $categorias->listar();

		return $this->jsonResponse($response, 200);
	}

}