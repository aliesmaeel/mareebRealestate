@foreach($propertiesWeManage as $property)
    <div class="col" style="text-align: left">
        <div class="img-container">
            <img style="height: 300px"  src="{{asset('/storage').'/'.$property->image}}">
        </div>

        <div class="price">AED {{ number_format($property->price, 0, '', ',') }}
        </div>
        <a class="desc">
            <div style="font-size: 20px">
                {{$property->title}}
            </div>
        </a>
        <div class="location">
            <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                <path fill="rgb(47 30 26)" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                </path>
            </svg>
            <div>
                {{$property->community->name}} , {{$property->city}}
            </div>
        </div>
    </div>

@endforeach


