@foreach ($proprietario as $proprietario)
  <div>
    <h2>Lista de Proprietários</h2>
    <table>
      <thead>
        <tr>
           <th>Código</th>
           <th>Nome</th>
           <th>CPF</th>
           <th>Telefone</th>
           <th>Email</th>
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
                    <a href="{{ route('proprietario-editar', $proprietario->id) }}">Atualizar</a>
                </td>
            </tr>
           @endforeach
    </table>
  </div>