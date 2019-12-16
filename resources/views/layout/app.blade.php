<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
        .is-complete{
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/projects">
                        プロジェクト一覧
                    </a>

                    <a class="navbar-item" href="/projects/create">
                        新規プロジェクト作成
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>
</body>
</html>