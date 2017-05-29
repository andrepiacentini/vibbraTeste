@extends('home')
@section('content')

    <legend class="">Cadastrar Avaliação para o estabelecimento:{{$estabelecimento->name}}</legend>
    {{ Form::open(array('url' => route('avaliacao.store'), 'enctype' => 'multipart/form-data', 'files' => true)) }}
    <div class="row">
        <h2>Tem internet no : {{$estabelecimento->name}}</h2>
        <div class="row">
            <div class="col-lg-6">
                <select class="form-control" name="internet" id="internet" required>
                    @foreach($dados['internet'] as $internet)
                        <option value="{{$internet}}">{{$internet}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <h2>Qual a velocidade da internet no : {{$estabelecimento->name}}</h2>
        <div class="row">
            <div class="col-lg-6">
                <select class="form-control" name="velocidade" id="velocidade" required>
                    @foreach($dados['velocidadeinternet'] as $internet)
                        <option value="{{$internet}}">{{$internet}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <h2>Qual o tipo da internet no : {{$estabelecimento->name}}</h2>
        <div class="row">
            <div class="col-lg-6">
                <select class="form-control" name="tipo_internet" id="tipo_internet" required>
                    @foreach($dados['internetTipo'] as $internet)
                        <option value="{{$internet}}">{{$internet}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <h2>Qual a senha da internet no : {{$estabelecimento->name}}</h2>
        <div class="row">
            <div class="col-lg-6">
                    <input type="text" class="form-control" placeholder="Senha da internet" aria-describedby="basic-addon2" name="senha">
            </div>
        </div>
    </div>

    <div class="row">
        <h2>Quais tipos de comidas são servidos no : {{$estabelecimento->name}}</h2>
        <div class="row">
            <div class="col-md-12">
                <label>
                    <input type="checkbox" name="comidas[]" class="flat-red" value="Regional"
                           id="check_one">
                    Regional
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="comidas[]" class="flat-red" value="Chinesa"
                           id="check_two">
                    Chinesa
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="comidas[]" class="flat-red" value="Japonesa"
                           id="check_three">
                    Japonesa
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="comidas[]" class="flat-red" value="arabe"
                           id="check_for">
                    Árabe
                </label>&nbsp;&nbsp;

            </div>

        </div>
    </div>
    <div class="row">
        <h2>Quais tipos de bebidas são servidos no : {{$estabelecimento->name}}</h2>
        <div class="row">
            <div class="col-md-12">
                <label>
                    <input type="checkbox" name="bebibas[]" class="flat-red" value="Cerveja"
                           id="check_one">
                    Cerveja
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="bebibas[]" class="flat-red" value="Vodka"
                           id="check_two">
                    Vodka
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="bebibas[]" class="flat-red" value="Vinho"
                           id="check_three">
                    Vinho
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="bebibas[]" class="flat-red" value="Whisky"
                           id="check_for">
                    Whisky
                </label>&nbsp;&nbsp;
            </div>
        </div>
    </div>
    <div class="row">
        <h2>Quais tipos de acomodações no : {{$estabelecimento->name}}</h2>
        <div class="row">
            <div class="col-md-12">
                <label>
                    <input type="checkbox" name="acomodacoes[]" class="flat-red" value="mesa e cadeira"
                           id="check_one">
                    Mesa e Cadeira
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="acomodacoes[]" class="flat-red" value="sofa"
                           id="check_two">
                    Sofá
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="acomodacoes[]" class="flat-red" value="balcao"
                           id="check_three">
                    Balcão
                </label>&nbsp;&nbsp;
                <label>
                    <input type="checkbox" name="acomodacoes[]" class="flat-red" value="outros"
                           id="check_for">
                    Outros
                </label>&nbsp;&nbsp;
            </div>
        </div>
    </div>

    <div class="row">
        <h2> Qualidade do atendimento no : {{$estabelecimento->name}}</h2>

        <div class="row lead">
            <div id="hearts" class="starrr"></div>
            <span id="count">0</span> estrela (s)
        </div>
    </div>
    <div class="row">
        <h2>Preço - Nível de valor  no : {{$estabelecimento->name}}</h2>

        <div class="row lead">
            <div id="hearts-existing" class="starrr"></div>
            <span id="count-existing">0</span> estrela (s)
        </div>
    </div>
    <div class="row">
        <h2>Conforto - Nível de qualidade no : {{$estabelecimento->name}}</h2>

        <div class="row lead">
            <div id="hearts-confort" class="starrr"></div>
            <span id="count-confort" >0</span> estrela (s)
        </div>
    </div>
    <div class="row">
        <h2>Ruído (Barulho) - Nível de ruído no : {{$estabelecimento->name}}</h2>

        <div class="row lead">
            <div id="hearts-noise" class="starrr"></div>
            <span id="count-noise">0</span> estrela (s)
        </div>
    </div>
    <div class="row">
        <h2>Avaliação geral no : {{$estabelecimento->name}}</h2>

        <div class="row lead">
            <div id="hearts-general_evaluation" class="starrr"></div>
            <span id="count-general_evaluation">0</span> estrela (s)
        </div>
    </div>
    <br>
    <div class="control-group">
        <div class="controls">
            <button class="btn btn-success">Cadastrar</button>
        </div>
    </div>

    <input type="hidden" name="count_attendance" id="count_attendance" >
    <input type="hidden" name="count_value"   id="count_value">
    <input type="hidden" name="count_confort" id="count_confort">
    <input type="hidden" name="general_noise" id="general_noise">
    <input type="hidden" name="general_evaluation" id="general_evaluation">
    <input type="hidden" name="id_estabelecimento" value="{{$estabelecimento->id}}">

    </fieldset>
    {{ Form::close() }}






@endsection