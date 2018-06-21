<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Criar Funcionarios</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2 style="text-align:center">Registro de Funcionarios</h2><br/>
      <td><a href="{{url('empresa')}}" class="btn btn-info">Menu</a></td>

      <form method="post" action="{{url('funcionario')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nome:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Numero de telefone:</label>
              <input type="text" class="form-control" name="phone">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="Address">Endereço:</label>
                <input type="text" class="form-control" name="address">
              </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Salario">Salario:</label>
                        <input type="text" class="form-control" name="salario">
                    </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                      <label for="Salario">Empresa:</label>
                      {!! Form::select('empresa_id', $empresa, null, ['value' => '$empresa_id','class' => 'form-control','style' => 'height:auto']) !!}
                  </div>
          </div>
                
                
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Criar</button>
          </div>
        </div>
      </form>
    </div>
    @if (session('Falhou'))
        <div class="alert alert-danger" style="text-align:center">
            {{ session('Falhou') }}
        </div>
    @endif
    
  </body>
</html>