@extends('welcome')

@section('main')
    <h3 class="fw-bold text-white my-5">
        ВСИЧКИ КУТИИ
    </h3>
    @include('components.categories')
    <div class="homepage-wrapper">
        @forelse($boxes as $box)
            {{--            {{dump($box)}}--}}
            @include('components.box-singleton', [
    'pedal' => "test",
    'price' => "test 2"
])
        @empty
            <p>No boxes found!</p>
        @endforelse
    </div>
@endsection
