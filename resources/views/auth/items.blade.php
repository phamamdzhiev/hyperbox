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
                <h4 class="mb-3 fw-bold">Add new <u>item</u></h4>
                <form method="POST" action="{{route('item.add')}}" enctype="multipart/form-data">
                    @csrf
                    {{--                    title--}}
                    <div class="mb-3">
                        <label for="Title" class="form-label">Title</label>
                        <input type="text" class="form-control" value="{{ old('Title') }}" name="Title" id="Title">
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
                    {{--                    Real Price --}}
                    <div class="mb-3">
                        <label for="real_price" class="form-label">Real price</label>
                        <input type="text" class="form-control" value="{{ old('real_price') }}" name="real_price"
                               id="real_price">
                    </div>
                    {{--                    Website link --}}
                    <div class="mb-3">
                        <label for="link" class="form-label">Web link</label>
                        <input type="url" class="form-control" value="{{ old('link') }}" name="link"
                               id="link">
                    </div>
                    {{--                    Cat Number--}}
                    <div class="mb-3">
                        <label for="cat_number" class="form-label">Catalog number</label>
                        <input type="text" class="form-control" value="{{ old('cat_number') }}" name="cat_number"
                               id="cat_number">
                    </div>
                    {{--                    Owner name--}}
                    <div class="mb-3">
                        <label for="owner_number" class="form-label">Owner number</label>
                        <input type="text" class="form-control" value="{{ old('owner_number') }}" name="owner_number"
                               id="owner_number">
                    </div>
                    {{--                    Owner email--}}
                    <div class="mb-3">
                        <label for="owner_email" class="form-label">Owner email</label>
                        <input type="email" class="form-control" value="{{ old('owner_email') }}" name="owner_email"
                               id="owner_email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="table-responsive">
                    <table class="table table-hover table-sm caption-top">
                        <caption>List of items</caption>
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
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

