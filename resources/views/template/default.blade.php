<!doctype html>
<html>
<head>
    @include('template.libraries')
</head>
<body>
<div class="container-fluid">
    <div class="row">
        @include('template.header')
        @include('template.sidebar')
    <div class="content-columnas">
            <div class="columnas" id="main-content" style="margin-left: 20%">
            @yield('content')
            </div>
    </div>
    @include('template.loading')
    </div>
</div>
</body>
</html>