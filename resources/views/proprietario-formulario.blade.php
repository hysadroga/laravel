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

    input[type="text"],
    input[type="email"],
    input[type="date"] {
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

  <form action="{{ route('proprietario-store') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $proprietario->id ?? old('id') }}">

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ $proprietario->nome ?? old('nome') }}">

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf" value="{{ $proprietario->cpf ?? old('cpf') }}">

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" value="{{ $proprietario->email ?? old('email') }}">

    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone" value="{{ $proprietario->telefone ?? old('telefone') }}">

    <button type="submit">Cadastrar</button>
  </form>

</body>
</html>
