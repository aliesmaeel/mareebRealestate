@extends('layouts.master')

@section('title', 'Search Result')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection


<script>


    document.addEventListener('DOMContentLoaded', function() {
        @if(isset($scrollToSection))

        const sectionId = "{{$scrollToSection}}";
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
        @endif
    });
</script>

{{-- main page --}}
@section('content')
<div class="container search-result">
    <div style="position:relative;height: 100vh;">
        <img src="{{asset('/storage/'.$setting->popup_image)}}" class="img_desktop">
        <div class="search-realestate">
            @include('components.searchProperty')
        </div>
    </div>
    <div class="test" style="height: 50px" id="available_property"></div>
    <div class="available_property"  style="min-height: 1000px">
        <div class="content">
            <div class="title">
                Available Properties
            </div>
            <div style="display:flex;justify-content:center;align-items:center">
                <div class="grid-container" >
                    @foreach($searchResults as $property)
                        @include('components.property')
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
