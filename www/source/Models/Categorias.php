<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Categorias extends DataLayer
{

	public function __construct()
	{
		parent::__construct("categorias", ["nome"], "id", false);
	}

	public function listar(){
		$categorias = $this->find()->fetch(true);

		foreach ($categorias as $key => $categoria) {
			 $dados["id"] = $categoria->id;
			 $dados["nome"] = $categoria->nome;
			 $lista[] = $dados;
		}

		return $lista;
	}

}