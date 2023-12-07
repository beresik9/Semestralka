<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop Bicykle</title>
    <link rel="stylesheet" href="{{ asset('/style.css')}}">
</head>
<body>

@include('Navigation')

<div class="container">
    @yield('content')
</div>

<footer class="pata" style="height: 100px;">
    <hr class="ciarka">
</footer>

</body>
</html>
