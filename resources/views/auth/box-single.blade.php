@extends('layouts.admin')

@section('admin')
    <div class="container">
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
    </div>
@endsection

