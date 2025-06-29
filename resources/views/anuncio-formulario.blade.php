
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f3e8ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    form {
      background-color: #fff0ff;
      padding: 2rem;
      border-radius: 16px;
      box-shadow: 0 4px 15px rgba(128, 0, 128, 0.2);
      width: 100%;
      max-width: 400px;
      border: 1px solid #e0b3ff;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
      color: #6a0dad;
    }

    input[type="text"] {
      width: 100%;
      padding: 0.7rem;
      margin-bottom: 1.2rem;
      border: 1px solid #d1a3ff;
      border-radius: 8px;
      background-color: #fdf6ff;
      font-size: 1rem;
      color: #4b0082;
    }

    input[type="text"]:focus {
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

<body>

  <form action="{{ route('anuncio-store') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $anuncio->id ?? old('id') }}">
    
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="{{ $anuncio->titulo ?? old('titulo') }}">

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" id="descricao" value="{{ $anuncio->descricao ?? old('descricao') }}">

    <label for="preco">Preço</label>
    <input type="text" name="preco" id="preco" value="{{ $anuncio->preco ?? old('preco') }}">

    <button type="submit">Cadastrar</button>
  </form>

</body>
</html>
