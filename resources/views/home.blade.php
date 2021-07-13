@extends('layouts.main')

@section('main-content')
<section class="container">
    <div class="cards">
        @foreach ($comics as $item)
            <div class="card">
                <img src="{{ $item["thumb"] }}" alt="">
                <p>{{ $item["series"] }}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection