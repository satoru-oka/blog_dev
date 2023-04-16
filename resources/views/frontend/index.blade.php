@extends('frontend.main_master')
@section('main')
@section('title')
    Home | EasyLearning Website
@endsection
<!-- banner-area -->
@include('frontend.home_all.home_slide')
<!-- banner-area-end -->

<!-- about-area -->
@include('frontend.home_all.home_about')
<!-- about-area-end -->

<!-- services-area -->
@include('frontend.home_all.home_interest')
<!-- services-area-end -->

<!-- work-experience-area -->
@include('frontend.home_all.home_experience')
<!-- work-process-area-end -->

<!-- portfolio-area -->
@include('frontend.home_all.portfolio')
<!-- portfolio-area-end -->

<!-- partner-area -->
@include('frontend.home_all.home_partner')
<!-- partner-area-end -->

<!-- testimonial-area -->
@include('frontend.home_all.testimonial')
<!-- testimonial-area-end -->

<!-- blog-area -->
@include('frontend.home_all.home_blog')
<!-- blog-area-end -->

<!-- contact-area -->
@include('frontend.home_all.home_contact')
<!-- contact-area-end -->
@endsection
