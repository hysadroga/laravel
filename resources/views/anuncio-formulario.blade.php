<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ isset($anuncio) ? 'Editar Anúncio' : 'Cadastrar Anúncio' }}</title>
    <style>
        /* Mesma estilização roxa das outras views */
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
        input, select, textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.2rem;
            border: 1px solid #d1a3ff;
            border-radius: 8px;
            background-color: #fdf6ff;
            font-size: 1rem;
            color: #4b0082;
        }
        textarea {
            resize: vertical;
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
    <form action="{{ route('anuncio-store') }}" method="POST">
        @csrf
        @if(isset($anuncio))
            <input type="hidden" name="id" value="{{ $anuncio->id }}">
        @endif

        <label for="veiculo_id">Veículo</label>
        <select name="veiculo_id" required>
            @foreach($veiculos as $veiculo)
                <option value="{{ $veiculo->id }}" {{ (isset($anuncio) && $anuncio->veiculo_id == $veiculo->id) ? 'selected' : '' }}>
                    {{ $veiculo->marca }} {{ $veiculo->modelo }} - {{ $veiculo->placa }}
                </option>
            @endforeach
        </select>

        <label for="titulo">Título</label>
        <input type="text" name="titulo" value="{{ old('titulo', $anuncio->titulo ?? '') }}" required>

        <label for="descricao">Descrição</label>
        <textarea name="descricao">{{ old('descricao', $anuncio->descricao ?? '') }}</textarea>

        <label for="preco">Preço</label>
        <input type="number" name="preco" step="0.01" value="{{ old('preco', $anuncio->preco ?? '') }}" required>

        <button type="submit">{{ isset($anuncio) ? 'Atualizar Anúncio' : 'Cadastrar Anúncio' }}</button>
    </form>
</body>
</html>
