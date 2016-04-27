
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" data-scroll href="#home">
                    <img class="img-responsive" src="images/sk_small.png" alt="Simon Katz">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="scroll transform" href="#services">Services</a></li>
                    <li><a class="scroll transform" href="#portfolio">Projects</a></li>
                    <li><a class="scroll transform" href="#work-process">Process</a></li>
                    <li><a class="scroll transform" href="#twitter">Testimonials</a></li>
                    <li><a class="scroll transform" href="#contact">Contact</a></li>
                </ul>

                <!-- Right Side Of Navbar
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                -->
            </div>
        </div>
    </nav>

<header id="home" class="img-responsive">
    <div class="container">
        <div class="intro-content">
            <div class="intro-logo">
                <a class="scroll" href="#header"> 
                    <img class="scroll img-responsive" src="images/sk.png" style="transform: scale(0.8);">
                </a>
            </div>
            <a href="#services" data-scroll class="btn btn-xl transform">START HERE</a>
        </div>
    </div>
</header>