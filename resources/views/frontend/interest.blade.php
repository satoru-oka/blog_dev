@extends('frontend.main_master')
@section('main')
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            {{-- <h2 class="title">{{ $interest->interest_title }}</h2> --}}
                            <h2 class="title">Interest</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Interest Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <h1 style="text-align:center; padding:50px">Pending</h1>
        <!-- blog-details-area-end -->

    </main>
@endsection
