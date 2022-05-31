@extends('layouts.admin')

@section('admin')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if($errors->any())
            {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">:message</div>')) !!}
        @endif
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-3 fw-bold">Add new <u>box</u></h4>
                <form method="POST" action="{{route('box.add')}}" enctype="multipart/form-data">
                    @csrf
                    {{--                    title--}}
                    <div class="mb-3">
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" value="{{ old('Title') }}" class="form-control" name="Title" id="Title">
                    </div>
                    {{--                    DESC--}}
                    <div class="mb-3">
                        <label for="Description">Description</label>
                        <textarea class="form-control" name="Description"
                                  id="Description">{{ old('Description') }}</textarea>
                    </div>
                    {{--                    Image--}}
                    <div class="mb-3">
                        <label for="Image" class="form-label">Image</label>
                        <input class="form-control" type="file" name="image" id="Image"/>
                    </div>
                    {{--                    Item in box--}}
                    <div class="mb-3">
                        <label for="item">Item inside the box</label>
                        <select class="form-select" name="item_box" id="item">
                            @foreach($items as $item)
                                <option id="2" value="{{$item->id}}">({{$item->id}}) {{$item->title}}
                                    - {{$item->price . ' BGN'}} - кат. номер {{$item->shop_category_number}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--                    Price --}}
                    <div class="mb-3">
                        <label for="js-item-price">Box price</label>
                        <select class="form-select" name="price_list" id="js-item-price">
                            @foreach($priceListOptions as $price)
                                <option id="{{$price->price}}" value="{{$price->id}}">{{$price->price}} BGN</option>
                            @endforeach
                        </select>
                    </div>

                    {{--                    DIFF--}}

                    <div>
                        <span id="js-item-price"></span>
                        <span id="js-price-list"></span>
                        <span id="js-price-diff"></span>
                    </div>

                    {{--                    Category --}}
                    <div class="mb-3">
                        <label for="item-category">Item category</label>
                        <select class="form-select" name="item_category" id="item-category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}} (/{{$category->slug}})</option>
                            @endforeach
                        </select>
                    </div>
                    {{--                    Badge --}}
                    <div class="mb-3">
                        <label for="Badge">Badge</label>
                        <select class="form-select" name="badge" id="Badge">
                            @foreach($badges as $badge)
                                <option style="background: {{$badge->color_hex}}" class="text-uppercase"
                                        value="{{$badge->id}}">{{$badge->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--                    Discount--}}
                    <div class="mb-3">
                        <label for="Discount" class="form-label">Discount in %</label>
                        <input type="text" value="{{ old('Discount') }}" placeholder="(optional)" class="form-control"
                               name="Discount" id="Discount">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="table-responsive">
                    <table class="table table-hover table-sm caption-top">
                        <caption>List of mystery boxes</caption>
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Tracking ID</th>
                            <th scope="col">Opened?</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($boxes as $box)
                            <tr>
                                <td>{{$box->id}}</td>
                                <td>{{$box->title}}</td>
                                <td>{{$box->tracking_id}}</td>
                                <td>{!! $box->is_opened ? '<span style="color:green;">Yes</span>' : '<span style="color:red;">No</span>'!!}</td>
                                <td>
                                    <a class="link-info fw-bold" href="{{route('box.show.single', $box->id)}}">
                                        See more
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <p>- N/A</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                {{--                <h6>Active price list options</h6>--}}
                {{--                <ul>--}}
                {{--                    @forelse($priceListOptions as $price)--}}
                {{--                        <li>{{$price->price}} <span><sub>лв.</sub></span></li>--}}
                {{--                    @empty--}}
                {{--                        <p>- N/A</p>--}}
                {{--                    @endforelse--}}
                {{--                </ul>--}}
            </div>
        </div>
    </div>
@endsection

