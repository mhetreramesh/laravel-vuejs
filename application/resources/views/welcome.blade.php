<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tradebyte PIM</title>
        <link rel="shortcut icon" href="https://www.tradebyte.com/wp-content/themes/tradebyte/img/favicon.ico"/>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Tradebyte PIM</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Articles</a></li>
                <li><a href="#">Categories</a></li>
            </ul>
        </div>
        </nav>
        <div id="app">
        </div>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                'baseUrl' => url('/')
            ]); ?>
        </script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
