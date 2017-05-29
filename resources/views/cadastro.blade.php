
@extends('index')
@section('content')

    {{ Form::open(array('url' => route('cadastro.store'), 'enctype' => 'multipart/form-data', 'files' => true)) }}
        <fieldset>
            <div id="legend">
                <legend class="">Cadastro</legend>
            </div>
            <div class="control-group">
                <!-- Username -->
                <div class="control-group">
                    <!-- E-mail -->
                    <label class="control-label" for="email">Nome</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nome e sobrenome" aria-describedby="basic-addon2" name="nome">
                                <span class="input-group-addon" id="basic-addon2"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <!-- E-mail -->
                    <label class="control-label" for="email">E-mail</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon2" name="email">
                                <span class="input-group-addon" id="basic-addon2">@exemplo.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <!-- Password-->
                    <label class="control-label" for="password">Senha</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Senha" aria-describedby="basic-addon2" name="password">
                                <span class="input-group-addon" id="basic-addon2"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <!-- Password -->
                    <label class="control-label"  for="password_confirm">Confirmar Senha</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Confirmar Senha" aria-describedby="basic-addon2" name="password_confirmation">
                                <span class="input-group-addon" id="basic-addon2"></span>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="control-group">
                          <div class="controls">
                        <button class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
        </fieldset>
    {{ Form::close() }}

@endsection