<div class='loading'>
    <div class='lds-dual-ring'></div>
</div>
<header id="header-2">
    <div class="wand-container">

        <div class="header-content2">
            <div class="header-content2__logo">
                <a class="header-content2__logo__sitename" href="{{route('front.index')}}">
                    <img src="{{url('/')}}/public/assets/front/assets/images/logo.png" alt="logo">
                </a>
            </div>

            <nav class="header-2-nav">
                <ul>
                    <li><a href="{{route('front.index')}}">Home</a></li>
                    @foreach($tripcategs as $item)
                        <li>
                            <a href="{{route('front.categoryTours',$item->slug)}}">{{$item->title}} </a>
                            <ul class="sub-menu">
                                @foreach($item->child as $item)
                                    <li><a href="{{route('front.categoryTours',$item->slug)}}">{{$item->title}} </a>
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

        <!-- <a href="#" class="header-content2__call">
                    <img src="{{url('/')}}/public/assets/front/assets/images/call.png" alt="call">
                    <div class="header-content2__call__phone-number">
                        <p>Call Us Today!</p>
                        <span>{{$configphone}} </span>
                    </div>
                </a>
                <div class="search-area">
                    <div class="search-area__close"></div>
                    <form action="#">
                        <input class="search-area__input" placeholder="Search..." type="text">
                        <button class="search-area__submit" type="submit"><span>Hit Enter to search or Esc key to
                                close</span></button>
                    </form>
                </div> -->
            <nav class="header-nav-mobile">
                <ul>
                    <li><a href="{{route('front.index')}}">Home</a></li>
                    @foreach($tripcategs as $item)
                        <li>
                            <a href="#">{{$item->title}} </a>
                            <ul class="sub-menu">
                                @foreach($item->child as $item)
                                    <li><a href="{{route('front.categoryTours',$item->slug)}}">{{$item->title}} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                @endforeach
                <!-- <li><a href="{{route('front.tours')}}">Tours</a></li> -->

                <!-- <li><a href="{{route('front.destinations')}}">Destinations</a></li> -->
                    <!-- <li><a href="aboutus.html">About</a></li> -->
                    <li><a href="{{route('front.contact')}}">Kantakt</a></li>
                    <li class="plan-trip"><a href="{{route('front.booking')}}" class="btn-book">Plan your trip<span
                                    class="fa fa-send"></span></a></li>
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


<header id="header-4">
    <div class="header-4-upper">
        <div class="wand-container">
            <span class="header-4-upper__contact-area">
                <a class="header-4-upper__contact" href="#">
                    <img src="assets/images/mailcontact.png" alt="mailcontact">
                    wunderlust@support.com
                </a>
                <a class="header-4-upper__contact" href="#">
                    <img src="assets/images/header4phone.png" alt="phone">
                    +053 569 7810
                </a>
            </span>
            <span class="header-4-upper__translater">
                <select name="translate" id="translate">
                    <option value="eng">English</option>
                    <option value="vie">Vie</option>
                </select>
            </span>
            <span class="header-4-upper__social">
                <a href="#"><img src="assets/images/header4upperIns.png" alt="header4ins"></a>
                <a href="#"><img src="assets/images/header4face.png" alt="face"></a>
                <a href="#"><img src="assets/images/header4twitter.png" alt="twitter"></a>
            </span>
        </div>
    </div>
    <div class="wand-container">
        <div class="header-content2--style2">
            <div class="header-content2__logo">
                <a class="header-content2__logo__sitename" href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
            </div>

            <nav class="header-2-nav">
                <span class="header-4-upper__contact-area-mobile">
                    <a class="header-4-upper__contact" href="#">
                        <img src="assets/images/mailcontact.png" alt="mailcontact">
                        wanderlust@support.com
                    </a>
                    <a class="header-4-upper__contact" href="#">
                        <img src="assets/images/header4phone.png" alt="phone">
                        +053 569 7810
                    </a>
                </span>
                <ul>
                    <li>
                        <a href="index-4.html">HOME </a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home 1 </a></li>
                            <li><a href="index-2.html">Home 2</a></li>
                            <li><a href="index-3.html">Home 3</a></li>
                            <li><a href="index-4.html">Home 4</a></li>
                            <li><a href="index-5.html">Home 5</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">TOURS </a>
                        <ul class="sub-menu">
                            <li><a href="tour-grid.html">Tours Grid</a></li>
                            <li><a href="tour-list.html">Tours List</a></li>
                            <li>
                                <a href="#">Tours Items</a>
                                <ul>
                                    <li><a href="tour-item.html">Tours Items</a></li>
                                    <li><a href="tour-item-2.html">Tours Items 2</a></li>
                                    <li><a href="tour-item-3.html">Tours Items 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">DESTINATIONS</a>
                        <ul class="sub-menu">
                            <li><a href="destination-grid.html">Destination Grid</a></li>
                            <li><a href="destination-mansory.html">Destination Mansory</a></li>
                            <li><a href="destination-item.html">Destination Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">BLOG </a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PAGES</a>
                        <ul class="sub-menu">
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">CONTACT </a></li>
                    <li class="header-content2--style2__account">
                        <a class="account" href="#"><img src="assets/images/account.png" alt="account"></a>
                        <a class="account header-search" >
                            <img src="assets/images/headersearch.png" alt="headersearch">
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="search-area">
                <div class="search-area__close"></div>
                <form action="#">
                    <input class="search-area__input" placeholder="Search..." type="text">
                    <button class="search-area__submit"   type="submit"><span>Hit Enter to search or Esc key to close</span></button>
                </form>
            </div>
            <nav class="header-nav-mobile">
                <ul>
                    <li>
                        <a href="#">HOME <i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="index.html">HOME 1</a></li>
                            <li><a href="index-2.html">HOME 2</a></li>
                            <li><a href="index-3.html">HOME 3</a></li>
                            <li><a href="index-4.html">HOME 4</a></li>
                            <li><a href="index-5.html">HOME 5</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">TOURS <i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="tour-grid.html">TOURS GRID</a></li>
                            <li><a href="tour-list.html">TOURS LIST</a></li>
                            <li>
                                <a href="#">TOURS ITEMS<i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="tour-item.html">TOURS ITEM</a></li>
                                    <li><a href="tour-item-2.html">TOURS ITEM2</a></li>
                                    <li><a href="tour-item-3.html">TOURS ITEM3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">DESTINATIONS <i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="destination-grid.html">DESTINATION GRID</a></li>
                            <li><a href="destination-mansory.html">DESTINATION MANSORY</a></li>
                            <li><a href="destination-item.html">DESTINATION ITEM</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">BLOG <i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">BLOG LIST</a></li>
                            <li><a href="blog-grid.html">BLOG GRID</a></li>
                            <li><a href="blog-single.html">BLOG SINGLE</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PAGES <i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="aboutus.html">ABOUT US</a></li>
                            <li><a href="404.html">404 PAGE</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">CONTACT <i class="fa fa-angle-down"></i></a></li>
                    <li>
                        <div class="header-nav-mobile__search-area">
                            <a class="header-nav-mobile__signin" href="#"><img src="assets/images/account.png" alt="account"></a>
                            <a class="header-nav-mobile__search-bar" >
                                <img src="assets/images/headersearch.png" alt="headersearch">
                            </a>
                        </div>
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