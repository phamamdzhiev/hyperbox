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
                <h4 class="mb-3 fw-bold">Add new <u>price</u></h4>
                <form method="POST" action="{{route('price.list.add')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="price" class="form-label">Price (in BGN):</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="table-responsive">
                    <table class="table table-hover table-sm caption-top">
                        <caption>List of predefined prices</caption>
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($priceListOptions as $price)
                            <tr>
                                <td>{{$price->id}}</td>
                                <td>{{$price->price}}<sup> лв.</sup></td>
                            </tr>
                        @empty
                            <p>- N/A</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

