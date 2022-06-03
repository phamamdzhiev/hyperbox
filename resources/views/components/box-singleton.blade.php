<div class="box-singleton position-relative">
    @if(!is_null($badge))
        <div class="badge position-absolute text-uppercase {{strtolower($badge)}}">
            {{strtoupper($badge)}}
        </div>
    @endif
    <div id="box-image-wrapper">
        <a href="/">
            <img class="img-fluid"
                 src="https://static.ancientgaming.io/images/HypeDrop_Summer%20trees_Box_Design_Export.png" alt="">
        </a>
    </div>
    <div id="box-actions" class="mt-4">
        <h6 class="fw-bold text-uppercase heading">{{$title}}</h6>
        <p id="category">{{$category}}</p>
        <a href="/">
            <p id="price">{{$price}} BGN</p>
        </a>
    </div>
</div>
