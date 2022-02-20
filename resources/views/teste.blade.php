<h1>Editar Informações de Usuario</h1>   
@if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
            <li>  {{$errors}} </li>
        @endforeach
  </ul>
@endif

<form action="{{route('update', $edit->id) }}" method="post">
@csrf
@method('put')
<input type="text" name="name"  placeholder="Nome" value="{{ $edit->name }}" >
<input type="text" name="email"  placeholder="email" value="{{ $edit->email }}" >
<input type="text" name="password"  placeholder="password" value="{{ $edit->password }}">

<input type="text" name="cpf"  placeholder="cpf" value="{{ $edit->cpf }}" >
<button type="submit"> enviar</button>
</form>


<div class="col-md-6"><label class="labels">name</label><input type="text" class="form-control"  value="{{ $edit->name }}" ></div>
                    <div class="col-md-6"><label class="labels">CPF</label><input type="text" class="form-control"  value="{{ $edit->cpf }}" ></div>
                    <div class="col-md-6"><label class="labels">Data de nascimento</label><input type="text" class="form-control"  value="{{ $edit->email }}" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nome do cônjuge</label><input type="text" class="form-control" placeholder="{{ $edit->password }}" value="{{ $edit->password }}" ></div>
                    
                    $2y$10$difY351tQ/RK8TM8nP/09eMjnFVQuUoxDIwEhdlbWqJD3BQlFdthu