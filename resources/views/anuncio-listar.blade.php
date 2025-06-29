<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Anúncios</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3e8ff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 2rem;
        }
        .container {
            background-color: #fff0ff;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(128, 0, 128, 0.15);
            width: 100%;
            max-width: 1000px;
            border: 3px solid #e0b3ff;
        }
        h2 {
            text-align: center;
            color: #6a0dad;
            margin-bottom: 1.5rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            padding: 1rem;
            border: 1px solid #e0b3ff;
            text-align: left;
            color: #4b0082;
        }
        th {
            background-color: #d8b4fe;
        }
        a {
            margin-right: 0.5rem;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
            color: white;
            background-color: #a64dff;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #8000ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Anúncios</h2>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Veículo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anuncios as $anuncio)
                    <tr>
                        <td>{{ $anuncio->titulo }}</td>
                        <td>{{ $anuncio->descricao }}</td>
                        <td>R$ {{ number_format($anuncio->preco, 2, ',', '.') }}</td>
                        <td>{{ $anuncio->veiculo->marca }} {{ $anuncio->veiculo->modelo }} ({{ $anuncio->veiculo->placa }})</td>
                        <td>
                            <a href="{{ route('anuncio-editar', $anuncio->id) }}">Editar</a>
                            <a href="{{ route('anuncio-remover', $anuncio->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
