<header class="header-area">
    <!-- Top Header Area -->

    <!-- Navbar Area -->
    <div class="famie-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="famieNav">
                    <!-- Nav Brand -->
                    <a href="{{route('home')}}" class="nav-brand"><img src="{{asset('images/logo.jpg')}}" alt=""></a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Navbar Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="{{route('home')}}">HOME</a></li>
                                <li class="ml-3"><a href="#works">HOW IT WORKS</a></li>

{{--                                <li class="ml-3"><a href="#">REGISTRATION</a></li>--}}
                                <li class="ml-3"><a href="#projects">PROJECTS</a></li>
                                <li class="ml-3"><a href="#contact">CONTACT US</a></li>
                                <li class="ml-3"><a href="#">MEDIA</a></li>
                                <li class="btn btn-success ml-3"><a href="{{route('agreement')}}" style="color:white">Agreement</a></li>

                                {{--<li class="btn btn-success ml-3"><a href="contact.html">BLOG</a></li>--}}

                            </ul>
                            <!-- Search Icon -->

                            <!-- Cart Icon -->

                        </div>
                        <!-- Navbar End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
