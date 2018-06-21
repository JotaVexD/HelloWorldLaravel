<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Empresas</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
            <h2 style="text-align:center">Empresas existentes</h2><br  />
            <td><a href="{{action('EmpresaController@create')}}" class="btn btn-info">Registrar Empresas</a></td>
            <td style="text-align:right"><a href="{{action('FuncionarioController@create')}}" class="btn btn-info">Registrar Funcionario</a></td>


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

        <th colspan="2" style="text-align:center">Ação</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($empresas as $empresa)
      @php
        @endphp
      <tr>
        <td>{{$empresa['id']}}</td>
        <td>{{$empresa['name']}}</td>
        <td>{{$empresa['email']}}</td>
        <td>{{$empresa['phone']}}</td>
        <td>{{$empresa['address']}}</td>
        
        <td><a href="{{action('EmpresaController@edit', $empresa['id'])}}" class="btn btn-warning">Editar</a></td>
        <td><a href="{{action('FuncionarioController@index', $empresa['id'])}}" class="btn btn-success">Funcionarios</a></td>
        <td>
          <form action="{{action('EmpresaController@destroy', $empresa['id'])}}" method="post">
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