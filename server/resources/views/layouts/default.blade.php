<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="container-fluid">

        <header class="row">
            @include('includes.header')
        </header>

        <div id="main" class="container">
            @yield('content')
        </div>

    </div>
</body>
</html>