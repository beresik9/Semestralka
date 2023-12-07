@extends('layout')
@section('content')

    <section class="rozvh">
        <h2>Rozvrh rezervácii</h2>
        <div>
            <table class="tabulka">
                <tr>
                    <th>Pondelok</th>
                    <td>16:30<br>Volné</td>
                    <td>19:00<br>Volné</td>
                </tr>
                <tr>
                    <th>Utorok</th>
                    <td>7:00<br>Volné</td>
                    <td>17:00<br>Volné</td>
                </tr>
                <tr>
                    <th>Streda</th>
                    <td>16:30<br>Volné</td>
                    <td>19:00<br>Volné</td>
                </tr>
                <tr>
                    <th>Štvrtok</th>
                    <td>16:45<br>Volné</td>
                    <td>19:00<br>Volné</td>
                </tr>
            </table>
            <section class="cennik">
                <h3>Cennik</h3>
                <table class="cennik1">
                    <tr>
                        <td><span>Súkromná hodina</span></td>
                        <td><span>25 €</span></td>
                    </tr>
                    <tr>
                        <td><span>Súkromná hodina pre dvoch</span></td>
                        <td><span>40 €</span></td>
                    </tr>
                    <tr>
                        <td><span>Súkromá hodina pre troch</span></td>
                        <td><span>45 €</span></td>
                    </tr>
                    <tr>
                        <td><span>Súkromá hodina</span></td>
                        <td><span>8 €</span></td>
                    </tr>
                    <tr>
                        <td><span>Permanentka 10 vstupov (45 dní platnosti)</span></td>
                        <td><span>70 €</span></td>
                    </tr>
                </table>
            </section>
        </div>
    </section>

@endsection

