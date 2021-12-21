# Teste Print

## Consultar Categorias
```
curl --request GET --url http://localhost:8888/categorias/consultar
```

## Consultar Filmes
```
curl --request GET --url http://localhost:8888/filmes/consultar
```

## Cadastrar Curso
###### Necessário autenticar por Basic Auth: user `printi` e pass `senha_segura`
```
curl --request POST \
  --url http://localhost:8888/filmes/cadastrar \
  --header 'Authorization: Basic cHJpbnRpOnNlbmhhX3NlZ3VyYQ==' \
  --header 'Content-Type: application/json' \
  --data '{"nome": "teste","categoria_id": 1}'
```