@extends('layout')
@section('content')
<div>
    @if($bicykles)
    @foreach($bicykles as $bicycle)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $bicycle->brand }} {{ $bicycle->model }}</h5>
                <a href="{{ url('/bicykles/'.$bicycle->id) }}" class="btn btn-primary">Update</a>
                <a href="{{ url('bicykles/delete/'.$bicycle->id) }}" class="btn btn-primary">Delete</a>
            </div>
        </div>
    @endforeach
    @endif
</div>
@endsection
