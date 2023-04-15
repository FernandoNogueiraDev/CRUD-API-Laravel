<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<section class="d-flex flex-column flex-nowrap">
  <div class="mx-auto">
    <h2 class="m-1">Formulário</h2>
    <form action="{{url('/contato-alterar/'.$contatos->idContato)}}" method="post">
      {{@csrf_field()}}
      <div>
        <input type="text" name="txNome" placeholder="Nome" value="{{$contatos->nome}}" class="m-1"/>
      </div>
      <div>
        <input type="text" name="txEmail" placeholder="E-mail" value="{{$contatos->email}}" class="m-1"/>
      </div>
      <div>
        <input type="text" name="txFone" placeholder="Telefone" value="{{$contatos->fone}}" class="m-1"/>
      </div>
      <div>
        <input type="text" name="txAssunto" placeholder="Assunto" value="{{$contatos->assunto}}" class="m-1"/>
      </div>
      <div>
        <textarea name="txMensagem" placeholder="Mensagem" class="m-1">{{$contatos->mensagem}}</textarea>
      </div>
      <div>
      <div>
        <input type="submit" value="Salvar" class="m-1"/>
      </div>
</body>
</html>

