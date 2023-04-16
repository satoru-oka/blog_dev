@php
    $interest = App\Models\Interest::latest()
        ->limit(5)
        ->get();
@endphp

<section class="services">
    <div class="container">
        <div class="services__title__wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title">
                        <span class="sub-title">02 - my interest</span>
                        <h2 class="title">Articles of Interest</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="services__arrow"></div>
                </div>
            </div>
        </div>

        <div class="row gx-0 services__active">
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="{{ route('interest.details') }}">
                        <img src="{{ asset('frontend/assets/img/images/services_img01.jpg') }}" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon01.png') }}"
                                alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}"
                                alt="">
                        </div>
                        <h3 class="title"><a href="{{ route('interest.details') }}">System Architecture</a></h3>
                        <p>Basic structure and construction of the system.</p>
                        <ul class="services__list">
                            <li>Hardware</li>
                            <li>Software</li>
                            <li>Data</li>
                            <li>Network</li>
                        </ul>
                        <a href="{{ route('interest.details') }}" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="{{ route('interest.details') }}"><img
                                src="{{ asset('frontend/assets/img/images/services_img02.jpg') }}" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}"
                                alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}"
                                alt="">
                        </div>
                        <h3 class="title"><a href="{{ route('interest.details') }}">Programming</a></h3>
                        <p>Programming languages and methods of interest.</p>
                        <ul class="services__list">
                            <li>PHP&Laravel</li>
                            <li>Python&Django</li>
                            <li>Rust</li>
                            <li>C</li>
                        </ul>
                        <a href="{{ route('interest.details') }}" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="{{ route('interest.details') }}"><img
                                src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="{{ asset('frontend/assets/img/icons/services_light_icon03.png') }}"
                                alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon03.png') }}"
                                alt="">
                        </div>
                        <h3 class="title"><a href="{{ route('interest.details') }}">Algorithm</a></h3>
                        <p>Algorithm I'm interested in and have studied.</p>
                        <ul class="services__list">
                            <li>Traditional</li>
                            <li>Modern</li>
                            <li>Unresolved</li>
                            <li>Personal Discovery</li>
                        </ul>
                        <a href="{{ route('interest.details') }}" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="{{ route('interest.details') }}"><img
                                src="{{ asset('frontend/assets/img/images/services_img04.jpg') }}" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light"
                                src="{{ asset('frontend/assets/img/icons/services_light_icon04.png') }}"
                                alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon04.png') }}"
                                alt="">
                        </div>
                        <h3 class="title"><a href="{{ route('interest.details') }}">Tool</a></h3>
                        <p>Tool that are useful, easy to use or of interest.</p>
                        <ul class="services__list">
                            <li>Hardware Tool</li>
                            <li>Software Tool</li>
                            <li>Data Tool</li>
                            <li>Network Tool</li>
                        </ul>
                        <a href="{{ route('interest.details') }}" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="{{ route('interest.details') }}"><img
                                src="{{ asset('frontend/assets/img/images/services_img03.jpg') }}" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light"
                                src="{{ asset('frontend/assets/img/icons/services_light_icon02.png') }}"
                                alt="">
                            <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}"
                                alt="">
                        </div>
                        <h3 class="title"><a href="{{ route('interest.details') }}"></a>Topic</h3>
                        <p>Industry, service, technology, or study of interest.</p>
                        <ul class="services__list">
                            <li>Industries</li>
                            <li>Services</li>
                            <li>Technologies</li>
                            <li>Study</li>
                        </ul>
                        <a href="{{ route('interest.details') }}" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
        </div>
</section>
