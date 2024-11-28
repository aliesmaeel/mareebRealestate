@extends('layouts.master')

@section('title', 'Contact Us')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@section('content')
    <div class="container" style="margin-top: 120px;">
        <div>
            <h1 style="text-align: center;font-family: Theseasons;font-weight: bold">{{$blog->title}}</h1>
        </div>
        <div style="display: flex;flex-direction: column" >
            <div style="height: 500px;background-image: url({{asset('/storage/'.$blog->url)}})">

            </div>
            <div style="background-color: #f2f2f298;padding: 8px">
                {!!  $blog->description!!}
            </div>
        </div>



    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
