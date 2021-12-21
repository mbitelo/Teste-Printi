<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Filmes extends DataLayer
{

	public function __construct()
	{
		parent::__construct("filmes", ["nome"], "id", false);
	}

	public function listar(){
		$filmes = $this->find()->fetch(true);

		foreach ($filmes as $key => $filme) {
			 $dados["id"] = $filme->id;
			 $dados["nome"] = $filme->nome;
			 $dados["categoria_nome"] = $filme->categoria()->nome;
			 $lista[] = $dados;
		}

		return $lista;
	}

	private function categoria(){
		$categorias = new Categorias();
		$categoria = $categorias->findById($this->categoria_id);

		return $categoria;
	}

}