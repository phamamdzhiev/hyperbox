<div class="categories mb-5">
    <div class="box-category {{is_null(request('category')) ? 'active': ''}}">
        <a href="{{route('default')}}" class="text-uppercase">
          ВСИЧКИ
        </a>
    </div>
    @foreach($categories as $c)
        <div class="box-category {{(request('category') == $c->id) ? 'active' : '' }}">
            <a href="{{route('default', ['category'=>$c->id])}}" class="text-uppercase">
                {{$c->name}}
            </a>
        </div>
    @endforeach
</div>
