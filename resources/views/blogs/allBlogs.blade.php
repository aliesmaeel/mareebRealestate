@extends('layouts.master')

@section('title', 'Contact Us')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .blur-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(600px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .blur-card {
        position: relative;
        height: 300px;
        background-size: cover;
        background-position: center;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .blur-overlay {
        position: absolute;
        bottom: 10px;
        left: 10px;
        right: 10px;
        background-color: rgb(255 255 255 / .2);
        backdrop-filter: blur(20px);
        text-align: center;
        padding: 10px;
        color: white;
        border-radius: 10px;
    }

    .title {
        font-size: 18px;
        font-weight: bold;
        margin: 0;
    }

    .description {
        font-size: 14px;
        margin: 5px 0;
    }

    .read-more {
        font-size: 14px;
        color: #FFD700;
        font-weight: bold;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .blur-section {
            grid-template-columns: 1fr;
        }
    }
    .description_blog span{
        font-weight: bold;
        text-decoration: underline;
    }
</style>
@section('content')
    <div class="container" style="margin-top: 120px">

        <section class="blur-section">
            @foreach($blogs as $blog)
                <a href="{{route('get_blog_details',$blog->slug)}}">
                <div class="blur-card" style="position: relative;height: 350px;background-image: url({{asset('/storage/'.$blog->url)}});">
                    <div class="blur-overlay">
                        <h3 class="title">{{$blog->title}}</h3>
                        <p class="description_blog">
                            {!! Str::limit(strip_tags($blog->description), 60, ' ... <span>
 Read more
</span>
') !!}
                        </p>
                    </div>
                    <div class="blur-overlay" style="position: absolute;width: 120px;height:max-content;top: 10px;left: 10px">
                        {{ date('d M  Y', strtotime($blog->updated_at)) }}
                    </div>
                </div>
                </a>
            @endforeach
        </section>


    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
