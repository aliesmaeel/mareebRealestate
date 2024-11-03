@extends('layouts.master')
@section('title', 'Show Property')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
<div class="swiper-popup" style="display: none;">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <div class="swiper-container-popup">
            <div class="swiper-wrapper">
                {{-- <div class="swiper-slide">
                    <img src="https://images.goyzer.com/uf/5023/unit/3015/LA-CAPITAL-Beach-Vista-Tower-1-02132024-105002.jpg?group=5023%27">
        
                </div> --}}
                
            </div>
            <!-- Swiper navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<div class="show_property container">
    <div style="position:relative; height: 100vh;">
        <div class="flex_banner">
            <div class="first">
                <img src="https://images.goyzer.com/uf/5023/unit/3015/LA-CAPITAL-Beach-Vista-Tower-1-02132024-105002.jpg?group=5023%27">
            </div>
            <div class="rest">  
                <img src="https://cms.savoirproperties.com/storage//images/default.jpg" >
            </div>
            <div class="rest">  
                <img src="https://cms.savoirproperties.com/storage//images/default.jpg" >
            </div>
            <div class="rest">  
                <img src="https://cms.savoirproperties.com/storage//images/default.jpg" >
            </div>
            <div class="rest">  
                <img src="https://cms.savoirproperties.com/storage//images/default.jpg" >
            </div>
            <div class="rest">  
                <img src="https://cms.savoirproperties.com/storage//images/default.jpg" >
            </div>
            <div class="rest">  
                <img src="https://cms.savoirproperties.com/storage//images/default.jpg" >
            </div>
            <div class="rest">  
                <img src="https://cms.savoirproperties.com/storage//images/default.jpg" >
            </div>
            <div  class=" show-more">
                 <img src="https://images.goyzer.com/uf/5023/unit/3015/LA-CAPITAL-Beach-Vista-Tower-1-02132024-105002.jpg?group=5023%27">
            
                 <div class="overlay">
                    <div>Show More</div>
                 </div>
            </div>
            
        </div>
    </div>
    <!-- Popup for Swiper -->
  
    <div class="property-page">
        <div class="content">
            <div class="col boxes">
                <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit</div>
                <div class="price title">AED 720,000</div>
                <div class="box">
                    <div class="category">Apartment in <a href="#">Rent</a></div>
                    <div class="flex flex-between">
                        <div>Beach Vista Tower 1, Dubai Harbour, Dubai</div>
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
                <div class="box desc">
                    <div class="title">Description</div>
                    <div class="">
                        Savoir Prive Properties presents this Stunning 4-Bedroom Apartment for rent!
                        Experience coastal luxury in this high-floor, four-bedroom apartment for rent at Emaar Beachfront. Spanning 2,343 sq. ft., this spacious residence offers unparalleled views of the iconic Palm Jumeirah and breathtaking beach vistas from every room, ideal for those who appreciate both elegance and serenity.
                    </div>
                    <div>
                        Property Features:
                        <ul>
                            <li>4 Bedrooms: Spacious layout for family living and hosting</li>
                            <li>4 Bedrooms: Spacious layout for family living and hosting</li>
                            <li>4 Bedrooms: Spacious layout for family living and hosting</li>
                            <li>4 Bedrooms: Spacious layout for family living and hosting</li>
                            <li>4 Bedrooms: Spacious layout for family living and hosting</li>
                            <li>4 Bedrooms: Spacious layout for family living and hosting</li>
                        </ul>

                    </div>
                    <div>
                        About Emaar Beachfront:
                    </div>
                    <div>
                        Emaar Beachfront is a prestigious, gated community that offers a perfect blend of seaside living 
                        with urban convenience. Residents enjoy private beach access, landscaped parks, and upscale dining and retail options just steps away. The building features state-of-the-art amenities, including an infinity pool, 
                        fully-equipped gym, and direct beach access, ensuring a five-star lifestyle right at home.
                    </div>
                    <div>
                        Location Highlights:
                    </div>
                    <div>
                        Emaar Beachfront is a prestigious, gated community that offers a perfect blend of seaside living 
                        with urban convenience. Residents enjoy private beach access, landscaped parks, and upscale dining and retail options just steps away. The building features state-of-the-art amenities, including an infinity pool, 
                        fully-equipped gym, and direct beach access, ensuring a five-star lifestyle right at home.
                    </div>
                </div>
                <div class="box address">
                    <div class="first toggle">
                        <div>Address</div>
                        <div >
                            <img src="/images/arrow.png" class="toggle-arrow">
                        </div>
                    </div>
                    <div class="second hidden">
                        <div>City:Dubai</div>
                        <div>Country:Country</div>
                    </div>
                </div>
                <div class="box details">
                    <div class="first toggle">
                        <div>Details</div>
                        <div >
                            <img src="/images/arrow.png" class="toggle-arrow">
                        </div>
                    </div>
                    <div class="second hidden">
                        <div>Price: AED 720,000</div>
                        <div>Property Size: 2,343 ft<sup>2</sup></div>
                        <div>Bedrooms: 4</div>
                        <div>Bedrooms: 4</div>
                        <div>Bedrooms: 4</div>
                    </div>
                </div>
                <div class="box map">
                    <div class="first toggle">
                        <div>Map</div>
                        <div >
                            <img src="/images/arrow.png" class="toggle-arrow">
                        </div>
                    </div>
                    <div class="second hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7226.5199115667965!2d55.139887973812904!3d25.093060177778085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b94465c8dd3%3A0xfa51bb0fa36e936f!2sDubai%20Harbour!5e0!3m2!1sen!2sus!4v1730541240984!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col" id="primary">
                <div class="agent_unit">
                    <a href="#" class="img_container">
                        <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/BL3KVA6yQZpSiiTtd60nsxjC9VNtvbaI5ZnRzSYG.jpg">
                    </a>
                    <a href="#" class="name">
                        Nain Mendoza
                    </a>
                    <a href="#" class="agent_position">
                        Senior Global Real Estate Advisor
                    </a>
                    <div class="agent_detail">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                            <path fill="#927c75" d="M80 0C44.7 0 16 28.7 16 64V448c0 35.3 28.7 64 64 64H304c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H80zm80 432h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                </path>
                            </svg>
                        <a href="#">+971 528770591</a>
                    </div>

                    <div class="agent_detail">
                        <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="#927c75" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                            </path>
                        </svg>
                        <a href="#">nain@savoirproperties.com</a>
                    </div>
                    <div class="agent_detail">
                        <svg class="svg-inline--fa fa-whatsapp" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="#927c75" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                            </path>
                        </svg>
                        <a href="#">+971 528770591</a>
                    </div>
                </div>

                <div class="agent_unit">
                  <div class="title">Property for Sale</div>
                  <a href="#">
                    <div class="row">
                        <img src="https://images.goyzer.com/uf/5023/unit/3000/GCS00694-Edit.jpg?group=5023">
                        <div>
                            <div class="over-text-hide">Stunning Palm Views | Upgraded</div>
                            <div class="price">AED 38,000,000</div>
                        </div>
                     </div>
                  </a>
                  <a href="#">
                    <div class="row">
                        <img src="https://images.goyzer.com/uf/5023/unit/3000/GCS00694-Edit.jpg?group=5023">
                        <div>
                            <div class="over-text-hide">Stunning Palm Views | Upgraded</div>
                            <div class="price">AED 38,000,000</div>
                        </div>
                     </div>
                  </a>
                  <a href="#">
                    <div class="row">
                        <img src="https://images.goyzer.com/uf/5023/unit/3000/GCS00694-Edit.jpg?group=5023">
                        <div>
                            <div class="over-text-hide">Stunning Palm Views | Upgraded</div>
                            <div class="price">AED 38,000,000</div>
                        </div>
                     </div>
                  </a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection