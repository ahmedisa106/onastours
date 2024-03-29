<footer id="footer-1">
    <div class="scroll-top">
        <i class="fas fa-angle-up"></i>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="footer-widget-1 footer-widget-1--margin " style="margin-top:180px;">
                    <a href="{{route('front.index')}}"><img src="{{url('/')}}/public/assets/front/assets/images/footerlogo.png" alt="footerlogo"></a>
                    <div class="footer-widget-1__text">
                        <p>
                            {{$config['about']}}
                        </p>
                    </div>
                </div>
            </div>
            <div id="remove-padding" class="col-lg-8 col-md-8">
                <div class="footer-widget-1">

                    <div class="footer-widget-1__lists">
                        <div class="footer-widget-1__list address-box">
                            <div class="footer-widget-1__tittle">
                                <h5>Contact info</h5>
                                <div class="footer-widget-1__tittle__line-under"></div>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p>
                                        Call Us{{$config['phone']}}
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <p>
                                        <a href="mailto:{{$config['email']}}    ">{{$config['email']}}     </a>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        123 Main Street, St. NW Ste, 1 Washington, DC,USA.
                                    </p>
                                </li>

                            </ul>
                        </div>
                        <div class="footer-widget-1__list">
                            <div class="footer-widget-1__tittle">
                                <h5>Generell</h5>
                                <div class="footer-widget-1__tittle__line-under"></div>
                            </div>
                            <ul>
                                @foreach($pages as $page)
                                    <li>
                                        <a href="{{ url('page') }}/ {{ $page->id }}">{{$page->title}} </a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>

                        <div class="footer-widget-1__list">
                            <div class="footer-widget-1__tittle">
                                <h5>quick links</h5>
                                <div class="footer-widget-1__tittle__line-under"></div>
                            </div>
                            <ul>
                                @foreach($tripcategs as $item)
                                    <li>
                                        <a href="{{ url('category') }}/{{ $item->slug }}">{{$item->title}} </a>
                                    </li>

                                @endforeach

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright__area">
                <div class="copyright__license">
                    Copyright <i class="far fa-copyright"></i> 2020 Wunderlust. All Rights Reserved.
                </div>
                <div class="copyright__social">
                    <a href="{{$config['fb_link']}}    "><i class="fa fa-facebook"></i></a>
                    <a href="{{$config['instgram']}}    "><i class="fa fa-instagram"></i></a>
                    <a href="{{$config['tw_link']}}    "><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

</footer>
