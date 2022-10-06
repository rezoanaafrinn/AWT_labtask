<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <body>
        <div class="container">
            @include('inc.topnav')
            <br>
            <b>Welcome to my company</b>
            <div>
                @yield('content')
            </div>