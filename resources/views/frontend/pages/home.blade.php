@extends('frontend.layout.app')
@section('section')


    <!-- Banner Section Start -->
    <section class="home_hero">
        <div class="video_home">
            <video class="video_loop" id="myVideo" loop muted autoplay playsinline>

                <source src="{{  asset('public/frontend/assest/video/video.mp4') }}" type="video/mp4">

            </video>
        </div>
        <div class="inner">
            <div class="headlines">
                <span class="headline_one" data-aos="zoom-in" data-aos-duration="2000">A1 Group Companies</span>
                <span class="headline_two" data-aos="zoom-in" data-aos-duration="2000">Transport made simple</span>
            </div>
            <a href="contact.html" class="btn-cta toggle-contact btn-primary">Contact Us</a>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Intro section start -->
    <section class="intro_banner">
        <div class="intro_inner">
            <div class="intro_content">
                <!-- Dedicated and Flex trucking -->
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    <strong>A1 Group Companies </strong>is your preferred supplychain solutions partner.
                    <br>Operating in all major transportation gateways
                    </h1>
            </div>
        </div>
    </section>
    <!-- Intro section end -->

    <!-- Cutomer section start -->
    <section class="customer_section">
        <div class="container">
            <div class="cust_top">
                <div class="cust_image">
                    <div class="img_holder" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000"></div>
                </div>
                <div class="cust_text text-justify">
                    <label class="section_label">customers</label>
                    <h2>Let us take care of your distribution needs</h2>
                    <p class="text-justify">A1 Group Companies proudly offers distribution to supplychain and insert the above services, Texas based, serving all major port gateways
                    </p>
                    <div class="cust_btn">
                        <a href="contact.html" class="btn-primary">Ship With Us</a>
                        <a href="about.html" class="btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cutomer section end -->

    <!-- Service section start -->
    <section class="service_section">
        <div class="service_truck" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000"><img src="{{  asset('public/frontend/assest/images/image-2.png') }}"></div>
        <div class="container">
            <div class="service_inner">
                <label class="section_label white">services</label>
                <div class="service_text">
                    <h2>A1 Group Companies</h2>
                    <h4>the service to fit your needs</h4>
                    <h6>Providing supply chain solutions from port to door.</h6>
                </div>
                <div class="service_btn">
                    <a href="#" class="btn-cta btn-primary">Vehicle</a>
                    <a href="#" class="btn-cta btn-primary">Freight</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Service section end -->

    <!-- carrier section start -->
    <section class="carrier_section">
        <div class="container">
            <div class="carrier_inner">
                <div class="carrier_text">
                    <label class="section_label blue">CARRIERS</label>
                    <h2>Become a partner and drive with Us now!</h2>
                    <p>Drive now with A1 Group Companies and receive PTO, medical benefits, and more!</p>
                    <div class="carrier_btn">
                        <a href="https://hrcenter.ontempworks.com/en/SimplifiedTransport" target="_blank" download="Application.pdf" class="btn-cta btn-primary">Drive With Us</a>
                        <a href="career.html" class="btn-cta btn-secondary">Learn More</a>
                    </div>
                </div>
                <div class="carrier_boxes">
                    <div class="carrier_box" data-aos="zoom-in">
                        <figure>
                            <img class="lozad" alt="Carrier support" src="{{  asset('public/frontend/assest/images/icon-1.png') }}">
                        </figure>
                        <p>Career Growth</p>
                    </div>
                    <div class="carrier_box" data-aos="zoom-in">
                        <figure>
                            <img class="lozad" alt="Quick Load Matching" src="{{  asset('public/frontend/assest/images/icon-2.png') }}">
                        </figure>
                        <p>health insurance</p>
                    </div>
                    <div class="carrier_box" data-aos="zoom-in">
                        <figure>
                            <img class="lozad" alt="Rapid Pay" src="{{  asset('public/frontend/assest/images/icon-3.png') }}">
                        </figure>
                        <p>friendly team</p>
                    </div>
                    <div class="carrier_box" data-aos="zoom-in">
                        <figure>
                            <img class="lozad" alt="Technology Platform" src="{{  asset('public/frontend/assest/images/icon-4.png') }}">
                        </figure>
                        <p>sick leave</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- carrier section end -->

    <!-- quotes section start -->
    <section class="quotes_section">
        <div class="container">
            <div class="quote_inner">
                <img src="{{  asset('public/frontend/assest/images/icon-quotes.svg') }}" alt="Quotes Icon">
                <h2 data-aos="zoom-out">A1 Group Companies Transport LLC wants to be your number one trucking service. Operating out of the port of Los Angeles and Long Beach, we provide a dedicated team to serve your needs.</h2>
                <div class="strong-divider"></div>
                <span>A1 Group Companies</span>
            </div>
        </div>
    </section>
    <!-- quotes section end -->

    <!-- Award section start -->
    <section class="award_section">
        <div class="container">
            <label class="section_label blue">Awards & recognition</label>
            <div class="award_blocks">
                <figure data-aos="zoom-out-up"><img class="lozad" alt="Inc. 5000 award" src="{{  asset('public/frontend/images/yusen-logo.png') }}"></figure>
                <figure data-aos="zoom-out-up"><img class="lozad" alt="Inc. 5000 award" src="{{  asset('public/frontend/images/Maersk-Logo.png') }}"></figure>
            </div>
        </div>
    </section>
    <!-- Award section end -->

    <!-- WHY section start -->
    <section class="why_section">
        <div class="container">
            <div class="why_inner">
                <div class="why_text">
                    <label class="section_label">Why Us</label>
                    <h2>WE ARE SIMPLY THE BEST!</h2>
                    <!-- <h4>Customers want to ship with us. Carriers want to drive for us.</h4> -->
                    <p>Reliable and fast services are a key components to our operation. We develop a simple solution for all of our customers to ensure top quality services at all times.</p>
                    <a href="about.html" class="btn-primary">Get to know us</a>
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
