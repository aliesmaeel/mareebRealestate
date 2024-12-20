@extends('layouts.master')

@section('title', 'Search Result')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

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
                <div class="title" style="text-align: center">
                    Available Properties
                </div>
                <div style="display: flex; justify-content: center; align-items: center">
                    <div class="available_property">
                        @foreach($properties as $type => $groupedProperties)
                            <div>
                                <h3>{{ $type }}</h3> <!-- Display the type (e.g., Labor Camps) -->
                                <div class="grid-container">
                                    @foreach ($groupedProperties as $property)
                                        @include('components.property') <!-- Include your property card -->
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
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
