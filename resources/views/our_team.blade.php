@extends('layouts.master')

@section('title', 'Teams')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
