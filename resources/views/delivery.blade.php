@extends('welcome')

@section('main')
    <div id="delivery-form-wrapper" class="my-5">
        @if($errors->any())
            {!! implode('', $errors->all('<div class="form-error mb-3" role="alert">:message</div>')) !!}
        @endif
        <h4 class="text-center fw-bold mb-4 text-uppercase text-white">Форма за доставка</h4>
        <div id="box-delivery-preview" class="my-3">
            <p class="text-white">
                <i>Артикул №: <strong>{{$box->id}}</strong></i>
            </p>
            <p class="text-white">
                <i>Кутия: <strong>{{$box->title}}</strong></i>
            </p>
            <p class="text-white">
                <i>Цена: <strong>{{$box->price}} BGN</strong></i>
            </p>

        </div>
        <form action="{{route('delivery.box.post', $id)}}" method="POST" id="delivery-form">
            @csrf
            {{--name--}}
            <div class="mb-3">
                <input placeholder="Имена" type="text" value="{{ old('name') }}" class="form-control" name="name"
                       id="name">
            </div>
            {{--email--}}
            <div class="mb-3">
                <input placeholder="Имейл" type="email" value="{{ old('email') }}" class="form-control" name="email"
                       id="email">
            </div>
            {{--mobile--}}
            <div class="mb-3">
                <input placeholder="Мобилен номер" type="text" value="{{ old('mobile') }}" class="form-control"
                       name="mobile"
                       id="mobile">
            </div>
            {{--address--}}
            <div class="mb-3">
                <input placeholder="Адрес за доставка" type="text" value="{{ old('address') }}" class="form-control"
                       name="address"
                       id="address">
            </div>
            {{--Box ID--}}
            <input type="hidden" name="box_id" value="{{$id}}">
            <button type="submit" class="text-uppercase fw-bold btn" id="submit-delivery-form-btn">
                ИЗПРАТИ
            </button>
            <br/>
            <br/>
            <small style="font-size: 11px" class="text-uppercase">
                * Всички доставки се изпълняват с наложен платеж от куриерска фирма ЕКОНТ
            </small>
        </form>
    </div>

@endsection
