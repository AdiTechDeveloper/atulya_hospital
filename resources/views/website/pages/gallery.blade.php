@extends('website.layout.app')

@section('title', 'Gallery')

@section('content')

<section class="service-details-section section-padding pt-80 pb-80">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-4">
                
                <!-- LEFT SIDEBAR -->
                <div class="col-lg-4 order-2 order-xl-1">
                    <div class="service-details-sidebar sticky-style">
                        <!-- Gallery Categories -->
                        <div class="sidebar-widget">
                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                <li>
                                    <a href="#infrastructure">
                                        <span>Infrastructure</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#icu">
                                        <span>ICU</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#operation-theatre">
                                        <span>Operation Theatre</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#facilities">
                                        <span>Facilities</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#medical-activities">
                                        <span>Medical Activities</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 order-1 order-xl-2">
                    <div class="service-details-right-items">

                        <h3>Photo & Video Gallery</h3>
                        <p>Explore our hospital through photos and videos showcasing our infrastructure, facilities, medical activities, events and patient-care environment.</p>

                        <!-- INFRASTRUCTURE -->
                        <div id="infrastructure" class="gallery-category">
                            <h4>Infrastructure</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/11.png') }}" alt="Infrastructure">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/22.png') }}" alt="Infrastructure">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ICU -->
                        <div id="icu" class="gallery-category">
                            <h4>ICU</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/3.png') }}" alt="ICU">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/4.png') }}" alt="ICU">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- OPERATION THEATRE -->
                        <div id="operation-theatre" class="gallery-category">
                            <h4>Operation Theatre</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/1.png') }}" alt="Operation Theatre">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/2.png') }}" alt="Operation Theatre">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FACILITIES -->
                        <div id="facilities" class="gallery-category">
                            <h4>Facilities</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/5.png') }}" alt="Facilities">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/6.png') }}" alt="Facilities">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/7.png') }}" alt="Facilities">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/8.png') }}" alt="Facilities">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MEDICAL ACTIVITIES -->
                        <div id="medical-activities" class="gallery-category">
                            <h4>Medical Activities</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/101.png') }}" alt="Medical Activities">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/102.png') }}" alt="Medical Activities">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-img">
                                        <img src="{{ asset('assets/img/inner/service-details/103.png') }}" alt="Medical Activities">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    html {
        scroll-behavior: smooth;
    }

    .gallery-category {
        scroll-margin-top: 100px;
        margin-top: 35px;
    }

    .gallery-category h4 {
        margin-bottom: 15px;
    }

    .gallery-category .service-img {
        margin-bottom: 0;
        overflow: hidden;
    }

    .gallery-category .service-img img {
        width: 100%;
        display: block;
    }
</style>

@endsection