<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cadastro de cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/mabekos.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/"> <img src="{{ asset('src/img/mabekos-logo-1.png') }}" alt="Bootstrap" width="72" height="72"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tutores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pets</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


   <div class="container my-5">
    <div class="container mb-5 text-center">
       <h3 class="mb-3">Mabekos - Hospedagem familiar para o seu pet.</h3>
    <p>Seja muito bem-vindo. Preencha o formulario abaixo... </p>
    </div>
   
    <div class="card-painel px-5"> 
      @if(session()->has('success'))
      <div class="alert alert-success">
        {{ session('success')}}
      </div>
      @endif

    <form  action="{{ route('clientes.store') }}" method="post">
      @csrf

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome do tutor</label>
        <input type="text" class="form-control" name="nomeTutor" id="formGroupExampleInput" placeholder="">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Celular para contato</label>
        <input type="text" class="form-control" name="celular" id="formGroupExampleInput" placeholder="">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Email para contato</label>
        <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="formGroupExampleInput" placeholder="">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">CEP</label>
        <input type="text" class="form-control" name="cep" id="formGroupExampleInput" placeholder="">
      </div>

      <h3 class="mt-5">Dados do seu Pet</h3>

      <div class="row">

        <div class="col-md-4">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome do pet</label>
            <input type="text" class="form-control" name="nomePet" id="formGroupExampleInput" placeholder="">
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Raça</label>
            <input type="text" class="form-control" name="raca" id="formGroupExampleInput" placeholder="">
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Idade</label>
            <input type="text" class="form-control" name="idade" id="formGroupExampleInput" placeholder="">
          </div>
        </div>

      </div>


      <div class="row">
        <div class="col-md-2">
   
          <div class="mb-3">
            <label for="formGroupExampleInput1" class="form-label">Sexo</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexo" value="macho" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1" >Macho</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexo" value="femea" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2"  >Fêmea</label>
            </div>
          </div>
        </div>

        <div class="col-md-2">
   
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Castrado</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="sim" name="castrado" id="sim">
              <label class="form-check-label" for="sim" >Sim</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="nao" name="castrado" id="nao" checked>
              <label class="form-check-label" for="nao" >Não</label>
            </div>
          </div>
        </div>
        
        <div class="col-md-8">
          <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Data de entrada</label>
          <input type="date" class="form-control" name="dataEntrada" id="formGroupExampleInput" placeholder="">
          </div>
          <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Data de saída</label>
          <input type="date" class="form-control" name="dataSaida" id="formGroupExampleInput" placeholder="">
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-6">
   
          

        </div>

        <div class="col-md-6">
        
        
          
        </div>
      </div>



 </div>
 <div class="col-12">
    <button class="btn btn-danger" type="submit">Enviar formulário</button>
  </div>






    </form>
    

  
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

