<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Veículo</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3e8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 2rem;
        }

        form {
            background-color: #fff0ff;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(128, 0, 128, 0.15);
            width: 100%;
            max-width: 600px;
            border: 3px solid #e0b3ff;
        }

        label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: bold;
            color: #6a0dad;
        }

        input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.2rem;
            border: 1px solid #d1a3ff;
            border-radius: 8px;
            background-color: #fdf6ff;
            font-size: 1rem;
            color: #4b0082;
        }

        input:focus {
            outline: none;
            border-color: #b266ff;
            box-shadow: 0 0 0 2px #e0b3ffaa;
        }

        button[type="submit"] {
            width: 100%;
            padding: 0.8rem;
            background-color: #a64dff;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #8000ff;
        }
    </style>
</head>
<body>

    <form action="{{ route('veiculo-store') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $veiculo->id ?? '' }}">

    <label for="marca">Marca</label>
    <input type="text" name="marca" id="marca" value="{{ old('marca', $veiculo->marca ?? '') }}" required>

    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" id="modelo" value="{{ old('modelo', $veiculo->modelo ?? '') }}" required>

    <label for="ano">Ano</label>
    <input type="text" name="ano" id="ano" value="{{ old('ano', $veiculo->ano ?? '') }}" required>

    <label for="placa">Placa</label>
    <input type="text" name="placa" id="placa" value="{{ old('placa', $veiculo->placa ?? '') }}" required>

    <label for="cor">Cor</label>
    <input type="text" name="cor" id="cor" value="{{ old('cor', $veiculo->cor ?? '') }}" required>

    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
