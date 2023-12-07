@extends('layout')
@section('content')
    <section class="uvodna"
             style="background-image: url('{{ asset('/pics/bicykel.png')}}');; background-repeat: no-repeat; background-position: center;">
        <h1 class="nadpis_b">Eshop</h1>
        <div class="citatRow">
            <p class="citat">“Hľadáte krásny bicykel?<br> Tu ste na správnom mieste”</p>
            <button class="rezervovat" type="button">Rezervovať</button>
        </div>
        <h1 class="nadpis_bike">Bike</h1>
    </section>

    <section class="druhaSekcia">
        <div class="column1">
            <h2>Návšteva pravádzky a kúpa biku</h2>
            <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam, eaque ipsa quae ab illo inventore veritatis et qu </p>
            <p>untur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt
                ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
                ve</p>
            <h2>Rezervuj si skúšobnú jazdu</h2>
            <p> denouncing pleasure and praising pain was born and I will give you a complete account of the system, and
                expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
                No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but becaus</p>
            <button class="rezervovat" type="button">Rezervovať</button>
        </div>
    </section>

@endsection


