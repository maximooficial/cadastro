@extends('layouts.template')


                                </head>
@section('content')
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-2"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span></span><span class="text-black-50">{{auth()->user()->birthday}} Anos</span><span>    <br />
            <p>Status</p>
<span class="label label-warning"><a href="#">{{auth()->user()->status}}</a></span>
<br><br>
         
            <img src="https://www.tempo.com/wimages/fotoec2e2234b418f43cd0b0c7d6b9c0d6e3.png">


        </div></div>
		
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Infomações Pessoais</h4>
                </div>
                <div class="row mt-2">

                    <div class="col-md-6"><label class="labels">CPF</label><input type="text" class="form-control" placeholder="{{auth()->user()->cpf}}" value="" readonly></div>
                    <div class="col-md-6"><label class="labels">Data de nascimento</label><input type="text" class="form-control" placeholder="{{auth()->user()->birthday}}" value="" readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nome do cônjuge</label><input type="text" class="form-control" placeholder="{{auth()->user()->conjuge}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">CPF do cônjuge</label><input type="text" class="form-control" placeholder="{{auth()->user()->cpfconjuge}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Data de Nascimento</label><input type="text" class="form-control" placeholder="{{auth()->user()->dateconjuge}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Quantidade de Adultos</label><input type="text" class="form-control" placeholder="{{auth()->user()->adultos}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Quantidade de Crianças</label><input type="text" class="form-control" placeholder="{{auth()->user()->criancas}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Quantidade de Trabalham</label><input type="text" class="form-control" placeholder="{{auth()->user()->trabalham}}" value="" readonly></div>
				            <div class="col-md-12"><label class="labels">Quantidade de Moradores</label><input type="text" class="form-control" placeholder="{{auth()->user()->adultos+auth()->user()->criancas}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="{{auth()->user()->email}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Telefone</label><input type="text" class="form-control" placeholder="{{auth()->user()->telefone}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Localização do Terreno</label><input type="text" class="form-control" placeholder="{{auth()->user()->terreno}}" value="" readonly></div>
                    <div class="col-md-12"><label class="labels">Quadra</label><input type="text" class="form-control" placeholder="{{auth()->user()->quadra}}" value="" readonly></div>
														
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Endereço Atual</label><input type="text" class="form-control" placeholder="{{auth()->user()->endereco}}" value="" readonly value=""></div>
                    <div class="col-md-6"><label class="labels">N°</label><input type="text" class="form-control" value="" placeholder="{{auth()->user()->numero}}" value="" readonly></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <h5 class="d-flex justify-content-between align-items-center experience"><span>Informações sobre contribuição </span></h5><br>
               <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Valores Arrecadados</div>
  <div class="card-body">
    <h5 class="card-title">TOTAL R${{auth()->user()->valor1+auth()->user()->valor3+auth()->user()->valor5}},00</h5>
    <p class="card-text">Valor Total que Você contribuiu</p>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">AGUA</div>
  <div class="card-body">
    <h5 class="card-title">R${{auth()->user()->valor1}},00 </h5>
    <p class="card-text">Valor referente a agua recadado no dia {{auth()->user()->valor2}}</p>
  </div>
</div>
<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">LUZ</div>
  <div class="card-body">
    <h5 class="card-title">R${{auth()->user()->valor3}},00 </h5>
    <p class="card-text">Valor referente a LUZ recadado no dia {{auth()->user()->valor4}},00</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Advogado</div>
  <div class="card-body">
    <h5 class="card-title">R${{auth()->user()->valor5}},00</h5>
    <p class="card-text">Valor referente ao Advogado recadado no dia {{auth()->user()->valor6}}</p>
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
                                </body>
                            </html>
							
                            @endsection

