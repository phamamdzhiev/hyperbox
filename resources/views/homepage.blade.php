@extends('welcome')

@section('main')
    @if (session('delivery'))
        <div class="my-5" id="delivery-success" role="alert">
            {{ session('delivery') }}
        </div>
    @endif
    <h3 class="fw-bold text-white my-5 text-uppercase">
        MYSTERY BOXES
    </h3>
    @include('components.categories', [
'categories' => $categories])
    <div class="homepage-wrapper">
        @forelse($boxes as $box)
            @include('components.box-singleton', [
    'id' => $box->id,
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
