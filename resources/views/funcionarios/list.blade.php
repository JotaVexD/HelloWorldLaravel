<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista Funcionarios</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
            <h2 style="text-align:center">Lista Funcionarios</h2><br/>
            <td><a href="{{url('empresa')}}" class="btn btn-info">Menu</a></td>


    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Salario</th>

        <th colspan="2" style="text-align:center">Ação</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($funcionarios as $funcionario)
      @php
        @endphp
      <tr>
        <td>{!! $funcionario->id !!}</td>
        <td>{!! $funcionario->name !!}</td>
        <td>{!! $funcionario->email !!}</td>
        <td>{!! $funcionario->phone !!}</td>
        <td>{!! $funcionario->address !!}</td>
        <td>{!! $funcionario->salario !!}</td>

        
        <td><a href="{{action('FuncionarioController@edit', $funcionario['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('FuncionarioController@destroy', $funcionario['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>