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
      <form action="{{url('/contato/inserir')}}" method="post">
        {{csrf_field()}}
        <div>
          <input type="text" name="txNome" placeholder="Nome" class="m-1"/>
        </div>
        <div>
          <input type="text" name="txEmail" placeholder="E-mail" class="m-1"/>
        </div>
        <div>
          <input type="text" name="txFone" placeholder="Telefone" class="m-1"/>
        </div>
        <div>
          <input type="text" name="txAssunto" placeholder="Assunto" class="m-1"/>
        </div>
        <div>
          <textarea name="txMensagem" placeholder="Mensagem" class="m-1"></textarea>
        </div>
        
        <div>
          <input type="submit" value="Salvar" class="m-1"/>
        </div>
      </form>
    </div>  
  </section>
<br>
  <table class="table">
  <thead>
    
    <tr class="bg-dark text-white">
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">assunto</th>
      <th scope="col">mensagem</th>
      <th scope="col">excluir</th>
      <th scope="col">editar</th>
    </tr>
  </thead>
  <tbody>

  
@foreach($contato as $c)
<tr>
      <th scope="row"> {{$c->idContato}}</th>
      <td>{{$c->nome}}</td>
      <td>{{$c->email}}</td>
      <td>{{$c->fone}}</td>
      <td>{{$c->assunto}}</td>
      <td>{{$c->mensagem}}</td>
      <td><a href="/contato/{{$c->idContato}}"> Excluir </a></td>
      <td><a href="/contato/{{$c->idContato}}/editar">Editar</a></td>
</tr>

  </tbody>
  @endforeach
</table>
</body>
</html>

