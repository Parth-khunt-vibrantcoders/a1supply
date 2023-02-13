@extends('frontend.layout.app')
@section('section')
<section class="hero_banner" style="background-image: url({{  asset('public/frontend/images/about-bg.jpg') }});">
    <div class="container">
        <div class="banner_text">
            <h1>Contact Us</h1>
            <p>Since our creation, the mission has been simple. Through our innovative solutions, we have been able to service clients across the nation. Thanks to our various services, we are able to meet every demand with ease and efficiency</p>
        </div>
    </div>
</section>

<section class="contact_sec">
    <div class="container">
        <div class="contact_wrapper">
            <div class="contact_left">
                <h1>Thanks for your interest in A1 Group Companies</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <div class="contact_img"><img src="{{  asset('public/frontend/images/contact.jpg') }}" /></div>
            </div>
            <div class="contact_right">
                <form>
                    <div class="form-group w-50">
                        <label>Who's Inquiring *</label>
                        <input type="text" placeholder="Please enter Inquiring"/>
                    </div>
                    <div class="form-group w-50">
                        <label>Name *</label>
                        <input type="text" placeholder="Please enter your Name"/>
                    </div>
                    <div class="form-group w-100">
                        <label>Company</label>
                        <input type="text" placeholder="Please enter Compnay"/>
                    </div>
                    <div class="form-group w-100">
                        <label>Email</label>
                        <input type="text" placeholder="Please enter your Email"/>
                    </div>
                    <div class="form-group w-100">
                        <label>Description</label>
                        <textarea placeholder="Please enter Description"></textarea>
                    </div>
                    <div class="form-group w-100">
                        <input type="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
