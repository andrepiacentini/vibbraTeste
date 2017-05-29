<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vibbra</title>

    <link href="../logado/css/bootstrap.min.css" rel="stylesheet">
    <link href="../logado/css/metisMenu.min.css" rel="stylesheet">
    <link href="../logado/css/timeline.css" rel="stylesheet">
    <link href="../logado/css/startmin.css" rel="stylesheet">
    <link href="../logado/css/morris.css" rel="stylesheet">
    <link href="../logado/css/welcome.css" rel="stylesheet">


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- bootstrap -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <style>
/*        #hearts { color: #ee8b2d;}
        #hearts-existing { color: #ee8b2d;}*/
        .starrr { color: #ee8b2d;}
    </style>

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">

                    <li>
                        <a href="{{URL::to('home')}}" class="active"><i class="fa fa-dashboard fa-fw"></i>Menu</a>
                    </li>
                    <li>
                        <a href="#">Estabelecimento</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('estabelecimento')}}">Cadastrar</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Avalicações</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('avaliacao')}}">Cadastrar Avaliação</a>
                            </li>
                            <li>
                                <a href="{{URL::to('avaliacaoMinha')}}">Minhas Avaliações</a>
                            </li>
                            <li>
                                <a href="{{URL::to('avaliacaoLista')}}">Listar Avaliações</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">&nbsp;</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    @yield('content')
                </div>
            </div>

            <!-- ... Your content goes here ... -->

        </div>
    </div>
</div>

<script src="../logado/js/bootstrap.min.js"></script>
<script src="../logado/js/metisMenu.min.js"></script>
<script src="../logado/js/startmin.js"></script>
<script src="../logado/js/vibbra.js"></script>
<script src="../logado/js/avaliacao.js"></script>

@if (count($errors) > 0)
    <!-- Modal -->
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Atenção!</h4>
                </div>
                <div class="modal-body">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myModal2').modal('show');
        });
    </script>
@endif


@if (session('status'))
    <div class="modal fade" id="status" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Aviso</h4>
                </div>
                <div class="modal-body">
                    {{ session('status') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#status').modal('show');
        });
    </script>
@endif

<div class="modal fade" id="avaliacao" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastrar Avaliação</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success" id="vai">Cadastrar</button>
            </div>
        </div>

    </div>
</div>



</body>
</html>
