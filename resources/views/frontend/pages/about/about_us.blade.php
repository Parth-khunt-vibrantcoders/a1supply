@extends('frontend.layout.app')
@section('section')

    <section class="hero_banner" style="background-image: url({{  asset('public/frontend/images/about-bg.jpg') }});">
        <div class="container">
            <div class="banner_text">
                <h1>We remove the complexity from your supply chain</h1>
                <p>Since our creation, the mission has been simple. Through our innovative solutions, we have been able to service clients across the nation. Thanks to our various services, we are able to meet every demand with ease and efficiency</p>
            </div>
            <a href="{{ route('contact') }}" class="btn-cta toggle-contact btn-primary">ship with us</a>
        </div>
    </section>

    <section class="intro_banner vision_page_banner" style="background-image: url({{  asset('public/frontend/images/vision-bg.jpg')}});">
        <div class="intro_inner">
            <div class="intro_content">
                <label class="section_label">OUR VISION</label>
                <h1 data-aos="fade-up" data-aos-duration="1000">Our vision is providing a simple and efficient solution to supply chain networks</h1>
            </div>
        </div>
    </section>

    <section class="values_section">
        <div class="values_wrap">
            <h2>our values</h2>
            <div class="values_boxes">
                <ul>
                    <li><span style="color: white !important;">S</span>uccess<p>Achieve results and celebrate when we do</p></li>
                    <li><span style="color: white !important;">I</span>nnovation<p>We are driven by continuous improvemen</p></li>
                    <li><span style="color: white !important;">M</span>otivation<p>Inspire individuals to perform at their best</p></li>
                    <li><span style="color: white !important;">P</span>assion<p>We love what we do</p></li>
                    <li><span style="color: white !important;">L</span>oyalty<p>We build our relationships based on trust</p></li>
                    <li><span style="color: white !important;">E</span>xcellence<p>We aim to be the best in all we do</p></li>
                </ul>
            </div>
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
