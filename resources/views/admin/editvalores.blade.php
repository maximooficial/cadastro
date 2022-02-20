@extends('admin.layouts.template')

                                </head>
@section('content')
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-2"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $edit->name }}</span><span class="text-black-50">{{ $edit->email }}</span><span></span><span class="text-black-50">{{auth()->user()->nascimento}} Anos</span><span>    <br />
           
            <div class="row mt-3">
                  <p>Status</p>
<span class="label label-warning"><a href="#">{{ $edit->status }}</a></span> </div>
<br>

            <img src="https://www.tempo.com/wimages/fotoec2e2234b418f43cd0b0c7d6b9c0d6e3.png">
        </div></div>
		
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">ADICIONAR/ALTERAR VALORES <i class="bi bi-cash-coin"></i>
</h4>
                </div>

                @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
            <li>  {{$errors}} </li>
        @endforeach
  </ul>
@endif

                <form action="{{route('adminupdate1', $edit->id) }}" method="post"> 

@csrf
@method('put')                    

<div class="row mt-2">
<div class="col-md-6"><label class="labels">LUZ</label><input type="text" name="valor1" class="form-control" placeholder="cpf" value="{{ $edit->valor1 }}" ></div>
<div class="col-md-6"><label class="labels">DATA</label><input type="text" name="valor2" class="form-control" placeholder="{{ $edit->valor2 }}" value="{{ date('Y-m-d H:i:s') }}" ></div>
</div>
<div class="row mt-2">
<div class="col-md-6"><label class="labels">AGUA</label><input type="text" name="valor3" class="form-control" placeholder="{{ $edit->valor3 }}" value="{{ $edit->valor3 }}" ></div>
<div class="col-md-6"><label class="labels">DATA</label><input type="text" name="valor4" class="form-control" placeholder="{{ $edit->valor4 }}" value="{{ date('Y-m-d H:i:s') }}"></div>
</div>
<div class="row mt-2">
<div class="col-md-6"><label class="labels">ADVOGADO</label><input type="text" name="valor5" class="form-control" placeholder="{{ $edit->valor5 }}" value="{{ $edit->valor5 }}" ></div>
<div class="col-md-6"><label class="labels">DATA</label><input type="text" name="valor6" class="form-control" placeholder="{{ $edit->valor6 }}" value="{{ date('Y-m-d H:i:s') }}" value="" ></div>
</div>
<div class="row mt-3">
<div class="col-md-12"><label class="labels">DESCRIÇÂO DOS VALORES</label><input type="text" name="valor7" class="form-control" placeholder="Nome do cônjuge" value="{{ $edit->valor7 }}"></div>
<div class="col-md-12"><label class="labels">COMPROVANTES</label><input type="text" name="valor8" class="form-control" placeholder="telefone" value="{{ $edit->valor8 }}"></div>
</div>

    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Salvar Valores</button></div>
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


                 </h5><br>

               <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Valores Arrecadados</div>
  <div class="card-body">
    <h5 class="card-title">TOTAL R${{ $edit->valor1+$edit->valor3+$edit->valor5 }},00</h5>
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
    <p class="card-text">Valor referente a LUZ recadado no dia {{ $edit->valor4 }}</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Advogado</div>
  <div class="card-body">
    <h5 class="card-title">R${{ $edit->valor5 }},00</h5>
    <p class="card-text">Valor referente ao Advogado recadado no dia{{ $edit->valor6 }}</p>
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

