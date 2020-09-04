<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ adminurl('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{__('commonmodule::sidebar.mainnav')}}</li>

            <!-- Common Module -->
            @if(in_array('home_app',$activeApps))
            <li>
                <a href="{{url('/admin-panel')}}">
                    <i class="fa fa-home"></i> <span>{{__('commonmodule::sidebar.home')}} </span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li>
            @endif

            {{-- Trip CRUD --}}
            @if(in_array('trips_app',$activeApps))
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                    <span>{{__('commonmodule::sidebar.trip')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Categories -->
                    <li><a href="{{ url('admin-panel/trip/category') }}"><i
                                    class="fa fa-circle-o"></i>{{__('commonmodule::sidebar.tripCateg')}}</a></li>

                    <!-- Trip -->
                    <li><a href="{{ url('admin-panel/trip') }}"><i
                                    class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.trip')}}</a></li>

                    <!-- Destination -->
                    <li><a href="{{ url('admin-panel/destination') }}"><i
                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.destination')}}</a></li>
                </ul>
            </li>
        @endif

         <!-- Booking -->
        @if(in_array('booking_app',$activeApps))
        <li>
            <a href="{{url('/admin-panel/booking')}}">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>{{__('commonmodule::sidebar.booking')}} </span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>
        @endif

            <!-- Transfers -->
            @if(in_array('transfers_app',$activeApps))
            <li>
                <a href="{{url('/admin-panel/transfers')}}">
                    <i class="fa fa-exchange" aria-hidden="true"></i> <span>{{__('commonmodule::sidebar.transfers')}} </span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li>
            @endif
            @if(in_array('blog_app',$activeApps))

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <span>{{__('commonmodule::sidebar.blog')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Categories -->
                    <li><a href="{{ url('admin-panel/blog-categories') }}"><i
                                    class="fa fa-circle-o"></i>{{__('commonmodule::sidebar.blogcateg')}}</a></li>

                    <!-- Blog -->
                    <li><a href="{{ url('admin-panel/blogs') }}"><i
                                    class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.blog')}}</a></li>
                </ul>
            </li>
            @endif
            @if(in_array('widgets_app',$activeApps))

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i> <span>{{__('commonmodule::sidebar.widgets')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <!-- Slider -->
                    <li><a href="{{ url('admin-panel/widgets/slider') }}"><i
                                    class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.slider')}}</a></li>

                    {{--<!-- Partner -->--}}
                    {{--<li><a href="{{ url('admin-panel/widgets/partners') }}"><i--}}
                                    {{--class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.partner')}}</a></li>--}}

                   <!-- Testimonial -->
                   <li><a href="{{ url('admin-panel/widgets/testimonials') }}"><i
                                   class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.monial')}}</a></li>

                    <!-- Team -->
                    <li><a href="{{ url('admin-panel/widgets/team') }}"><i
                                    class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.team')}}</a></li>

                                    {{--  <!-- contact -->--}}
                                    {{-- <li><a href="{{url('admin-panel/widgets/contact_us')}}"><i
                                    class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.contact')}}</a></li>--}}

                    {{--<!-- subscribe -->--}}
                    {{--<li><a href="{{url('admin-panel/widgets/subscripe')}}"><i--}}
                        {{--class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.subs')}}</a></li>--}}

                    <!-- pages -->
                    <li><a href="{{url('admin-panel/widgets/page')}}"><i
                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.pages')}}</a></li>

                    {{--<!-- work hours -->--}}
                    {{--<li><a href="{{url('admin-panel/widgets/hours')}}"><i--}}
                                    {{--class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.hours')}}</a></li>--}}
                </ul>
            </li>
            @endif
          

<li class="treeview">
    <a href="#">
        <i class="fa fa-video-camera" aria-hidden="true"></i>
        <span>{{__('commonmodule::sidebar.video')}}</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ url('admin-panel/videos/videocategory') }}"><i
                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.vidcateg')}}</a></li>

        <li><a href="{{ url('admin-panel/videos/video') }}"><i
                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.video')}}</a></li>
    </ul>
</li>


<li class="treeview">
    <a href="#">
        <i class="fa fa-photo" aria-hidden="true"></i>
        <span>{{__('commonmodule::sidebar.photo')}}</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ url('admin-panel/photos/photocategory') }}"><i
                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.photocateg')}}</a>
        </li>

        <li><a href="{{ url('admin-panel/photos/photo') }}"><i
                        class="fa fa-circle-o"></i> {{__('commonmodule::sidebar.photo')}}</a>
        </li>
    </ul>
</li>


<li class="treeview">
    <a href="#">
        <i class="fa fa-cog" aria-hidden="true"></i>
        <span>{{__('commonmodule::sidebar.config')}}</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
    @foreach($config_categs as $categ)
        <li><a href="{{ route('showconfig',$categ->id) }}"><i
                        class="fa fa-circle-o"></i> {{ $categ->title}}</a>
        </li>
    @endforeach
      
    </ul>
</li>

            @role('admin|superadmin|owner')
            <!-- <li>
                <a href="{{ url('admin-panel/config-module') }}">
                    <i class="fa fa-cog" aria-hidden="true"></i><span>{{__('commonmodule::sidebar.config')}} </span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li> -->
            @endrole

            @role('superadmin|owner')
            <li>
                <a href="{{ url('admin-panel/admins') }}">
                    <i class="fa fa-user" aria-hidden="true"></i><span>{{__('commonmodule::sidebar.admins')}} </span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li>
            @endrole

            @role('owner')
            <li>
                <a href="{{ url('/admin-panel/commonmodule/activate-lang') }}">
                    <i class="fa fa-language" aria-hidden="true"></i><span>{{__('commonmodule::sidebar.langs')}} </span>
                    <span class="pull-right-container">
                </span>
                </a>
            </li>
            @endrole

            @role('owner')
            <li>
                <a href="{{ url('admin-panel/commonmodule/settings/apps') }}">
                    <i class="fa fa-window-restore" aria-hidden="true"></i>
                    </i>
                    <span>
                        {{__('commonmodule::sidebar.apps')}}
                    </span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            @endrole
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
