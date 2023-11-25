@extends('app')

@section('main')

<div class="container">
    <div class="d-grid gap-2 col-6 mx-auto mt-4">
        <div class="card">
            <div class="card-body">
                <h1>Name: {{ $item->name }}</h1>
                <h4>Description: {{ $item->description }}</h1>
                <img src="{{ asset('images/'.$item->image) }}" width="100%">
            </div>
        </div>    
        </div>
    </div>
</div>
@endsection