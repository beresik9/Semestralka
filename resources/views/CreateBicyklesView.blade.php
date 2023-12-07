@extends('layout')
@section('content')
    <div>
        @if (isset($message))
            <div id="message" style="display: flex;">{{ $message }}
                <button id="closeButton" onclick="closeMessage()">Close Message</button>
            </div>
        @endif

        @if (isset($bicykel))
            <form method="POST" action="{{ '/bicykles/update/' . $bicykel->id }}">
                @csrf

                <label for="name">Name:</label>
                <input type="text" name="name" required value="{{ $bicykel->name }}">

                <label for="year">Year:</label>
                <input type="number" name="year" required value="{{ $bicykel->year }}">

                <label for="brand">Brand:</label>
                <input type="text" name="brand" required value="{{ $bicykel->brand }}">

                <label for="model">Model:</label>
                <input type="text" name="model" required value="{{ $bicykel->model }}">

                <label for="elektricky">Elektricky:</label>
                <input type="checkbox" name="elektricky" value="{{ $bicykel->elektricky }}">

                <button type="submit">Update bicykel</button>
            </form>
        @else
            <form method="POST" action="/bicykles">
                @csrf

                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="year">Year:</label>
                <input type="number" name="year" required>

                <label for="brand">Brand:</label>
                <input type="text" name="brand" required>

                <label for="model">Model:</label>
                <input type="text" name="model" required>

                <label for="elektricky">Elektricky:</label>
                <input type="checkbox" name="elektricky">

                <button type="submit">Create Bicycle</button>
            </form>
        @endif
    </div>

    <script>
        function closeMessage() {
            document.getElementById('message').style.display = 'none';
        }
    </script>
@endsection
