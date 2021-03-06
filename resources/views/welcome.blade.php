<!DOCTYPE html>
<html>
<head>
    <title>Vibbra</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 80px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-google {
            background: #dd4b39;
            color: white;
        }



    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">O aplicativo</div>
        <p>O aplicativo tem como público alvo profissionais que tem a necessidade de realizar trabalhos fora do escritório.<br>
            Sejam pessoas que trabalham remotamente, que viajam, profissionais liberais ou que por qualquer outro motivo tenham a
            necessidade de um lugar para realizar seus trabalhos.
        </p>
        <a  href="{{URL::to('cadastro')}}" class="btn btn-large btn-block btn-primary"><font color="white">Cadastro</font></a>
        <a  href="{{URL::to('login')}}" class="btn btn-large btn-block btn-success"><font color="white">Login</font></a>
        <a href="{{route('auth.social','facebook')}}" class="fa fa-facebook"></a>
        <a href="{{route('auth.social','twitter')}}" class="fa fa-twitter"></a>
        <a href="{{route('auth.social','google')}}" class="fa fa-google"></a>

    </div>
</div>
</body>
</html>
