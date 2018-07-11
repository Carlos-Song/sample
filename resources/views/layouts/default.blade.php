<html lang="en">
<head>
    <title>@yield('title', 'Sample') - Laravel 入门</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</body>
</html>