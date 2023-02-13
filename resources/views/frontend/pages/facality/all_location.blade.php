@extends('frontend.layout.app')
@section('section')
<section class="what_section">
    <div class="container">
        <div class="what_inner" >
            <style>
                iframe {
                    width: 100% !important;
                }
            </style>
            <div class="what_right" style="width: 50% !important; margin-top: 60px; margin-right: 60px;">
                <img src="{{  asset('public/frontend/images/map.png') }}" />
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1563190.4465308965!2d-74.72432305!3d40.07304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew%20Jersey%2C%20USA!5e0!3m2!1sen!2sin!4v1674407202526!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe> --}}
            </div>

            <div class="what_left" style="width: 50% !important;">
                <h3>Our Location</h3>
                <div class="what_inner">
                    <div class="what_left" style="width: 50% !important;">
                        <ul>
                            <li>New Jersey</li>
                            <li>
                                Savannah
                            </li>
                            <li>
                                Mobile
                            </li>
                            <li>
                                Houston
                            </li>
                            <li>
                                Oakland
                            </li>

                        </ul>
                    </div>

                    <div class="what_left" style="width: 50% !important;">
                        <ul>
                            <li>
                                Inland Empire
                            </li>
                            <li>
                                Los Angeles
                            </li>
                            <li>
                                Long Beach
                            </li>
                            <li>
                                Seattle
                            </li>
                            <li>
                                Tacoma
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
