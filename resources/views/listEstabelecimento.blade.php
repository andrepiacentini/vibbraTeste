@extends('home')
@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome do Estabelecimento</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dados as $dado)
            <tr>
                <td>{{$dado->name}}</td>
                <td>
                   {{-- <button class="btn btn-success cadastrar" id="{{$dado->id}}">cadastrar avalicao</button>--}}
                    <a href="{{route('avaliacao.show', $dado->id)}}">
                        <span class="btn btn-success" aria-hidden="true">cadastrar avalicao</span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection