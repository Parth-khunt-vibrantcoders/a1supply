<!-- Header Start -->
<header>
    <div class="header_wrapper">
        <div class="header_logo">
            <a href="{{ route('home') }}">
                <img src="{{  asset('public/frontend/images/A1_Logo.png') }}" />
            </a>
        </div>
        <div class="header_center_menu">
            <ul>
                <li class="active">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#">Services <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li ><a href="{{ route('container-trailer-yard') }}">Container & trailer Yard</a></li>
                        <li ><a href="{{ route('transload-cross-dock') }}">Transload & cross Dock</a></li>
                        <li ><a href="{{ route('dedicated') }}">Dedicated</a></li>
                        <li ><a href="{{ route('shuttle-services') }}">Shuttle Services</a></li>
                        <li ><a href="{{ route('ftl') }}">FTL</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">About Us <i class="fas fa-caret-down"></i></a>
                    <ul class = "dropdown-menu">
                        <li> <a href="{{ route('about-us') }}">About Us</a></li>
                        <li> <a href="{{ route('leadership') }}">Leadership</a></li>
                    </ul>
                </li>

                 <li class="dropdown">
                    <a href="#">Facality <i class="fas fa-caret-down"></i></a>
                    <ul class = "dropdown-menu">
                        <li> <a href="{{ route('all-location') }}">All Location </a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="apply_pdf">
                    <a href="https://hrcenter.ontempworks.com/en/SimplifiedTransport" target="_blank" download="Application.pdf">Apply Here</a>
                </li>

            </ul>
        </div>
        <div class="toggleBtn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
<!-- Header End -->
