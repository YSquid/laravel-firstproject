<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Website - Code With Dary
    </title>
    <link
        rel="stylesheet"
        href="style.css"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <style>
        .active {
            color: red;
        }
    </style>
</head>

<body>
    <header>
        <!-- Navigation -->
        {{-- this includes the entire layouts.header file in this view --}}
        @include('layouts.header')
    </header>
    {{-- app.blade.php is the master page, about and index are child pages
    we keep the header and footer same for all, and render variable content within the yield --}}
    @yield('content')
    

    <!-- Footer -->
    <footer>
      @include('layouts.footer')
    </footer>
</body>
</html>
