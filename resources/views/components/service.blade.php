@foreach($propertiesWeManage as $property)
    <div class="col">
        <div class="img-container">
            <img src="{{asset('/storage').'/'.$property->image}}">
        </div>
        <div class="price">AED {{$property->price}}</div>
        <a class="desc">
            <div>
                {{$property->title}}
            </div>
        </a>
    </div>

@endforeach


