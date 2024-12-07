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

            <select class="browser-default video-filter" id="section-filter">
                <option value="All"  selected>All</option>
                @foreach($sections as $section)
                    <option value="{{ $section->name }}">{{ $section->name }}</option>
                @endforeach
            </select>

            <div class="grid-container js-filter-grid">
                @foreach($teams as $team)
                    <div class="team-item js-filter-grid-item" data-section="{{ $team->section->name }}">
                        @include('components.team')
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
