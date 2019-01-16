<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ URL::asset('/css/login.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abel|Allerta+Stencil|Allura" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <title>NutFlux</title>
    </head>

    <body>
        <div id="app">
            <router-view></router-view>

            <p>BACKEND LINKS</p>
            <ul>
                    <li>
                            <a href="{{ url('film') }}" class="nav-link">Index Film</a>
                        </li>
                        <li>
                            <a href="{{ url('film/create') }}" class="nav-link">Add Film / Series</a>
                        </li>
                        <li>
                                <a href="{{ url('film/catalogue') }}" class="nav-link"> Catalogue</a>
                        </li>
                        <li>
                            <a href="{{ url('/home') }}" class="nav-link"> Login</a>
                    </li>
            </ul>
            <P>FRONTEND LINKS</P>
            <ul>
                <li><a href="http://127.0.0.1:8000/catalogue">catalogue</a></li>
                <li><a href="http://127.0.0.1:8000/chooseuser">chooseuser</a></li>
                <li><a href="http://127.0.0.1:8000/editprofile">editprofile</a></li>
            </ul>
            <div class="main">
                <logo></logo>
                <div class="boxuser">
                <signin></signin>
                <login></login>

                </div>
                <slogan></slogan>

            </div>
        </div>
    <script src="js/app.js"></script>
    <script>
        const login = document.querySelector('.login');
        const signin = document.querySelector('.signin');
        const boxUser = document.querySelector('.boxuser');

        document.querySelector('.register').addEventListener("click", ()=>{
            login.style.display="none";
            signin.style.display="block";
        })

        document.querySelector('.log').addEventListener("click", ()=>{
            login.style.display="block";
            signin.style.display="none";
        })
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
