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
            color: #4b0082;
        }

    td:last-child {
            white-space: nowrap;
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
<body>
    <div class="container">
        <h2>Lista de Veículos</h2>

    <table>
        <thead>
            <tr>
            <th>Código</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($veiculos as $veiculo)
            <tr>
                <td>{{ $veiculo->id }}</td>
                <td>{{ $veiculo->marca }}</td>
                <td>{{ $veiculo->modelo }}</td>
                <td>{{ $veiculo->ano }}</td>
                <td>{{ $veiculo->placa }}</td>
                <td>{{ $veiculo->cor }}</td>
                <td>
                    <a href="/veiculo/remover/{{ $veiculo->id }}">Excluir</a>
                    <a href="{{ route('veiculo-editar', $veiculo->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </div>
</body>

