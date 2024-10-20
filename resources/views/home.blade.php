
@extends('layouts.master')

@section('title', 'HomePage')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')
<div class="container home-page">
    <div style="position:relative;height: 100vh;">
        <video autoplay muted playsinline loop class="video-banner">
            <source src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/video/web_new.mp4" type="video/mp4"></source>
        </video>
        <div class="search-realestate">
            <div class="city-names">Search Luxury Homes In <span id="city-name">MMM</span></div>
            <form>
                {{-- search --}}
                <div class="input-search">
                    <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="#212529" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                        </path>
                    </svg>
                    <input type="search" placeholder="Search Country, City, Area Or Community">
                </div>
                {{-- rent --}}
                <div class="dropdown">
                    <div class="rent-option">
                        <div>Rent</div>
                        <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="#212529" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path>
                        </svg>
                    </div>
                    <div class="abs abs-rent">
                        <div class="flex col">
                            <div class="title">Interested to</div>
                            <div class="group-options">
                                <div class="option">
                                    <div class="custom-radio" data-value="buy">Buy</div>
                                    <input type="radio" value="buy" name="interestd_status" style="display: none;">
                                </div>
                                <div class="active option">
                                    <div class="custom-radio" data-value="rent">Rent</div>
                                    <input type="radio" value="rent" name="interestd_status" style="display: none;">
                                </div>
                                <input type="hidden" id="interestd_status">
                            </div>
                            <div class="title">Property status</div>
                            <div class="group-options">
                                <div class="option">
                                    <div class="custom-radio" data-value="All">All</div>
                                    <input type="radio" value="All" name="property_status" style="display: none;">
                                </div>
                                <div class="option">
                                    <div class="custom-radio" data-value="Ready">Ready</div>
                                    <input type="radio" value="Ready" name="property_status" style="display: none;">
                                </div>
                                <div class="active option">
                                    <div class="custom-radio" data-value="Off-plane">Off-plane</div>
                                    <input type="radio" value="Off-plane" name="property_status" style="display: none;">
                                </div>
                                <input type="hidden" id="property_status">
                            </div>
                            <div class="reset_done">
                                <div class="reset">Reset</div>
                                <div class="done">Done</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                {{-- type --}}
                <div class="dropdown">
                    <div class="type-option">
                        <div>Type</div>
                        <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="#212529" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path>
                        </svg>
                        <input type="hidden" class="selected-type" name="type">
                    </div>
                  
                </div>
                 {{-- bedroom --}}
                 <div class="dropdown">
                    <div class="bedroom-option">
                        <div>Bedrooms</div>
                        <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="#212529" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path>
                        </svg>
                        <input type="hidden" class="selected-bedroom" name="bedroom">
                    </div>
                  
                </div>
                {{-- price --}}
                <div class="dropdown">
                    <div class="bedroom-option">
                        <div>Price</div>
                        <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="#212529" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path>
                        </svg>
                        <input type="hidden" class="selected-price" name="price">
                    </div>
                  
                </div>
                <input type="submit" value="Submit" class="submit">
            </form>
        </div>
</div>
</div>

@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection