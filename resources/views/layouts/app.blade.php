<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- STYLESHEET CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <title>@yield('title') | Laravel Fashion Shop</title>
</head>

<body>
    @include('partials.header') 
    
    <main>
        @yield('content') 
    </main>
    
    @include('partials.footer')

</body>

</html>