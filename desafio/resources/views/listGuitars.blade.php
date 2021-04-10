@extends('templates.template')
@section('content')
@csrf
@foreach($guitar as $guitars)
<div class="card p-2 my-3">
    <div class="row">
        <div class="col-md-3">
            <img src="{{$guitars->foto}}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-md-9 p-3">
            <h3>{{$guitars->modelo}}</h3>
            <p>
                <strong>Marca:</strong> {{$guitars->marca}} <br>
                <strong>Preço:</strong> R$ {{$guitars->preco}} <br>
                <strong>Cor:</strong> {{$guitars->cor}} <br>
                <strong>Ano:</strong> {{$guitars->ano}} <br>
                <strong>Cadastrado em:</strong> {{$guitars->created_at}}
            </p>
            <p>
               {{$guitars->descricao}}
            </p>
            <p class="text-right">
                <a href="{{"editar/$guitars->id"}}" class="btn btn-primary">Editar</a>
                <a id="el" href="{{"deletar/$guitars->id"}}" class='btn btn-danger' >Deletar</a>
            </p>
        </div>
    </div>
</div>
@endforeach()
@endsection
