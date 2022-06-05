@forelse($itemsInsideBox as $item)
    <div class="p-3 m-3">
        <img width="175" class="img-fluid d-block" src="{{asset('storage/' . $item->image)}}" alt="{{env('APP_NAME') . ' ' . $item->title}}">
        Title: {{$item->title}} <br/> Price: {{$item->price}} BGN
    </div>
@empty
    <h5>Няма свързани продукти!</h5>
@endforelse


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
