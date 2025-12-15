<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Task List App</title>
        <style>
            .success-message{
                color: white;
                background-color: green;
                font-size: 1.2rem;
                font-weight: bold;
                width:fit-content;
                padding: 0.8em;
            }
            .error-message{
                color: white;
                background-color: darkred;
                font-size: 1.2rem;
                font-weight: bold;
                width:fit-content;
                padding: 0.8em;
            }
            .footer{
                font-size: 1.2rem;
                font-weight: bold;
                width:fit-content;
                padding: 0.8em;
            }
        @yield('styles')
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @if (session()->has('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        <div>
        @yield('content')
        </div>

        <div class="footer">
        <a href="/">Home</a>
        @yield('footer')
        </div>
    </body>
</html>