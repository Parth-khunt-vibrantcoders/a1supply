<!-- Header Start -->
@php
$currentRoute = Route::current()->getName();
@endphp
<header>
    <div class="header_wrapper">
        <div class="header_logo">
            <a href="{{ route('home') }}">
                <img src="{{  asset('public/frontend/images/A1_Logo.png') }}" />
            </a>
        </div>
        <div class="header_center_menu">
            <ul>
                <li class="{{ $currentRoute == 'home' ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="dropdown {{ $currentRoute == 'container-trailer-yard' || $currentRoute == 'transload-cross-dock' || $currentRoute == 'dedicated' || $currentRoute == 'shuttle-services' || $currentRoute == 'ftl' ? 'active' : '' }}">
                    <a href="#">Services <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="{{ $currentRoute == 'container-trailer-yard'  ? 'active' : '' }}"><a href="{{ route('container-trailer-yard') }}">Container & trailer Yard</a></li>
                        <li class="{{  $currentRoute == 'transload-cross-dock' ? 'active' : '' }}"><a href="{{ route('transload-cross-dock') }}">Transload & cross Dock</a></li>
                        <li class="{{  $currentRoute == 'dedicated'  ? 'active' : '' }}"><a href="{{ route('dedicated') }}">Dedicated</a></li>
                        <li class="{{  $currentRoute == 'shuttle-services' ? 'active' : '' }}"><a href="{{ route('shuttle-services') }}">Shuttle Services</a></li>
                        <li class="{{  $currentRoute == 'ftl' ? 'active' : '' }}"><a href="{{ route('ftl') }}">FTL</a></li>
                    </ul>
                </li>
                <li class="dropdown {{ $currentRoute == 'about-us' || $currentRoute == 'leadership'  ? 'active' : '' }}">
                    <a href="#">About Us <i class="fas fa-caret-down"></i></a>
                    <ul class = "dropdown-menu">
                        <li class="{{ $currentRoute == 'about-us'  ? 'active' : '' }}"> <a href="{{ route('about-us') }}">About Us</a></li>
                        <li class="{{ $currentRoute == 'leadership'  ? 'active' : '' }}"> <a href="{{ route('leadership') }}">Leadership</a></li>
                    </ul>
                </li>

                 <li class="dropdown {{ $currentRoute == 'all-location'  ? 'active' : '' }}">
                    <a href="#">Facality <i class="fas fa-caret-down"></i></a>
                    <ul class = "dropdown-menu">
                        <li class="{{ $currentRoute == 'all-location'  ? 'active' : '' }}"> <a href="{{ route('all-location') }}">All Location </a></li>
                    </ul>
                </li>

                <li class="{{ $currentRoute == 'contact'  ? 'active' : '' }}">
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
