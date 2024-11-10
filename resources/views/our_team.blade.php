@extends('layouts.master')

@section('title', 'Teams')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')

<div class="container team">
    <div class="content">
        <div class="title">OUR TEAM</div>

        <select class="browser-default video-filter" id="section-filter"
                >
                <option value="" disabled selected>Choose option</option>
                @foreach($sections as $section)
                <option value="{{$section->name}}">{{$section->name}}</option>
                @endforeach
        </select>

        <div class="grid-container">
            @foreach($teams as $team)
                @include('components.team')
            @endforeach
        </div>
    </div>
</div>
@endsection

{{-- footer --}}
{{-- @section('footer')
    @include('layouts.footer')
@endsection --}}
