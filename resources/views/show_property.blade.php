@extends('layouts.master')
@section('title', 'Show Property')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    @media screen and (min-width: 1600px) {
        .container {
            max-width: 1416px;
        }
    }
</style>
{{-- main page --}}
@section('content')
<div class="swiper-popup" style="display: none;">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <div class="swiper-container-popup">
            <div class="swiper-wrapper">
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<div class="show_property">
    <div style="position:relative; height: 80%;">
        <div class="flex_banner">

            <div class=" rest">
                <img src="{{asset('/storage').'/'.$property->image }}">
            </div>

            @foreach($property->propertyImages as $image)
                <div class=" rest">
                    <img src="{{asset('/storage').'/'.$image->image }}">
                </div>

            @if($loop->iteration == count($property->propertyImages))
                    <div  class=" show-more">
                        <img src="{{asset('/storage').'/'.$property->image}}">

                        <div class="overlay">
                            <div>Show More</div>
                        </div>
                    </div>

            @endif

            @endforeach

        </div>
    </div>
    <!-- Popup for Swiper -->

    <div class="property-page container">
        <div class=" content">
            <div class="col boxes">
                <div class="title">{{$property->title}}</div>
                <div class="price title">AED {{$property->price}}</div>
                <div class="box">
                    <div class="category">{{$property->type}} <a href="#">Rent</a></div>
                    <div class="flex flex-between">
                        <div>{{$property->title}}, {{$property->community->name}}, {{$property->city}}</div>
                        <div class="flex flex-start">
                            <div>
                                <svg class="svg-inline--fa fa-eye-slash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye-slash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="#927c75" d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z">
                                    </path>
                                </svg>
                                <span>3</span>
                            </div>
                            <a href="#">
                                <svg class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="#927c75" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="#927c75" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="svg-inline--fa fa-pinterest" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg="">
                                    <path fill="#927c75" d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="svg-inline--fa fa-whatsapp" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="#927c75" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="#927c75" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box desc" >
                {!! $property->description !!}
                </div>
                <div class="box address">
                    <div class="first toggle">
                        <div>Address</div>
                        <div >
                            <img src="/images/arrow.png" class="toggle-arrow">
                        </div>
                    </div>
                    <div class="second show">
                        <div>City: {{$property->city}}</div>
                        <div>Country: {{$property->country ?? 'UAE'}}</div>
                    </div>
                </div>
                <div class="box details">
                    <div class="first toggle">
                        <div>Details</div>
                        <div >
                            <img src="/images/arrow.png" class="toggle-arrow">
                        </div>
                    </div>
                    <div class="second show">
                        <div>Price: AED {{$property->price}}</div>
                        <div>Property Size: {{$property->size}} ft<sup>2</sup></div>
                    </div>
                </div>
                <div class="box map">
                    <div class="first toggle">
                        <div>Map</div>
                        <div >
                            <img src="/images/arrow.png" class="toggle-arrow">
                        </div>
                    </div>
                    <div class="second show">
                        <iframe
                            src="https://www.google.com/maps?q={{$property->latitude}},{{$property->longitude}}&hl=es;z=14&output=embed"
                            width="100%"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>

                    </div>
                </div>
            </div>
            <div class="" id="primary">
                <div class="agent_unit">
                    <a href="#" class="img_container">

                        <img src="{{asset('/storage/').'/'.$property->agent->image}}">
                    </a>
                    <a href="#" class="name">
                        {{$property->agent->name}}
                    </a>
                    <a href="#" class="agent_position">
                        {{$property->agent->position}}
                    </a>
                    <div class="agent_detail">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                            <path fill="#927c75" d="M80 0C44.7 0 16 28.7 16 64V448c0 35.3 28.7 64 64 64H304c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H80zm80 432h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                </path>
                            </svg>
                        <a href="#">{{$property->agent->phone}}</a>
                    </div>

                    <div class="agent_detail">
                        <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="#927c75" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                            </path>
                        </svg>
                        <a href="#">{{$property->agent->email}}</a>
                    </div>
                    <div class="agent_detail">
                        <svg class="svg-inline--fa fa-whatsapp" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="#927c75" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                            </path>
                        </svg>
                        <a href="#">{{$property->agent->phone}}</a>
                    </div>
                </div>

                <div class="agent_unit">
                    <div style="padding: 0 0.8rem">
                    <div class="contact-me">Contact Me</div>

                    <div id="schedule_meeting" onclick="display3()">Schedule a showing?</div>
                    <form method="post" action="https://savoirproperties.com/sendtxtmailproperty" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="Zfd2we9RA4WGLFOHmak7hIIWY9joQYWxJnthOrKN">
                        <div id="schedule" hidden="">
                            <input type="text" id="datepicker" name="day" class="form-control" placeholder="Day">

                            <select class="form-control form-select" aria-label="Default select example" name="schedule_hour" id="schedule_hour">
                                <option value="0">Time</option>
                                <option value="7:00">7:00</option>
                                <option value="7:15">7:15</option>
                                <option value="7:30">7:30</option>
                                <option value="7:45">7:45</option>
                                <option value="8:00">8:00</option>
                                <option value="8:15">8:15</option>
                                <option value="8:30">8:30</option>
                                <option value="8:45">8:45</option>
                                <option value="9:00">9:00</option>
                                <option value="9:15">9:15</option>
                                <option value="9:30">9:30</option>
                                <option value="9:45">9:45</option>
                                <option value="10:00">10:00</option>
                                <option value="10:15">10:15</option>
                                <option value="10:30">10:30</option>
                                <option value="10:45">10:45</option>
                                <option value="11:00">11:00</option>
                                <option value="11:15">11:15</option>
                                <option value="11:30">11:30</option>
                                <option value="11:45">11:45</option>
                                <option value="12:00">12:00</option>
                                <option value="12:15">12:15</option>
                                <option value="12:30">12:30</option>
                                <option value="12:45">12:45</option>
                                <option value="13:00">13:00</option>
                                <option value="13:15">13:15</option>
                                <option value="13:30">13:30</option>
                                <option value="13:45">13:45</option>
                                <option value="14:00">14:00</option>
                                <option value="14:15">14:15</option>
                                <option value="14:30">14:30</option>
                                <option value="14:45">14:45</option>
                                <option value="15:00">15:00</option>
                                <option value="15:15">15:15</option>
                                <option value="15:30">15:30</option>
                                <option value="15:45">15:45</option>
                                <option value="16:00">16:00</option>
                                <option value="16:15">16:15</option>
                                <option value="16:30">16:30</option>
                                <option value="16:45">16:45</option>
                                <option value="17:00">17:00</option>
                                <option value="17:15">17:15</option>
                                <option value="17:30">17:30</option>
                                <option value="17:45">17:45</option>
                                <option value="18:00">18:00</option>
                                <option value="18:15">18:15</option>
                                <option value="18:30">18:30</option>
                                <option value="18:45">18:45</option>
                                <option value="19:00">19:00</option>
                                <option value="19:15">19:15</option>
                                <option value="19:30">19:30</option>
                                <option value="19:45">19:45</option>
                            </select>
                        </div>
                        <input name="name" id="agent_contact_name" type="text" placeholder="Your Name" aria-required="true" class="form-control">
                        <input type="text" name="email" class="form-control" id="agent_user_email" aria-required="true" placeholder="Your Email">
                        <input type="text" name="phone" class="form-control" id="agent_phone" placeholder="Your Phone">
                        <textarea id="agent_comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true">I'm interested in  [ Available Now | Single Row | Close to Golf Club]         </textarea>
                        <input hidden="" type="text" value="VI3108" name="ref_number">
                        <input type="submit" class="wpresidence_button agent_submit_class " id="agent_submit" value="Send Email">
                        <input name="prop_id" type="hidden" id="agent_property_id" value="29022">
                        <input name="prop_id" type="hidden" id="agent_id" value="27830">
                        <input type="hidden" name="contact_ajax_nonce" id="agent_property_ajax_nonce" value="9337cfcd6e">
                    </form>
                    </div>
                </div>

                <div class="agent_unit">
                  <div class="title">Related Properties</div>
                    @foreach($relatedProperties as $property)
                        <a href="{{route('property.show',['slug'=>$property->slug])}}" >
                            <div  style="display: flex;gap: 15px;padding: 2rem 0.9rem">
                                <img width="118px" src="{{asset('/storage').'/'.$property->image}}">
                                <div>
                                    <div class="over-text-hide">{{$property->title}}</div>
                                    <div class="price">AED {{$property->price}}</div>
                                </div>
                            </div>
                        </a>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('footer')
    @include('layouts.footer')
@endsection
