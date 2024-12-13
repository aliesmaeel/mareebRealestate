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
            <div class="title" style="font-weight: bold">Meet Our Team</div>

            <div style="display:flex;justify-content:center;align-items:center">
                <div class="grid-container js-filter-grid">
                    @foreach($teams as $team)
                        <div class="team-item filter_teams_items" data-section="{{ $team->section->name }}">
                            @include('components.team')
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
