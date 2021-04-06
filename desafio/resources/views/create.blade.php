@extends('templates.template')
@section('content')
<h1 class='text-center'>@if(isset($guitar))Editar @else Cadastrar @endif</h1>

<!--Conteudo cadastro -->
    @if(isset($guitar))
        <div class="container my-3">
        <form id="formEditguitars" action="{{url("editar/$guitar->id")}}" method="POST"  class="row">
            @method('PUT')
    @else    
        <div class="container my-3">
        <form id="formCadguitars"  method="POST" action="{{url('cadastrar')}}" class="row">
    @endif


        @csrf
        <div class="form-group col-md-6">
            <label>Marca:</label><label class="text-danger">*</label>
            <select id="marca" name="marca" class="form-control custom-select" value="{{$guitar->marca ?? ""}}" required >
                <option value="">-- Selecionar --</option>
                <option value="Fender">Fender</option>
                <option value="Gibson">Gibson</option>
                <option value="Ibanez">Ibanez</option>
                <option value="Epiphone">Epiphone</option>
                <option value="Yamaha">Yamaha</option>
                <option value="Jackson">Jackson</option>
                <option value="Giannini">Giannini</option>
                <option value="Squier">Squier</option>
                <option value="Michael">Michael</option>
                <option value="Outro">Outra Marca</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Modelo:</label><label class="text-danger">*</label>
            <input type="text" id="modelo" name="modelo" class="form-control" value="{{$guitar->modelo ?? ""}}" placeholder="Insira o nome do modelo" required >
        </div>
        <div class="form-group col-md-6">
            <label>Ano:</label><label class="text-danger">*</label>
            <input type="text" id="ano" maxlength="4" size="4" name="ano" class="form-control" value="{{$guitar->ano ?? ""}}" placeholder="Insira o ano do modelo" required>
        </div>
        <div class="form-group col-md-6">
            <label>Preço:</label><label class="text-danger">*</label>
            
           <input type="text" id="preco"  onkeyup="formatarMoeda()" name="preco" class="form-control" value="{{$guitar->preco ?? ""}}" placeholder="Insira o preço do modelo" required>
        </div>
        <div class="form-group col-md-6">
            <label>Foto:</label><label class="text-danger">*</label>
            <input type="text" id="foto" name="foto" class="form-control" value="{{$guitar->foto ?? ""}}" placeholder="Insira o link da imagem (Copiar endereço de imagem)" required>
        </div>
        <div class="form-group col-md-6">
            <label>Cor:</label><label class="text-danger">*</label>
            <select id="cor" name="cor" class="form-control custom-select" value="{{$guitar->cor ?? ""}}" required>
                <option value="">-- Selecionar --</option>
                <option value="Preto">Preto</option>
                <option value="Branco">Branco</option>
                <option value="Prata">Prata</option>
                <option value="Vermelho">Vermelho</option>
                <option value="Amarelo">Amarelo</option>
                <option value="Azul">Azul</option>
                <option value="Rosa">Rosa</option>
                <option value="Outro">Outra Cor</option>
            </select>
            <div class="alert-danger w-100 p-2 d-none">Cor é obrigatório</div>
        </div>
        <div class="form-group col-md-12" >
            <label>Descrição:</label><label class="text-danger">*</label>
            <textarea name="descricao" class="form-control" id="descricao" rows="10" value="{{$guitar->descricao ?? ""}}" placeholder="Insira descrições mais detalhadas sobre sua guitarra" required></textarea>
        </div>
        <div class="form-group col-md-12 text-right">
            <input class="btn btn-primary" type="submit" value="@if(isset($guitar))Editar @else Cadastrar @endif" >
            <button type="reset" class="btn btn-secondary">
                Limpar
            </button>
        </div>
    </form>
 </div>

<!--Fim Conteudo cadastro -->

<script>
       function formatarMoeda() {
        var elemento = document.getElementById('preco');
        var preco = elemento.value;
        
        preco = preco + '';
        preco = parseInt(preco.replace(/[\D]+/g, ''));
        preco = preco + '';
        preco = preco.replace(/([0-9]{2})$/g, ",$1");

        if (preco.length > 6) {
            preco = preco.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        }

        elemento.value = preco;
        if(preco == 'NaN') elemento.value = '';
        
    }
</script>
@endsection