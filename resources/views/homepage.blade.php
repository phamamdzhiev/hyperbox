@extends('welcome')

@section('main')
    <h3 class="fw-bold text-white my-5">
        MYSTERY BOX
    </h3>
    @include('components.categories', [
'categories' => $categories])
    <div class="homepage-wrapper">
        @forelse($boxes as $box)
            @include('components.box-singleton', [
    'title' => $box->title,
    'price' => $box->price,
    'category' => $box->category_name,
    'badge' => $box->badge
])
        @empty
            <p>Няма намерени кутии!</p>
        @endforelse
    </div>
@endsection
