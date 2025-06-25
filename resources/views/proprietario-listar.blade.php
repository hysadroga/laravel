<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lista de Proprietários</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    /* Cores em tons de roxo */
    .table-purple thead {
      background-color: #7b2ff7; /* roxo vibrante */
      color: #fff;
    }
    .table-purple tbody tr:hover {
      background-color: #d8b4fe; /* lilás claro */
    }
    .btn-purple-outline {
      color: #7b2ff7;
      border-color: #7b2ff7;
      transition: background-color 0.3s, color 0.3s;
    }
    .btn-purple-outline:hover {
      background-color: #7b2ff7;
      color: #fff;
      border-color: #7b2ff7;
    }
    h2.text-purple {
      color: #7b2ff7;
      font-weight: 700;
      margin-bottom: 2rem;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center text-purple">Lista de Proprietários</h2>
    <table class="table table-hover table-bordered align-middle shadow-sm table-purple">
      <thead>
        <tr>
           <th>Código</th>
           <th>Nome</th>
           <th>CPF</th>
           <th>Telefone</th>
           <th>Email</th>
           <th class="text-center">Ações</th>
        </tr>
      </thead>
      <tr>
            <td>{{$proprietario->id}}</td>
            <td>{{$proprietario->nome}}</td>
            <td>{{$proprietario->cpf}}</td>
            <td>{{$proprietario->telefone}}</td>
            <td>{{$proprietario->email}}</td>
        
                <td>
					<a href="/proprietario/remover/{{ $proprietario->id }}">Excluir</a>
                    <a href="{{ route('proprietario-edit', $proprietario->id) }}">Atualizar</a>
                </td>
            </tr>
    </table>
  </div>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
