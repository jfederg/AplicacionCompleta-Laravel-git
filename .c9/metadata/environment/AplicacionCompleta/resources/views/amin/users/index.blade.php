{"filter":false,"title":"index.blade.php","tooltip":"/AplicacionCompleta/resources/views/amin/users/index.blade.php","undoManager":{"mark":23,"position":23,"stack":[[{"start":{"row":0,"column":0},"end":{"row":100,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap\" rel=\"stylesheet\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Nunito', sans-serif;","                font-weight: 200;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 13px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>","    </head>","    <body>","        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","","                        @if (Route::has('register'))","                            <a href=\"{{ route('register') }}\">Register</a>","                        @endif","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Docs</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://blog.laravel.com\">Blog</a>","                    <a href=\"https://nova.laravel.com\">Nova</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://vapor.laravel.com\">Vapor</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>","    </body>","</html>",""],"id":1}],[{"start":{"row":66,"column":0},"end":{"row":97,"column":14},"action":"remove","lines":["        <div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","","                        @if (Route::has('register'))","                            <a href=\"{{ route('register') }}\">Register</a>","                        @endif","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Docs</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://blog.laravel.com\">Blog</a>","                    <a href=\"https://nova.laravel.com\">Nova</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://vapor.laravel.com\">Vapor</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>"],"id":2}],[{"start":{"row":3,"column":0},"end":{"row":63,"column":16},"action":"remove","lines":["        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Laravel</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap\" rel=\"stylesheet\">","","        <!-- Styles -->","        <style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Nunito', sans-serif;","                font-weight: 200;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 13px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>"],"id":3}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":8},"action":"insert","lines":["    "],"id":5}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "],"id":6}],[{"start":{"row":6,"column":4},"end":{"row":6,"column":8},"action":"insert","lines":["    "],"id":7}],[{"start":{"row":6,"column":8},"end":{"row":6,"column":9},"action":"insert","lines":["<"],"id":8},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["h"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["1"]}],[{"start":{"row":6,"column":11},"end":{"row":6,"column":17},"action":"insert","lines":["></h1>"],"id":9}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["P"],"id":10},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["a"]}],[{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["a"],"id":11}],[{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["á"],"id":12},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["i"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["n"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["a"]}],[{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":[" "],"id":13},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["d"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["e"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["l"]}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":[" "],"id":14}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"remove","lines":[" "],"id":15},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"remove","lines":["l"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["e"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["d"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":[" "]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["a"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["n"]},{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["i"]}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"insert","lines":["g"],"id":16},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["i"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["n"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["a"]}],[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":[" "],"id":17},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["d"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":[" "],"id":18},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["I"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["n"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["d"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["x"],"id":19}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":[" "],"id":20},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["a"]},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["d"]},{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"insert","lines":["m"]},{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":["i"]},{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"insert","lines":["n"]},{"start":{"row":6,"column":33},"end":{"row":6,"column":34},"action":"insert","lines":["i"]},{"start":{"row":6,"column":34},"end":{"row":6,"column":35},"action":"insert","lines":["s"]},{"start":{"row":6,"column":35},"end":{"row":6,"column":36},"action":"insert","lines":["t"]},{"start":{"row":6,"column":36},"end":{"row":6,"column":37},"action":"insert","lines":["r"]}],[{"start":{"row":6,"column":37},"end":{"row":6,"column":38},"action":"insert","lines":["a"],"id":21},{"start":{"row":6,"column":38},"end":{"row":6,"column":39},"action":"insert","lines":["d"]},{"start":{"row":6,"column":39},"end":{"row":6,"column":40},"action":"insert","lines":["o"]},{"start":{"row":6,"column":40},"end":{"row":6,"column":41},"action":"insert","lines":["r"]}],[{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"insert","lines":[" "],"id":22}],[{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"insert","lines":["."],"id":23}],[{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":[" "],"id":24}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":7},"end":{"row":8,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1633993418510,"hash":"d75b942e95d6ef8a17cde98986fa0ce7f963d61c"}