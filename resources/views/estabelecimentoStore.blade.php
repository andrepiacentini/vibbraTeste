@extends('home')
@section('content')

    {{ Form::open(array('url' => route('estabelimento.store'), 'enctype' => 'multipart/form-data', 'files' => true)) }}
    <fieldset>

            <legend class="">Cadastrar Estabelecimento</legend>

        <div class="control-group">

            <label class="control-label" for="email">Nome</label>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nome" value="{{ old('nome') }}" aria-describedby="basic-addon2" name="nome">
                        <span class="input-group-addon" id="basic-addon2"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">Endereço</label>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Endereco"  value="{{ old('endereco') }}"  aria-describedby="basic-addon2" name="endereco">
                        <span class="input-group-addon" id="basic-addon2"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">Cidade</label>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="cidade"  value="{{ old('cidade') }}"  aria-describedby="basic-addon2" name="cidade">
                        <span class="input-group-addon" id="basic-addon2"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">Estado</label>
            <div class="row">
                <div class="col-lg-6">
                    <select class="form-control" name="uf" id="uf" required>
                        @foreach($dados['estados'] as $estado)
                            <option value="{{$estado}}">{{$estado}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">País</label>
            <div class="row">
                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="País"  value="{{ old('pais') }}"  aria-describedby="basic-addon2" name="pais">
                        <span class="input-group-addon" id="basic-addon2"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">Tipo</label>
            <div class="row">
                <div class="col-lg-6">
                    <select class="form-control" name="tipo" id="tipo" required>
                        @foreach($dados['tipos'] as $tipo)
                            <option value="{{$tipo}}">{{$tipo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-success">Cadastrar</button>
            </div>
        </div>
    </fieldset>
    {{ Form::close() }}

@endsection