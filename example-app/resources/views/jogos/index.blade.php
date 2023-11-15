@extends('layouts.app')

@section('title', 'Listagem')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Listagem de Jogos</title>
</head>
<body>

<div class="container mt-5">
    <h1>Listagem de Jogos</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano de Criação</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jogos as $jogo)
            <tr>
                <th>{{ $jogo->id }}</th>
                <td>{{ $jogo->nome }}</td>
                <td>{{ $jogo->categoria }}</td>
                <td>{{ $jogo->ano_criacao }}</td>
                <td>{{ $jogo->valor }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('jogos_create') }}" class="btn btn-success mt-3">Novo Jogo</a>
</div>


</body>
</html>


@endsection
