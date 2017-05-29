@extends('home')
@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome do Estabelecimento</th>
            <th>Tipo</th>
            <th>Nota para o Atendimento</th>
            <th>Nota para o Preco</th>
            <th>Nota para o Conforto</th>
            <th>Nota para o Ruído</th>
            <th>Nota para a Avaliação Geral</th>
            <th>Opção</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dados as $dado)
            <tr>
                <td>{{$dado->nomeEtb}}</td>
                <td>{{$dado->tipoEtb}}</td>
                <td>{{$dado->atendimento}}</td>
                <td>{{$dado->preco}}</td>
                <td>{{$dado->Conforto}}</td>
                <td>{{$dado->ruido}}</td>
                <td>{{$dado->avaliacao_geral}}</td>
                <td>
                <a href="{{route('avaliacao.completa', $dado->id)}}">
                    <span class="btn btn-success" aria-hidden="true">Ver avalição completa</span>
                </a>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

@endsection