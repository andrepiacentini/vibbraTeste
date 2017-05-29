@extends('home')
@section('content')

    <dl class="inline">
        <dt>Estabelecimento:</dt>
        <dd>{{$dados->nomeEtb}}</dd>
        <dt>Tipo do estabelecimento:</dt>
        <dd>{{$dados->tipoEtb}}</dd>
        <dt>Internet disponível?</dt>
        <dd>{{$dados->internet}}</dd>
        <dt>Velocidade:</dt>
        <dd>{{$dados->velocidade}}</dd>
        <dt>Tipo de internet:</dt>
        <dd>{{$dados->aberta}}</dd>
        <dt>Senha da internet:</dt>
        <dd>{{$dados->senha}}</dd>
        <dt>Comidas servidas :</dt><br>
        @foreach($dados["comidas"] as $dado)
            <ul class="unstyled">
                <li>{{$dado->tipo}}</li>
            </ul>
        @endforeach
        <dt>Bebidas servidas :</dt><br>
        @foreach($dados["bebidas"] as $dado)
            <ul class="unstyled">
                <li>{{$dado->tipo}}</li>
            </ul>
        @endforeach
    </dl>
    <dt>Nota para o atendimento:</dt>
    <dd>{{$dados->atendimento}}</dd>
    <dt>Nota para o preço:</dt>
    <dd>{{$dados->preco}}</dd>
    <dt>Nota para o conforto:</dt>
    <dd>{{$dados->Conforto}}</dd>
    <dt>Nota para o ruido:</dt>
    <dd>{{$dados->ruido}}</dd>
    <dt>Nota geral</dt>
    <dd>{{$dados->avaliacao_geral}}</dd>
    <dt>Avaliado por :</dt>
    <dd>{{$dados->name}}</dd><br>


@endsection