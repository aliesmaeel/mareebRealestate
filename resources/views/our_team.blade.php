@extends('layouts.master')

@section('title', 'Teams')
{{-- header --}}
@section('header')
    @include('layouts.header')
@endsection

{{-- main page --}}
@section('content')

<div class="container team">
    
    <div  class="banner_team">
        <video autoplay muted playsinline loop class="video-banner video-desktop">
            <source src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/video/web_new.mp4" type="video/mp4"></source>
        </video>
        <video autoplay muted playsinline loop class="video-banner video-mobile">
            <source src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/video/mobile_new.mp4" type="video/mp4"></source>
        </video>
        <div class="title_banner">Meet Our Team</div>
        <div class="down">
            <img src="/images/double-down.png">
        </div>
       
    </div>
   
 
    <div class="content" id="next-section">
       {{-- management --}}
        <div style="display: flex;justify-content:center;align-items:center">
            <div  class="area_team management">
                <div class="title">MANAGEMENT</div>
                <div class="area_wrapper">
                    <div class="flex">
                        <div class="image-wrapper">
                            <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                            <div class="overlay">
                                <a class="read-more" href="#">View Profile</a>
                            </div>
                        </div>
                        <div class="name">Siham</div>
                        <div class="position">HR</div>
                    </div>
                    <div class="flex">
                        <div class="image-wrapper">
                            <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                            <div class="overlay">
                                <a class="read-more" href="#">View Profile</a>
                            </div>
                        </div>
                        <div class="name">Siham</div>
                        <div class="position">HR</div>
                    </div>
                    
                </div>
            </div>
        </div> 
        {{-- AREA MANAGERS --}}
        <div style="display: flex;justify-content:center;align-items:center">
            <div  class="area_team">
                <div class="title">AREA MANAGERS</div>
                <div class="area_wrapper">
                    <div class="flex">
                        <div class="image-wrapper">
                            <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                            <div class="overlay">
                                <a class="read-more" href="#">View Profile</a>
                            </div>
                        </div>
                        <div class="name">Siham</div>
                        <div class="position">HR</div>
                    </div>
                    
                </div>
            </div>
        </div> 
        {{-- PLATINUM CLIENT MANAGER --}}
        <div style="display: flex;justify-content:center;align-items:center">
            <div  class="area_team">
                <div class="title">PLATINUM CLIENT MANAGER</div>
                <div class="area_wrapper">
                    <div class="flex">
                        <div class="image-wrapper">
                            <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                            <div class="overlay">
                                <a class="read-more" href="#">View Profile</a>
                            </div>
                        </div>
                        <div class="name">Siham</div>
                        <div class="position">HR</div>
                    </div>
                    
                </div>
            </div>
        </div> 
        {{-- SENIOR CLIENT MANAGERS --}}
        <div style="display: flex;justify-content:center;align-items:center">
            <div  class="senior_manager">
                <div class="title">SENIOR CLIENT MANAGERS</div>
                <div class="swiper-button-next senior-next"></div>
                <div class="swiper-button-prev senior-prev"></div>
                <div class="line"></div>
                <div class="team_swiper senior_swiper">
                    <div class="swiper-wrapper">
                       
                        <div class="swiper-slide">
                            <div class="image-wrapper">
                                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                                <div class="overlay">
                                    <a class="read-more" href="#">View Profile</a>
                                </div>
                            </div>
                            <div class="name">Siham</div>
                            <div class="position">HR</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-wrapper">
                                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                                <div class="overlay">
                                    <a class="read-more" href="#">View Profile</a>
                                </div>
                            </div>
                            <div class="name">Siham</div>
                            <div class="position">HR</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-wrapper">
                                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                                <div class="overlay">
                                    <a class="read-more" href="#">View Profile</a>
                                </div>
                            </div>
                            <div class="name">Siham</div>
                            <div class="position">HR</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-wrapper">
                                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                                <div class="overlay">
                                    <a class="read-more" href="#">View Profile</a>
                                </div>
                            </div>
                            <div class="name">Siham</div>
                            <div class="position">HR</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-wrapper">
                                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                                <div class="overlay">
                                    <a class="read-more" href="#">View Profile</a>
                                </div>
                            </div>
                            <div class="name">Siham</div>
                            <div class="position">HR</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-wrapper">
                                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg" alt="Profile Image">
                                <div class="overlay">
                                    <a class="read-more" href="#">View Profile</a>
                                </div>
                            </div>
                            <div class="name">Siham</div>
                            <div class="position">HR</div>
                        </div>
                        
                    </div>
                    
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div> 
        
        

        {{-- <select class="browser-default video-filter" id="section-filter">
            <option value="All"  selected>All</option>
            @foreach($sections as $section)
                <option value="{{ $section->name }}">{{ $section->name }}</option>
            @endforeach
        </select> --}}

        {{-- <div class="grid-container js-filter-grid">
            @foreach($teams as $team)
                <div class="team-item js-filter-grid-item" data-section="{{ $team->section->name }}">
                    @include('components.team')
                </div>
            @endforeach
        </div> --}}
    </div>
    <div class="last-content">
        <div class="flex-container">
            <div class="col">
                <img src="https://savoirbucket.s3.eu-north-1.amazonaws.com/storage/image/Agent/pkemGsbNbUAnG4cO7NL2rC2qfywTqecebB1gSG3J.jpg">
            </div>
            
            <div class="col">
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum quidem voluptate sequi beatae perferendis quae, 
                </div>
                <div class="name">Ali</div>
            </div>
        </div>
    
</div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
