@extends('layouts.master')

@section('title', 'Search Result')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection
<style>
    .global-projects {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }
    .project-card {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }
    .project-card img {
        width: 100%;
        height: 370px;
        display: block;
    }
    .project-card .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }



    .overlay h2 {
        margin: 0;
        font-size: 24px;
        color: white;
        font-family: 'Theseasons' !important;
        font-weight: bold;
    }
    .overlay a {
        color: #fff !important;
        font-family: 'Optima';
        border: none;
        background-color: transparent;
        border-radius: 0;
        margin-top: 10px;
        padding: 0; /* Start with zero padding */
        text-decoration: none;
        width: fit-content;
        font-size: 14px;
        line-height: 14px;
        overflow: hidden;
        height: 0;
        display: flex;
        align-items: center;
        transition: height 0.4s ease-in-out, padding 0.4s ease-in-out, border 0.4s ease-in-out;
    }

    .project-card:hover .overlay a {
        height: 45px;
        padding: 0px 20px; /* Smoothly transition padding */
        border: 1px solid #fff; /* Include border in transition */
    }



</style>
{{-- main page --}}
@section('content')
    <div class="container search-result">
        <div style="position:relative;height: 100vh;">
            <img src="https://cms.savoirproperties.com/storage//images/default.jpg" class="img_desktop">
            <div class="search-realestate">
                @include('components.seachProperty')
            </div>
        </div>
        <div class="available_property">
            <div class="content">
                <section>
                    <h1 style="font-family: Theseasons">Our Properties</h1>
                    <div class="global-projects">
                        @foreach($properties as $property)

                                <div class="project-card">
                                    <img src="{{asset('/storage/').'/'.$property?->image}}" alt="Bulgaria">
                                    <div class="overlay">
                                        <h2>{{strtoupper($property->type)}}</h2>
                                        <a href="{{$property->url}}">Show Properties</a>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection


{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
