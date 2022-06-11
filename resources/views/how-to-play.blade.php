@extends('welcome')

@section('main')

    @php
        $item_arr = [
            'item_1' => [
                'image' => 'test.png',
                'title' => 'Lorem ipusm',
                'desc' => 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsum'
             ],
            'item_2' => [
                        'image' => 'test.png',
                        'title' => 'Lorem ipusm',
                        'desc' => 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsum'
                     ],
        ];
    @endphp
    <div id="how_it_works_section" class="my-3">
        <h3 class="text-center text-white mb-5">Как работи</h3>
        <div class="inner-section">
            @foreach($item_arr as $item)
                <div class="item">
                    {{$item['image']}}
                    {{$item['title']}}
                    {{$item['desc']}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
