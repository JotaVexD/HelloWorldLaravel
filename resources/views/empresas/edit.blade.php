<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar empresa</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2 style="text-align:center">Atualizar informações</h2><br  />
      <td><a href="{{url('empresa')}}" class="btn btn-info">Menu</a></td>

        <form method="post" action="{{action('EmpresaController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" value="{{$empresa->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$empresa->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="phone">Numero:</label>
              <input type="text" class="form-control" name="phone" value="{{$empresa->phone}}">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="address">Endereço:</label>
                <input type="text" class="form-control" name="address" value="{{$empresa->address}}">
              </div>
            </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" >Atualizar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>