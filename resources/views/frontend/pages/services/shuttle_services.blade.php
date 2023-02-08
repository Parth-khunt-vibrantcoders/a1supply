@extends('frontend.layout.app')
@section('section')
<section class="hero_banner" style="background-image: url({{  asset('public/frontend/images/shuttle-services2.jpg') }});">
    <div class="container">
        <div class="banner_text">
            <h1>Dedicated transport across the country</h1>
            <p>A1 Group Companies can simply the use of offsite yards and improve your yard utilization by utilizing our shuttle services. Coupling our one stop shop for port dray, container yard, and shuttle solutions you can minimize the coordination of your supplychain. </p>
        </div>
        <a href="{{ route('contact') }}" class="btn-cta toggle-contact btn-primary">ship with us</a>
    </div>
</section>



<!-- WHY section start -->
<section class="why_section">
    <div class="container">
        <div class="why_inner">
            <div class="why_text">
                <label class="section_label">Why Us</label>
                <h2>WE ARE SIMPLY THE BEST!</h2>
                <!-- <h4>Customers want to ship with us. Carriers want to drive for us.</h4> -->
                <p>Reliable and fast services are a key components to our operation. We develop a simple solution for all of our customers to ensure top quality services at all times.</p>
            </div>
            <div class="why_gallery">
                <div class="img1" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000"><img class="img-why-dt img-why-2" src="{{  asset('public/frontend/assest/images/img1.jpeg') }}"></div>
                <div class="img2" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000"><img class="img-why-dt img-why-3" src="{{  asset('public/frontend/assest/images/img2.jpeg') }}"></div>
                <div class="img3" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000"><img class="img-why-dt img-why-4" src="{{  asset('public/frontend/assest/images/img3.jpeg') }}"></div>
                <div class="img4" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000"><img class="img-why-dt img-why-5" src="{{  asset('public/frontend/assest/images/img4.jpeg') }}"></div>
            </div>
        </div>
    </div>
</section>
<!-- WHY section end -->

@endsection
