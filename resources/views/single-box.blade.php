@extends('welcome')

@section('main')

    <div class="box-page-wrapper position-relative">
        <p id="tracking-id">
            ID: {{ $box->tracking_id }}
        </p>
        <div class="d-flex align-items-center box-intro py-5">
            <div class="img-wrapper">
                <img class="img-fluid"
                     src="https://static.ancientgaming.io/images/HypeDrop_Summer%20trees_Box_Design_Export.png"
                     alt="">
            </div>
            <div class="actions">
                <h3 class="fw-bold text-uppercase text-white">
                    {{$box->title}}
                </h3>
                <p class="my-3">
                    {{$box->desc}}
                </p>
                <div class="d-flex align-items-center" id="order">
                    <button class="btn main-button fw-bold text-white d-flex align-items-center">
                            <span>
                                <svg class="d-block" width="16" height="15" viewBox="0 0 16 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3V0H4C5.65685 0 7 1.34315 7 3V6H0V3H3Z" fill="currentColor"></path>
                                <path d="M16 3H13V0H12C10.3431 0 9 1.34315 9 3V6H16V3Z" fill="currentColor"></path>
                                <path d="M7 8V15H1V8H7Z" fill="currentColor"></path>
                                <path d="M15 15V8H9V15H15Z" fill="currentColor"></path>
                            </svg>
                            </span>
                        <span class="ps-2 text-uppercase">
                             Поръчай сега за {{$box->price}} BGN
                            </span>
                    </button>
                    <div class=" position-relative">
                        <button class="btn secondary-button fw-bold text-white text-uppercase dis">
                            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.032 6.712a4.043 4.043 0 00.58-4.351A4.146 4.146 0 0015.499.015a4.124 4.124 0 00-2.814 1.446l-8.323 9.781-.318.391a1.012 1.012 0 00.129 1.438l4.745 3.94c.187.155.422.24.666.24.03.003.06.003.09 0a1.04 1.04 0 00.704-.36l8.652-10.18h.003zM16.15 5.325l-.834.978a1.046 1.046 0 01-1.429.091 1.012 1.012 0 01-.155-1.404l.83-.978a1.043 1.043 0 011.773.303c.126.345.056.73-.185 1.01zM3.51 14.063a.522.522 0 01.379.119l3.974 3.281a.509.509 0 01.062.72l-.829.966c-.11.131-.28.2-.453.181L.46 18.654a.517.517 0 01-.423-.318.505.505 0 01.084-.517l3.039-3.576a.52.52 0 01.352-.18z"
                                    fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                            <span class="ps-2">
                                Отвори онлайн
                            </span>
                        </button>
                        <div id="hoverable" class="position-absolute">
                            ОЧАКВАЙТЕ СКОРО
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="box-items" class="mb-5">
            <h5 class="text-white text-uppercase fw-bold">
                ПРОДУКТИ В КУТИЯТА
            </h5>
            @include('components.box-items')
        </div>
{{--        <div id="last-opened" class="mb-5">--}}
{{--            <h5 class="text-white text-uppercase fw-bold">--}}
{{--                ПОСЛЕДНО ОТВОРЕНИ--}}
{{--            </h5>--}}
{{--            @include('components.last-opened')--}}
{{--        </div>--}}
        @include('components.features')
    </div>
@endsection
