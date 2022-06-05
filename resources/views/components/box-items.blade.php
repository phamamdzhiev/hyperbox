<div class="item-opening-wrapper my-3">
    @forelse($itemsInsideBox as $item)
        <div class="item p-3">
            <div class="img-wrapper mb-3">
                <img class="img-fluid" src="{{asset('storage/' . $item->image)}}"
                     alt="{{env('APP_NAME') . ' ' . $item->title}}">
            </div>
            <div class="info">
                <h5 class="fw-bold text-white">{{$item->title}}</h5>
                <p class="">
                    {{$item->desc}}
                </p>
                <p id="price">
                    {{$item->price}} BGN
                </p>
            </div>
        </div>
    @empty
        <h5>Няма свързани продукти!</h5>
    @endforelse
</div>


{{--
   +"id": 4
      +"title": "test 2"
      +"desc": "test 2"
      +"image": "item-images/Mua8UiisNFEtVPvlQJIGBPRMmb5jfOImb6vmr1yG.jpg"
      +"price": "111"
      +"shop_category_number": "3123ABC"
      +"owner_number": "123123"
      +"owner_email": "a@a.bg"
      +"link": "https://b-b.condorsrltech.com/de_AT/?feature-branch=petar_hide_temp_promos"
      +"tracking_id": "1654400656EGAibhrs"
      +"category_id": 11
      +"box_id": 1
      +"item_id": 3--}}
