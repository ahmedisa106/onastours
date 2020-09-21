<header id="header-4">
    <div class="header-4-upper">
        <div class="wand-container">
            <span class="header-4-upper__contact-area">
                <a class="header-4-upper__contact" href="#">
                    <img src="{{ url('assets/front') }}/assets/images/mailcontact.png" alt="mailcontact">
                    {{$config['email']}}
                </a>
                <a class="header-4-upper__contact" href="#">
                    <img src="{{ url('assets/front') }}/assets/images/header4phone.png" alt="phone">
                    {{$config['phone']}}
                </a>
            </span>

            {{--<span class="header-4-upper__translater">--}}
            {{--<a href="http://tour.mallahsoft.com/en"><span class="flag-icon flag-icon-us"> </span>  English</a>--}}
            {{--<a href="http://tour.mallahsoft.com/de"><span class="flag-icon flag-icon-de"> </span>  German</a>--}}
            {{--</span>--}}

            <span class="header-4-upper__social">
                <a href="{{$config['instgram']}}"><img src="{{ url('assets/front') }}/assets/images/header4upperIns.png" alt="header4ins"></a>
                <a href="{{$config['fb_link']}}"><img src="{{ url('assets/front') }}/assets/images/header4face.png" alt="face"></a>
                <a href="{{$config['tw_link']}}"><img src="{{ url('assets/front') }}/assets/images/header4twitter.png" alt="twitter"></a>
            </span>
        </div>
    </div>


    <div class="wand-container">
        <div class="header-content2--style2">
            <div class="header-content2__logo">
                <a class="header-content2__logo__sitename" href="{{ url('') }}">
                    <img src="{{ url('assets/front') }}/assets/images/logo.png" alt="logo"></a>
            </div>

            <nav class="header-2-nav">
                <span class="header-4-upper__contact-area-mobile">
                    <a class="header-4-upper__contact" href="#">
                        <img src="{{ url('assets/front') }}/assets/images/mailcontact.png" alt="mailcontact">
                        wanderlust@support.com
                    </a>
                    <a class="header-4-upper__contact" href="#">
                        <img src="{{ url('assets/front') }}/assets/images/header4phone.png" alt="phone">
                        +053 569 7810
                    </a>
                </span>
                <ul>
                    <li>
                        <a href="">HOME </a>
                    </li>
                    @foreach($tripcategs as $item)
                        <li>
                            <a href="{{ url('category') }}/{{ $item->slug }}">{{$item->title}} </a>
                            <ul class="sub-menu">
                                @foreach($item->child as $item)
                                    <li>
                                        <a href="{{ url('category') }}/{{ $item->slug }}">
                                            {{$item->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                    <li><a href="{{route('front.contact')}}">Kantakt</a></li>
                    <li class="plan-trip">
                        <a href="{{route('front.booking')}}" class="btn-book">Plan your trip<span class="fa fa-send"></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="search-area">
                <div class="search-area__close"></div>
                <form action="#">
                    <input class="search-area__input" placeholder="Search..." type="text">
                    <button class="search-area__submit" type="submit">
                        <span>Hit Enter to search or Esc key to close</span></button>
                </form>
            </div>
            <nav class="header-nav-mobile">
                <ul>
                    <li>
                        <a href="">HOME </a>
                    </li>
                    @foreach($tripcategs as $item)
                        <li>
                            <a href="{{ url('category') }}/{{ $item->slug }}">{{$item->title}} </a>
                            <ul class="sub-menu">
                                @foreach($item->child as $item)
                                    <li>
                                        <a href="{{ url('category') }}/{{ $item->slug }}">
                                            {{$item->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                    <li><a href="{{route('front.contact')}}">Kantakt</a></li>
                    <li class="plan-trip">
                        <a href="{{route('front.booking')}}" class="btn-book">Plan your trip<span class="fa fa-send"></span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header-content2__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
