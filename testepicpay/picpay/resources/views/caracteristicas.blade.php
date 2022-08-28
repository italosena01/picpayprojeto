<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <title>PRODUTOS</title>
</head>

<body>


    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col">

                <h1> Produtos </h1>

            </div>
            
        </div>
       
    </div>
    <div class="container d-flex justify-content-center">
<div class="row">
    <div class="col">
    <div class="row">
                <div class="col">
                <h4 style="color: red;">
                @if($errors->any())
                <ul>
                @foreach($errors->all() as $erro)
              <li>
                {{$erro}}
                </li>
                @endforeach
                </ul>

                @endif

                </h4>
                
            </div>
        </div>
    </div>
</div>

    </div>


    <!-- Cadastrar os produtos -->

    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div class="col-6">

                <form action="cadastrarnovo" method="post">
                    @csrf
                    <div class=" mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome<span style="color:red;"><b>*</b></span> </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Marca<span style="color:red;"><b>*</b></span></label>
                        <select class="form-select" aria-label="Default select example" name="marca_id">
                            <option selected></option>
                            @foreach($marcas as $val)
                            <option value="{{$val->id}}">{{$val->marca}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tensão</label>
                        <select class="form-select" aria-label="Default select example" name="tensao_id">
                            <option selected></option>
                            @foreach($tensao as $val)
                            <option value="{{$val->id}}" >{{$val->tensao}}</option>
                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>



                </form>

            </div>
      

    <!-- listar os produtos -->
    
    <div class=" col-12 pt-lg-5">
            <table id="tabeladata" class="display table table-bordered table-hover table-striped ">
                <thead>
                    <tr>
                        <th>Nome do produto </th>
                        <th>Descrição</th>
                        <th>Marca</th>
                        <th>Tensão</th>
                        <th>Alterar</th>
                        <th>Excluir</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $listar)

                    <tr>

                        <td>{{$listar->nome}}</td>
                        <td>{{$listar->descricao}}</td>
                        <td>
                        @if(!empty($listar->umamarca))  
                        {{$listar->umamarca->marca}}
                        @endif
                    </td>
                    <td>
                    @if(!empty($listar->umatensao))        
                        {{$listar->umatensao->tensao}}
                    @endif
                    </td>
                        <td><a href="/caracteristicas/editar/{{$listar->id}}" class="btn btn-warning btn-block">alterar</a></td>
                        <td><a href="/caracteristicas/{{$listar->id}}" class="btn btn-danger btn-block">deletar</a></td>

                    </tr>


                    @endforeach

                </tbody>
            </table>
        </div>


</body>



</html>