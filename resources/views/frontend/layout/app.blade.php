<!DOCTYPE html>
<html>

@include('frontend.includes.header')

<body>
    @include('frontend.includes.body_header')
        @yield('section')

    @include('frontend.includes.body_footer')
    @include('frontend.includes.footer')
</body>

</html>
