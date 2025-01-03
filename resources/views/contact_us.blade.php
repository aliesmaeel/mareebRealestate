@extends('layouts.master')

@section('title', 'Contact Us')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection
<style>
    .container.contact-us .content .col:first-child{
        background-image: url({{asset('/storage/'.$contact->image)}});
    }
    .contact-us-page h1,h2,h3{
        font-family: Theseasons !important;
    }



</style>
{{-- main page --}}
@section('content')


<div class="container contact-us contact-us-page">
    <div class="content">
        <div class="col">

         {!! $contact->description_text !!}
            <div class="info social">
                <div class="title" style="font-size: 24px;letter-spacing: 2px">Follow us on social media</div>
                <div style="width: 100%; display: flex;justify-content: space-around">
            @foreach($socialMediaLinks as $link)
                <a style="width: 30px;height: 30px" href="{{$link->link}}" target="_blank">
                    <img style="width: 60%;height: 100%" src="{{asset('storage/'.$link->image)}}" alt="social-media">
                </a>

            @endforeach

                </div>
            </div>
        </div>
        <div class="col">

            @include('components.form')
        </div>
    </div>
</div>
@endsection

{{-- footer --}}
@section('footer')
    @include('layouts.footer')
@endsection
