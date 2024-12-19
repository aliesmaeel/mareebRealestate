<div class="card">
    <a href="{{route('property.show',['slug' => $property->slug])}}" class="available_property_swiper">
        <div class="swiper-wrapper">
            @foreach($property->propertyImages as $image)
                <div class="swiper-slide">
                    <img src="{{asset('/storage').'/'.$image->image}}">
                </div>

            @endforeach
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </a>
    <a href="{{route('property.show',['slug' => $property->slug])}}">
        <div class="name_property">{{$property->title}}</div>
    </a>
    <div class="price_property">{{$property->price}} AED </div>
    <div class="flex location_property">
        <svg class="svg-inline--fa fa-location-pin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-pin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
            <path fill="#927c75" d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z">
            </path>
        </svg>
        <a href="{{route('property.show',['slug' => $property->slug])}}">
            <div>{{$property->title}}, {{$property->community->name}}, {{$property->city}} </div>
        </a>
    </div>
    <div class="details_property">
        <div class="flex">
            <svg class="svg-inline--fa fa-map" aria-hidden="true" focusable="false" data-prefix="far" data-icon="map" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                <path fill="#927c75" d="M565.6 36.2C572.1 40.7 576 48.1 576 56V392c0 10-6.2 18.9-15.5 22.4l-168 64c-5.2 2-10.9 2.1-16.1 .3L192.5 417.5l-160 61c-7.4 2.8-15.7 1.8-22.2-2.7S0 463.9 0 456V120c0-10 6.1-18.9 15.5-22.4l168-64c5.2-2 10.9-2.1 16.1-.3L383.5 94.5l160-61c7.4-2.8 15.7-1.8 22.2 2.7zM48 136.5V421.2l120-45.7V90.8L48 136.5zM360 422.7V137.3l-144-48V374.7l144 48zm48-1.5l120-45.7V90.8L408 136.5V421.2z">
                </path>
            </svg>
            <div>{{$property->size}} ft <sup>2</sup></div>
        </div>
    </div>
    <div class="property_owner">
        <div class="flex">
            <img class="person" src="{{asset('/storage').'/'.$property->agent->image}}">
            <a class="name" href="#">
                {{$property->agent->name}}
            </a>
        </div>
        <a href="{{route('property.show',['slug' => $property->slug])}}">
            <img src="/images/icons8-share-30.png">
        </a>
        <a class="pos_abs status">
            {{$property->type}}
        </a>
    </div>
</div>
