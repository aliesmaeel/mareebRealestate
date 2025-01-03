<div class="footer">
    <div class="content">
        <div class="grid-container">
            <div class="col">
                <a class="img-container logo">
                    <img src="{{asset('images/logo.png')}}" alt="img-logo">
                </a>
                <div class="desc">
                    {!! $footer->text !!}
                    <br>
                    <a href="#" style="font-weight: bold;font-family: Rufina">
                        READ MORE
                        <svg id="arrow-footer" class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="#bdbcbc" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="col">
                <div class="title">LATEST LISTINGS</div>
                <div class="flex-col">
                @foreach($latestProperties as $property)
                    <a href="{{route('property.show', $property->slug)}}">
                        <div class="row">
                            <img alt="img-logo" src="{{asset('storage/'.$property->image)}}">
                            <div>
                                <div class="over-text-hide">{{$property->title}}</div>
                                <div class="price">AED {{$property->price}}</div>
                            </div>
                        </div>
                    </a>

                @endforeach
                </div>
            </div>
            <div class="col">
                <div class="title">USEFUL LINKS</div>
                <ul class="list-footer">
                    @foreach($footer->links as $link)
                        <a href="{{$link['url']}}">
                            <li>
                                <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                                    </path>
                                </svg>
                                <div>{{$link['name']}}</div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <div class="title">CONTACT</div>
                <ul class="list-footer contact">
                    <a href="#">
                        <li>
                            <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="#bdbcbc" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                </path>
                            </svg>
                            <div style="font-family: Poppins-Regular">{{$contact->phone}}</div>
                       </li>
                    </a>
                    <a href="#">
                        <li>
                            <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="#bdbcbc" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                </path>
                            </svg>

                            <div style="font-family: Rufina">{{$contact->email}}</div>
                       </li>
                    </a>

                </ul>
                <div class="title">Subscribe Now</div>
                <form>
                    <div class="subscribe">
                        <input type="email" placeholder="email" class="email">
                        <input type="submit" value="Submit" class="submit">
                    </div>

                    <div class="flex-row social-icons">
                        @foreach($socialMediaLinks as $link)
                            <a style="width: 30px;height: 30px" href="{{$link->url}}" target="_blank">
                                <img style="width: 60%;height: 100%" src="{{asset('storage/'.$link->image)}}" alt="social-media">
                            </a>

                        @endforeach

                    </div>

                </form>
            </div>

        </div>
        <div class="terms flex">
            <a>© 2024 | Meerab Properties</a>
            <div class="flex-start">
                <a href="#">
                    Privacy Policy
                </a>

            </div>
        </div>
    </div>
</div>
