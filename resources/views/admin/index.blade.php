@extends('admin.layouts.template')

<link href="\css\theme.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                                </head>






@section('content')<div class="container">

<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
							<th><span>Morador</span></th>
                            <th><span>Cpf</span></th>
							<th><span>Telefone</span></th>
							<th class="text-center"><span>Email</span></th>
							<th><span>Status</span></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
                    
                   

                    @foreach ($users as $user)



						<tr>
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
								<a href="/admin/editprofile/{{  $user->id }}" class="user-link">{{  $user->name }}</a>
								<span class="user-subhead">Cadastrou-se <a href="#">{{  $user->created_at->format('d/m/Y H:i:s') }}</a>

							</td>
							<td>
                            {{  $user->cpf }}							</td>
							<td class="text-center">
							<a href="https://api.whatsapp.com/send?phone=55{{  $user->telefone }}&text=Ol%C3%A1%2C%20Gostaria%20de%20Falar%20com%20*Voc%C3%AA*referente%20ao%20terreno%20*%22Nova%20Esperan%C3%A7a%22*%20" target="_blank">{{  $user->telefone }}</a>	
							</td>
							
                            <td>
								<a href="#">{{  $user->email }}</a>
							</td>
                            <td>
                            <span class="label label-warning"><a href="#">{{  $user->status }}</a></span>

								
							</td>
							<td style="width: 20%;">
								<a href="/admin/profile/{{  $user->id }}" class="table-link">
									<span class="fa-stack">
                                    <i class="bi bi-search-heart"></i>
									<i class="fa fa-search-plus fa-3x fa-inverse" ></i>
									</span>
								</a>
								<a href="/admin/editprofile/{{  $user->id }}" class="table-link">
									<span class="fa-stack">
                                    <i class="bi bi-pencil-square"></i>
										<i class="fa fa-pencil fa-stack-5x fa-inverse"></i>
									</span>
								</a>
								<a href="/admin/editprofile/{{  $user->id }}" class="table-link danger" onclick="geek()">
									<span class="fa-stack">
                                    <i class="bi bi-trash"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span><script>
        function geek() {
            confirm("Deseja Realmente Excluir o Cadastro do morador ?");
        }
    </script>
								</a>
							</td>
						</tr>
                        @endforeach

					</tbody>
				</table>
			</div>

			<ul class="pagination pull-right">
				<li><a href="#"><i class="bi bi-arrow-left-circle-fill"></i>
</i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i class="bi bi-arrow-right-circle-fill"></i>
</i></a></li>
			</ul>
		</div>
	</div>
</div>
</div>                            @endsection   

