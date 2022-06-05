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
            <div class="col-sm-8">
                <img style="max-width: 400px;"
                     class="img-fluid img-thumbnail" src="{{asset('storage/' . $box->image)}}"
                     alt="{{$box->title}}">
            </div>
            <div class="col-sm-4"></div>
        </div>
        <h4 class="mt-3">
            ({{$box->id}}) {{$box->title}}
            <i>
                <small class="text-black-50">
                    ({{$box->tracking_id}})
                </small>
            </i>
        </h4>
        <p>
            {{$box->desc}}
        </p>
        <ul class="list-group">
            <li class="list-group-item">Is Opened? {{$box->is_opened ? 'Yes' : 'No'}}</li>
            <li class="list-group-item">Is Ordered? {{$box->is_ordered ? 'Yes' : 'No'}}</li>
            <li class="list-group-item">Is Shipped? {{$box->is_shipped ? 'Yes' : 'No'}}</li>
        </ul>
        <div class="my-5">
            <h4>Actions</h4>
            <div class="mb-3">
                <form action="{{route('box.select.items')}}" method="POST">
                    @csrf
                    <label for="box_items">Choose box items that can be won</label>
                    <select class="form-select" size="5" name="items[]" id="box_items" multiple>
                        @foreach($items as $item)
                            <option value="{{$item->id}}">
                                {{$item->title}} | {{$item->price}} BGN
                            </option>
                        @endforeach
                    </select>
                    <input type="hidden" value="{{$box->id}}" name="box_id">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

