@extends('website.layout.app')

@section('title', 'ICU & Emergency')

@section('content')

<section class="service-details-section section-padding pt-80 pb-80">

    <div class="container">

        <div class="service-details-wrapper">

            <div class="row g-4">

                <!-- LEFT SIDEBAR -->
                <div class="col-lg-4 order-2 order-xl-1">

                    <div class="service-details-sidebar sticky-style">

                        <!-- Emergency Services List -->
                        <div class="sidebar-widget">

                            <ul class="wow fadeInUp" data-wow-delay=".3s">

                                <li>
                                    <a href="javascript:void(0);">
                                        <span>24×7 Emergency Services</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0);">
                                        <span>24×7 Critical Care</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0);">
                                        <span>6-Bed ICU</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0);">
                                        <span>ICU with Dialysis</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Central Oxygen Facility</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Ambulance Services</span>
                                        <span class="icon">
                                            <i class="far fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>

                            </ul>

                        </div>


                        <!-- Emergency Contact -->
                        <div class="sidebar-widget-image wow fadeInUp"
                            data-wow-delay=".5s">

                            <img
                                src="{{ asset('assets/img/inner/service-details/02.jpg') }}"
                                alt="ICU & Emergency"
                            >

                            <div class="content">

                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>

                                <h3>
                                    <a href="javascript:void(0);">
                                        +91 97275 79000
                                    </a>
                                </h3>

                                <h3>
                                    <span class="link">
                                        Emergency Contact
                                    </span>
                                </h3>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 order-1 order-xl-2">

                    <div class="service-details-right-items"
                        style="padding-bottom: 10px;">

                        <!-- Main Image -->
                        <div class="service-img wow img-custom-anim-left">

                            <img
                                src="{{ asset('assets/img/inner/service-details/02.jpg') }}"
                                alt="ICU & Emergency"
                            >

                        </div>


                        <!-- Title -->
                        <h3>
                            ICU & Emergency
                        </h3>


                        <!-- Introduction -->
                        <p>
                            Our dedicated ICU & Emergency services provide
                            round-the-clock critical care and emergency support
                            with immediate medical attention for patients
                            requiring urgent and intensive care.
                        </p>


                        <!-- Emergency Services -->
                        <h4 style="margin-top: 24px; margin-bottom: 10px;">
                            Emergency Services
                        </h4>

                        <p>
                            Our emergency department is available 24×7 to
                            provide prompt medical assistance and critical
                            emergency care whenever required.
                        </p>


                        <div class="list-box">

                            <ul>

                                <li>
                                    <i class="far fa-check"></i>
                                    24×7 Emergency Services
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    24×7 Critical Care
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    6-Bed ICU
                                </li>

                            </ul>


                            <ul>

                                <li>
                                    <i class="far fa-check"></i>
                                    ICU with Dialysis
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    Central Oxygen Facility
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    Ambulance Services
                                </li>

                            </ul>

                        </div>


                        <!-- Critical Care -->
                        <h4 style="margin-top: 24px; margin-bottom: 10px;">
                            Critical Care
                        </h4>

                        <p>
                            Our ICU is supported by critical care physicians
                            and essential facilities for patients requiring
                            continuous monitoring and intensive medical care.
                        </p>


                        <div class="list-box">

                            <ul>

                                <li>
                                    <i class="far fa-check"></i>
                                    6-Bed ICU
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    ICU with Dialysis
                                </li>

                            </ul>

                            <ul>

                                <li>
                                    <i class="far fa-check"></i>
                                    Central Oxygen Facility
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    Critical Care Physicians
                                </li>

                            </ul>

                        </div>


                        <!-- Ambulance -->
                        <h4 style="margin-top: 24px; margin-bottom: 10px;">
                            Ambulance Services
                        </h4>

                        <p>
                            Ambulance services are available for emergency
                            transportation and timely medical assistance.
                        </p>


                        <!-- Emergency CTA -->
                        <div class="mt-3">

                            <button
                                type="button"
                                class="theme-btn"
                                disabled
                                style="opacity: 0.65; cursor: not-allowed;"
                            >

                                <i class="far fa-phone"></i>

                                Emergency: +91 97275 79000

                            </button>

                        </div>


                        <!-- Appointment CTA -->
                        <div class="mt-3">

                            <button
                                type="button"
                                class="theme-btn"
                                disabled
                                style="opacity: 0.65; cursor: not-allowed;"
                            >

                                <i class="far fa-chevron-right"></i>

                                Emergency & Appointment

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection