<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9f0ff;
        padding: 2rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1.5rem;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(128, 0, 128, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    thead {
        background-color: #a64dff;
        color: white;
    }

    th, td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    tr:hover {
        background-color: #f3e8ff;
    }

    a {
        margin-right: 0.5rem;
        text-decoration: none;
        color: #8000ff;
        font-weight: bold;
    }

    a:hover {
        color: #a64dff;
        text-decoration: underline;
    }

    th:last-child, td:last-child {
        text-align: center;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Data Publicação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($anuncio as $anuncio)
            <tr>
                <td>{{ $anuncio->id }}</td>
                <td>{{ $anuncio->titulo }}</td>
                <td>{{ $anuncio->descricao }}</td>
                <td>{{ $anuncio->preco }}</td>
                <td>{{ $anuncio->created_at->format('d/m/Y') ?? '-' }}</td>
                <td>
                    <a href="/anuncio/remover/{{ $anuncio->id }}">Excluir</a>
                    <a href="{{ route('anuncio-edit', $anuncio->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
