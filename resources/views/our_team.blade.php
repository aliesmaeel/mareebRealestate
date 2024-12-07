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
            <div class="title" style="font-weight: bold">Meet Our Expert Team</div>
            <div class="desc_team">
               Each team member bring a unique skill set to Provident Dubai . We use those skills to provide you with the best possible Estate Agent service.
            </div>
            <div class="browser-default video-filter" id="section-filter">
                <div class="btn_section_filter">All</div>
                @foreach($sections as $section)
                    <div class="btn_section_filter">{{ $section->name }}</div>
                @endforeach
            </div>
            <div style="display:flex;justify-content:center;align-items:center">
                <div class="grid-container js-filter-grid">
                    @foreach($teams as $team)
                        <div class="team-item filter_teams_items" data-section="{{ $team->section->name }}">
                            <a href="#">
                            @include('components.team')
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
