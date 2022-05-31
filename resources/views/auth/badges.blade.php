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
                <h4 class="mb-3 fw-bold">Add new <u>badge</u></h4>
                <form method="POST" action="{{route('badge.add')}}">
                    @csrf
                    {{--name--}}
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" value="{{old('Name')}}" class="form-control" name="Name" id="Name">
                    </div>
                    {{-- color hex--}}
                    <div class="mb-3">
                        <label for="color" class="d-block form-label">Color</label>
                        <input type="color" name="color" id="color">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="table-responsive">
                    <table class="table table-hover table-sm caption-top">
                        <caption>List of badges</caption>
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Color Hex</th>
                            <th scope="col">Color Preview</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($badges as $badge)
                            <tr>
                                <td>{{$badge->id}}</td>
                                <td class="fw-bold text-uppercase">{{ strtoupper($badge->name) }}</td>
                                <td>{{$badge->color_hex}}</td>
                                <td style="background: {{$badge->color_hex}}"></td>
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
