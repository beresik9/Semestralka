@extends('layout')
@section('content')

    <section class="mapka">
        <h2>Kde nás nájdeš?</h2>
        <div class="mapa" id="mapa">
            <iframe class="mapka1"
                    src="{{url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20850.93303429219!2d18.735170951950035!3d49.21257366844297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471459482d177287%3A0x278378d8bd875274!2zxb1pbGluc2vDoSB1bml2ZXJ6aXRhIHYgxb1pbGluZQ!5e0!3m2!1ssk!2ssk!4v1698254245270!5m2!1ssk!2ssk"')}}"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="adresa">
            <h2>Adresa</h2>
            <p>Univerzitná 8215/1, 010 26 Žilina</p>
            <div class="tel">
                <div>
                    <p class="tele">0911 556 789</p>
                    <p class="tele">0911 676 823</p>
                </div>
                <div>
                    <p>Po-Pia: 7:00‑19:00</p>
                    <p>So-Ne: 7:00‑16:00</p>
                </div>
            </div>
            <p>Erik Berešík</p>
        </div>
    </section>

@endsection




