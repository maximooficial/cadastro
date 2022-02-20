@extends('admin.layouts.template')


                                </head>
@section('content')
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-2">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">{{ $edit->name }} </span><span class="text-black-50">{{ $edit->email }} </span><span></span><span class="text-black-50">{{auth()->user()->nascimento}} Anos</span><span>    <br />
           
                <div class="row mt-3">
                  <p>Status</p>
<span class="label label-warning"><a href="#">{{ $edit->status }}</a></span> </div>
<br>
                <img src="https://www.tempo.com/wimages/fotoec2e2234b418f43cd0b0c7d6b9c0d6e3.png">
        </div></div>
		
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Infomações Pessoais</h4>
                </div>

                @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
            <li>  {{$errors}} </li>
        @endforeach
  </ul>
@endif      



@csrf
@method('put')                    
<div class="row mt-3">

<div class="col-md-12"><label class="labels">Nome</label><input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $edit->name }} " readonly></div>
</div>

<div class="row mt-2">
<div class="col-md-6"><label class="labels">CPF</label><input type="text" name="cpf" class="form-control" placeholder="cpf" value="{{ $edit->cpf }}" readonly></div>
<div class="col-md-6"><label class="labels">Data de nascimento</label><input type="text" name="birthday" class="form-control" placeholder="Data Nascimento" value="{{ $edit->birthday }}" value="" readonly></div>
</div>
<div class="row mt-3">
<div class="col-md-12"><label class="labels">Nome do cônjuge</label><input type="text" name="conjuge" class="form-control" placeholder="Nome do cônjuge" value="{{ $edit->conjuge }}"readonly></div>
<div class="col-md-12"><label class="labels">CPF do cônjuge</label><input type="text" name="cpfconjuge" class="form-control" placeholder="CPF do cônjuge" value="{{ $edit->cpfconjuge }}"readonly></div>
<div class="col-md-12"><label class="labels">Data de Nascimento</label><input type="text" name="dateconjuge" class="form-control" placeholder="Data de Nascimento" value="{{ $edit->dateconjuge }}"readonly></div>
<div class="col-md-12"><label class="labels">Quantidade de Adultos</label><input type="text" name="adultos" class="form-control" placeholder="Quantidade de Adultos" value="{{ $edit->adultos }}"readonly></div>
<div class="col-md-12"><label class="labels">Quantidade de Crianças</label><input type="text" name="criancas" class="form-control" placeholder="Quantidade de Crianças" value="{{ $edit->criancas }}"readonly></div>
<div class="col-md-12"><label class="labels">Pessoas que Trabalham</label><input type="text" name="trabalham" class="form-control" placeholder="Pessoas que Trabalham" value="{{ $edit->trabalham }}"readonly></div>
<div class="col-md-12"><label class="labels">Quantidade de Moradores</label><input type="text" name="quantidade" class="form-control" placeholder="{{auth()->user()->adultos+auth()->user()->criancas}}" value="{{auth()->user()->adultos+auth()->user()->criancas}}" readonly></div>
<div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" class="form-control" placeholder="email" value="{{ $edit->email }}"readonly></div>
<div class="col-md-12"><label class="labels">Telefone</label><input type="text" name="telefone" class="form-control" placeholder="telefone" value="{{ $edit->telefone }}"readonly></div>
</div>
<div class="row mt-3">
<div class="col-md-6"><label class="labels">Endereço Atual</label><input type="text" name="endereco" class="form-control" placeholder="endereco" value="{{ $edit->endereco }}"readonly></div>
<div class="col-md-6"><label class="labels">N°</label><input type="text" name="numero" class="form-control" placeholder="numero" value="{{ $edit->numero }}"readonly></div>
</div>
<div class="row mt-3">
<div class="col-md-12"><label class="labels">Localização do Terreno</label><input type="text" name="localizacao" class="form-control" placeholder="localização do Terreno" value="{{ $edit->localizacao }}"readonly></div>
<div class="col-md-12"><label class="labels">Latitude & altidude</label><input type="text" name="geolocalizacao" class="form-control" placeholder="Geolocalização do Terreno" value="{{ $edit->geolocalizacao}}"readonly></div>
<div class="col-md-12"><label class="labels">Tamanho do Terreno</label><input type="text" name="terreno" class="form-control" placeholder="Tamanho Terreno" value="{{ $edit->terreno }}"readonly></div>
<div class="col-md-12"><label class="labels">Quadra</label><input type="text" name="quadra" class="form-control" placeholder="Quadra" value="{{ $edit->quadra }}"readonly></div>
<div class="col-md-12"><label class="labels">Senha</label><input type="text" name="password" class="form-control" placeholder="senha" value="{{ $edit->password }}" readonly></div>




</div>
        </div>
            </div>
<!-- 
    para adicionar ou remover no banco de dados altere models/profiles.php    
['cpf', 'name', 'email', 'password','birthday',  'telefone', 'conjuge',
    'cpfconjuge', 'dateconjuge','adultos','criancas','trabalham', 'endereco','numero','localizacao, 'terreno', 
    'quadra','valor1','valor2','valor3','valor4','valor5','total','status'];  -->


       
      
        <div class="col-md-4">
            
        <div class="p-3 py-5">
                <h5 class="d-flex justify-content-between align-items-center experience">
                <div class="mt-5 text-center"><a href="/admin/editprofile/{{ $edit->id }}" class="btn btn-primary profile-button" type="submit"> Editar Perfil</a>
               <button class="btn btn-primary profile-button" type="submit">Salvar</button></div></div>
               </form>  

        
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Valores Arrecadados</div>
  <div class="card-body">
    <h5 class="card-title">TOTAL R${{$edit->valor1+$edit->valor3+$edit->valor5 }},00</h5>
    <p class="card-text">Valor Total que Você contribuiu</p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">AGUA</div>
  <div class="card-body">
  <h5 class="card-title">R${{ $edit->valor1 }},00 </h5>
    <p class="card-text">Valor referente a agua recadado no dia {{ $edit->valor2 }}</p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">LUZ</div>
  <div class="card-body">
  <h5 class="card-title">R${{ $edit->valor3 }},00 </h5>
    <p class="card-text">Valor referente a agua recadado no dia {{ $edit->valor4 }}</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Advogado</div>
  <div class="card-body">
  <h5 class="card-title">R${{ $edit->valor5 }},00 </h5>
    <p class="card-text">Valor referente a agua recadado no dia {{ $edit->valor6 }}</p>
  </div>
</div>
    </div>
</div>
</div>
</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'></script>
                                
							
                            @endsection

