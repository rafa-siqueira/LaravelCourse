<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Estilos do Botão */
    .custom-button {
      display: inline-block;
      padding: 12px 24px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      background-color: #3498db;
      color: #ffffff;
      border: 2px solid #3498db;
    }

    /* Estilos Responsivos para Dispositivos Pequenos */
    @media screen and (max-width: 600px) {
      .custom-button {
        width: 100%;
        margin-bottom: 10px;
      }
    }

    /* Efeito Hover */
    .custom-button:hover {
      background-color: #2980b9;
      border-color: #2980b9;
    }
  </style>
</head>
<body>
    <h1>Realizando a criação e testes de rotas</h1>    
     <!-- Botão -->
  <a href="{{ route('home-index') }}" class="custom-button">Clique Aqui</a>
</body>
</html>