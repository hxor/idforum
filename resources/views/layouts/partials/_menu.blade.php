<div class="menu-area">
    <div class="top-menu-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-fullwidth">
                        <div class="logo-wrapper">
                            <div class="logo logo-top">
                                <a href="{{ url('/') }}"><img src="/assets/images/logo.png" alt="logo image" class="img-fluid"></a>
                            </div>
                        </div>

                        <div class="menu-container">
                            <div class="d_menu">
                                <nav class="navbar navbar-expand-lg mainmenu__menu">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon icon-menu"></span>
                                    </button>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="navbar-nav">
                                            <li class="">
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('admin.channel.index') }}">Channel</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </nav>
                            </div>
                        </div>

                        <div class="author-menu">
                            <!-- start .author-area -->
                            <div class="author-area">
                                <div class="search-wrapper">
                                <div class="nav_right_module search_module">
                                    <span class="icon-magnifier search_trigger"></span>

                                    <div class="search_area">
                                        <form action="#">
                                            <div class="input-group input-group-light">
                                                <span class="icon-left" id="basic-addon7">
                                                    <i class="icon-magnifier"></i>
                                                </span>
                                                <input type="text" class="form-control search_field"
                                                       placeholder="Type words and hit enter...">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                <!--start .author-author__info-->
                                <div class="author-author__info has_dropdown">
                                    <div class="author__avatar online">
                                        <img src="/assets/images/user-avatar.png" alt="user avatar" class="rounded-circle">
                                    </div>

                                    <div class="dropdown dropdown--author">
                                        @guest
                                            <ul>
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        <span class="icon-login"></span>{{ __('Login') }}</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('register') }}">
                                                        <span class="icon-login"></span>{{ __('Register') }}</a>
                                                </li>
                                            </ul>
                                        @else
                                            <div class="author-credits d-flex">
                                                <div class="autor__info">
                                                    <p class="name">
                                                        {{ Auth::user()->name }}
                                                    </p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-user"></span>Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-comments-o"></span>My Discussion</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                                    >
                                                        <span class="icon-logout"></span>Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        @endguest
                                    </div>
                                </div>
                                <!--end /.author-author__info-->
                            </div>
                            <!-- end .author-area -->

                            <!-- author area restructured for mobile -->
                            <div class="mobile_content ">
                                <span class="icon-user menu_icon"></span>

                                <!-- offcanvas menu -->
                                <div class="offcanvas-menu closed">
                                    <span class="icon-close close_menu"></span>
                                    <div class="author-author__info">
                                        <div class="author__avatar v_middle">
                                            <img src="/assets/images/user-avatar.png" alt="user avatar">
                                        </div>
                                    </div>
                                    <!--end /.author-author__info-->
                                    <!--start .author__notification_area -->

                                    <div class="dropdown dropdown--author">
                                        <ul>
                                            @guest
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        <span class="icon-login"></span>{{ __('Login') }}</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('register') }}">
                                                        <span class="icon-login"></span>{{ __('Register') }}</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-user"></span>Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-comments-o"></span>My Discussion</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                                    >
                                                        <span class="icon-logout"></span>Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.mobile_content -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end  -->
</div>
