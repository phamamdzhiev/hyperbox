<div class="box-singleton position-relative">
    @if(!is_null($badge))
        <div class="badge position-absolute text-uppercase {{strtolower($badge)}}">
            {{strtoupper($badge)}}
        </div>
    @endif
    <div id="box-image-wrapper">
        <div class="position-relative">
            <a href="{{route('homepage.box', $id)}}">
                <img class="img-fluid"
                     src="https://static.ancientgaming.io/images/HypeDrop_Summer%20trees_Box_Design_Export.png" alt="">
                <div class="overlay-icon">
                    <svg width="28" height="28" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8.5" cy="8.5" r="6" stroke="currentColor" stroke-width="3"></circle>
                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                              d="M12.1484 13.7676L14.2698 11.6463L18.8053 16.1818L16.684 18.3031L12.1484 13.7676Z"></path>
                    </svg>
                    <span id="blurred"></span>
                </div>
            </a>
        </div>
    </div>
    <div id="box-actions" class="mt-4">
        <h6 class="fw-bold text-uppercase heading">{{$title}}</h6>
        <p id="category">{{$category}}</p>
        <a href="{{route('homepage.box', $id)}}">
            <p id="price">{{$price}} BGN</p>
        </a>
    </div>
</div>
