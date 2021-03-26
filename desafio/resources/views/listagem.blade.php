@extends('templates.template')
@section('content')
@csrf
@foreach($guitarra as $guitarras)
<div class="card p-2 my-3">
    <div class="row">
        <div class="col-md-3">
            <img src="{{$guitarras->foto}}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-md-9 p-3">
            <h3>{{$guitarras->modelo}}</h3>
            <p>
                <strong>Marca:</strong> {{$guitarras->marca}} <br>
                <strong>Preço:</strong> R$ {{$guitarras->preco}} <br>
                <strong>Cor:</strong> {{$guitarras->cor}} <br>
                <strong>Ano:</strong> {{$guitarras->ano}} <br>
                <strong>Cadastrado em:</strong> {{$guitarras->created_at}}
            </p>
            <p>
               {{$guitarras->descricao}}
            </p>
            <p class="text-right">
                <a href="{{"editar/$guitarras->id"}}" class="btn btn-primary">Editar</a>
                <a id="el" href="{{"deletar/$guitarras->id"}}" class='btn btn-danger' >Deletar</a>
            </p>
        </div>
    </div>
</div>
@endforeach()
@endsection
