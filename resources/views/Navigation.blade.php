<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eshop Bicykle</title>
    <link rel="stylesheet" href="{{ asset('/style.css')}}">
</head>

<div class="main-header">
    <nav class="nav main-nav">
        <ul>
            <li><a href="{{url('/')}}">Domov</a></li>
            <li><a href="{{url('/Rezervacie')}}">Rezervácia</a></li>
            <li><a href="{{url('/Kontakt')}}">Kontakt</a></li>
            <li><a href="{{url('/bicykles/create')}}">Vytvorit bicykel</a> </li>
            <li><a href="{{url('/bicykles')}}">Bicykle</a></li>

        </ul>
        <span class="logaSocials">
                <a href="https://www.instagram.com"><img src="{{url('/pics/instagram.png')}}" alt="Instagram"></a>
                <a href="https://www.twitter.com"><img src="{{url('/pics/twitter.png')}}" alt="Twitter"></a>
                <a href="https://www.facebook.com"><img src="{{url('/pics/facebook.png')}}" alt="Facebook"></a>
            </span>

    </nav>
</div>
