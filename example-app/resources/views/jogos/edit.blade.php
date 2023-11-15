@extends('layouts.app')

@section('title', 'Edição')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Editar Jogo</title>
    <style>
        body {
            background-color: #f8f9fa;
            margin-top: 50px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
        }

        form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Insira um novo jogo em sua biblioteca</h1>
        <hr>
        <form action="{{ route('jogos_update', ['id'=>$jogos->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">            
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite um nome...">
            </div>
            
            <div class="form-group">            
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite uma categoria para o jogo...">
            </div>
            
            <div class="form-group">            
                <label for="ano_criacao">Ano de Criação:</label>
                <input type="text" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="Digite o ano que foi criado o jogo...">
            </div>
            
            <div class="form-group">            
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite o valor do jogo...">
            </div>

            <button type="submit">Atualizar Jogo</button>
        </form>
    </div>
</body>
</html>

@endsection
