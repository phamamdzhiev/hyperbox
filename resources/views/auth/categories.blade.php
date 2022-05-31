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
                <h4 class="mb-3 fw-bold">Add new <u>category</u></h4>
                <form method="POST" action="{{route('box.category.add')}}">
                    @csrf
                    {{--name--}}
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="Name" id="Name">
                    </div>
                    {{-- slug--}}
                    <div class="mb-3">
                        <label for="Slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="Slug" id="Slug">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="table-responsive">
                    <table class="table table-hover table-sm caption-top">
                        <caption>List of categories</caption>
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>/{{$category->slug}}</td>
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
