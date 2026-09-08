@extends('website.layout.app')
@section('title', 'Home')
@section('content')


<!-- Hero Section Start -->

<section class="hero-section hero-1 bg-cover fix" style="background-image: url('assets/img/home-1/hero/bg-01.jpg');">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                        Compassionate <br> Care For Better Health
                    </h1>

                    <p class="wow fadeInUp" data-wow-delay=".3s">
                        At Atulya Hospital, we combine advanced medical expertise,
                        modern technology and compassionate care to provide
                        comprehensive healthcare for you and your family.
                    </p>

                    <a  href="{{ url('/departments/urology') }}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
                        <i class="far fa-chevron-right"></i>
                        Explore Our Services
                    </a>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="hero-image">
                    <img src="{{ asset('assets/img/home-1/hero/1.png') }}" alt="Atulya Hospital">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="hero-feature">
    <div class="container">
        <div class="hero-feature-wrapper">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hero-feature-icon">
                        <div class="icon justify-content-between">
                            <img src="{{ asset('assets/img/home-1/hero/feature-2.png') }}" alt="Appointment">
                            <a  href="{{ url('/contact') }}" class="arrow-icon">
                                <i class="far fa-chevron-right"></i>
                            </a>
                        </div>
                        <h5>Book an <br> Appointment</h5>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="hero-feature-icon ps-0">
                        <div class="icon justify-content-between">
                            <img src="{{ asset('assets/img/home-1/hero/feature-2.png') }}" alt="Doctors">
                            <a  href="{{ url('/doctor') }}"class="arrow-icon">
                                <i class="far fa-chevron-right"></i>
                            </a>
                        </div>
                        <h5>Meet Our <br> Specialist Doctors</h5>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="hero-feature-icon border-none">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home-1/hero/feature-3.png') }}" alt="Emergency">
                            <div class="content">
                                <p>
                                    Emergency Helpline
                                </p>
                                <h4>
                                    <a href="tel:+910000000000">+91 97275 79000</a>
                                </h4>
                            </div>
                        </div>
                        <h5>24/7 Emergency <br> Care Available</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- About Section Start -->

<section class="about-section section-padding fix">
    <div class="shape-1-img">
        <img src="{{ asset('assets/img/home-1/about/shape-01.png') }}" alt="img">
    </div>
    <div class="shape-2-img">
        <img src="{{ asset('assets/img/home-1/about/shape-02.png') }}" alt="img">
    </div>
    <div class="shape-3-img">
        <img src="{{ asset('assets/img/home-1/about/shape-03.png') }}" alt="img">
    </div>

    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">

                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-image">
                        <img width="515" height="341" src="{{ asset('assets/img/home-1/about/doctor-consulting-patient.jpg') }}"
                            alt="Atulya Hospital"
                            class="wow img-custom-anim-left">

                        <div class="about-img-2 float-bob-x">
                            <img width="513" height="413" src="{{ asset('assets/img/home-1/about/front-view-male-nurse-hospital.jpg') }}"
                                alt="Atulya Hospital Healthcare">
                        </div>

                        <div class="about-img-3 float-bob-y">
                            <img width="264" height="305" src="{{ asset('assets/img/home-1/about/portrait-female-pediatrician-work.jpg') }}"
                                alt="Atulya Hospital Doctors">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">

                        <div class="section-title mb-0 text-start">
                            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                                ABOUT ATULYA HOSPITAL
                            </span>

                            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                                Compassionate Care, Advanced Medicine, Better Health
                            </h2>
                        </div>

                        <p class="about-text wow fadeInUp" data-wow-delay=".2s">
                            Atulya Hospital is committed to providing comprehensive and
                            compassionate healthcare with a team of experienced doctors,
                            skilled medical professionals and modern healthcare facilities.
                            Our focus is on delivering quality treatment while ensuring
                            comfort, safety and personalised care for every patient.
                        </p>

                        <div class="about-icon-area wow fadeInUp" data-wow-delay=".3s">

                            <div class="about-items">
                                <div class="about-img">
                                    <img src="{{ asset('assets/img/home-1/about/icon-01.png') }}"
                                        alt="Expert Doctors">
                                </div>

                                <h5>
                                    Experienced & <br>
                                    Specialist Doctors
                                </h5>
                            </div>

                            <div class="about-items">
                                <div class="about-img">
                                    <img src="{{ asset('assets/img/home-1/about/icon-02.png') }}"
                                        alt="Advanced Healthcare">
                                </div>

                                <h5>
                                    Advanced Medical <br>
                                    Care & Facilities
                                </h5>
                            </div>

                        </div>

                        <div class="list-box wow fadeInUp" data-wow-delay=".4s">

                            <ul>
                                <li>
                                    <i class="far fa-check"></i>
                                    Comprehensive Multispeciality Healthcare
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    Experienced & Dedicated Medical Team
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <i class="far fa-check"></i>
                                    Patient-Centred Treatment & Care
                                </li>

                                <li>
                                    <i class="far fa-check"></i>
                                    Convenient Appointment & Support
                                </li>
                            </ul>

                        </div>

                        <div class="about-btn wow fadeInUp" data-wow-delay=".5s">
                            <a href="{{ url('/contact') }}" class="theme-btn">
                                <i class="far fa-chevron-right"></i>
                                Contact Atulya Hospital
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Service Section Start -->
<!-- Service Section Start -->

<section class="service-section section-padding section-bg-2 fix">


    <div class="service-shape-1">
        <img src="{{ asset('assets/img/home-1/service/shape-1.png') }}" alt="img">
    </div>

    <div class="service-shape-2">
        <img src="{{ asset('assets/img/home-1/service/shape-2.png') }}" alt="img">
    </div>

    <div class="service-shape-3">
        <img src="{{ asset('assets/img/home-1/service/shape-3.png') }}" alt="img">
    </div>

    <div class="container">

        <div class="section-title text-center">
            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                OUR SERVICES
            </span>

            <h2 class="text-white tx-title sec_title tz-itm-title tz-itm-anim">
                Comprehensive Healthcare <br>
                For You & Your Family
            </h2>
        </div>

        <div class="service-wrapper">
            <div class="row">

                <!-- Service Categories -->
                <div class="col-lg-4">
                    <ul class="nav">

                        <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                            <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                                Orthopaedics <i class="far fa-chevron-right"></i>
                            </a>
                        </li>

                        <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                            <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                Joint Replacement <i class="far fa-chevron-right"></i>
                            </a>
                        </li>

                        <li class="nav-item wow fadeInUp" data-wow-delay=".6s">
                            <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                ENT Care <i class="far fa-chevron-right"></i>
                            </a>
                        </li>

                        <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                            <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                Skin & Cosmetics <i class="far fa-chevron-right"></i>
                            </a>
                        </li>

                    </ul>
                </div>

                <!-- Service Content -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">

                    <div class="tab-content">

                        <!-- Orthopaedics -->
                        <div id="thumb1" class="tab-pane fade show active">
                            <div class="service-box-items wow fadeInUp" data-wow-delay=".3s">

                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>

                                    <h3>
                                        <a href="{{ url('/departments/orthopaedics') }}">
                                            Advanced Orthopaedic <br>
                                            Care & Treatment
                                        </a>
                                    </h3>

                                    <p>
                                        Comprehensive orthopaedic care focused on accurate diagnosis,
                                        effective treatment and helping patients regain mobility and
                                        improve their quality of life.
                                    </p>

                                    <a href="{{ url('/departments/orthopaedics') }}" class="theme-btn mt-5">
                                        <i class="far fa-chevron-right"></i>
                                        More Details
                                    </a>

                                </div>

                                <div class="service-image">
                                    <img src="{{ asset('assets/img/home-1/service/service.png') }}"
                                        alt="Orthopaedic Care">


                                </div>

                            </div>
                        </div>


                        <!-- Joint Replacement -->
                        <div id="thumb2" class="tab-pane fade">
                            <div class="service-box-items">

                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>

                                    <h3>
                                        <a href="{{ url('/departments/joint-replacement') }}">
                                            Joint Replacement <br>
                                            & Mobility Care
                                        </a>
                                    </h3>

                                    <p>
                                        Specialised care for patients with joint problems, with a focus
                                        on pain management, treatment and improved movement for a better
                                        quality of life.
                                    </p>

                                    <a href="{{ url('/departments/joint-replacement') }}" class="theme-btn mt-5">
                                        <i class="far fa-chevron-right"></i>
                                        More Details
                                    </a>

                                </div>

                                <div class="service-image">
                                    <img src="{{ asset('assets/img/home-1/service/service.png') }}"
                                        alt="Joint Replacement Care">


                                </div>

                            </div>
                        </div>


                        <!-- ENT Care -->
                        <div id="thumb3" class="tab-pane fade">
                            <div class="service-box-items">

                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>

                                    <h3>
                                        <a href="{{ url('/departments/ent') }}">
                                            Complete ENT <br>
                                            Care & Treatment
                                        </a>
                                    </h3>

                                    <p>
                                        Comprehensive treatment for ear, nose and throat conditions
                                        with specialist consultation, accurate diagnosis and
                                        personalised patient care.
                                    </p>

                                    <a href="{{ url('/departments/ent') }}" class="theme-btn mt-5">
                                        <i class="far fa-chevron-right"></i>
                                        More Details
                                    </a>

                                </div>

                                <div class="service-image">
                                    <img img src="{{ asset('assets/img/home-1/service/service.png') }}"
                                        alt="ENT Care">


                                </div>

                            </div>
                        </div>


                        <!-- Skin & Cosmetics -->
                        <div id="thumb4" class="tab-pane fade">
                            <div class="service-box-items">

                                <div class="service-icon-box">

                                    <div class="icon">
                                        <i class="flaticon-good-heart"></i>
                                    </div>

                                    <h3>
                                        <a href="{{ url('/departments/skin-cosmetics') }}">
                                            Skin & Cosmetic <br>
                                            Care Services
                                        </a>
                                    </h3>

                                    <p>
                                        Professional dermatology and cosmetic care designed to address
                                        a wide range of skin concerns with personalised treatment and
                                        patient-focused care.
                                    </p>

                                    <a href="{{ url('/departments/skin-cosmetics') }}" class="theme-btn mt-5">
                                        <i class="far fa-chevron-right"></i>
                                        More Details
                                    </a>

                                </div>

                                <div class="service-image">
                                    <img src="{{ asset('assets/img/home-1/service/service.png') }}"
                                        alt="Skin and Cosmetic Care">


                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
    ```

</section>
<!-- Service Section End -->


<!-- Cta Section Start -->

<section class="cta-section color-bg-1 section-padding pt-0 fix">


    <div class="team-shape-2">
        <img src="{{ asset('assets/img/home-1/team/shape-2.png') }}" alt="img">
    </div>

    <div class="container">

        <!-- CTA -->
        <div class="cta-wrapper zoom-effect-style bg-cover"
            style="background-image: linear-gradient(rgba(255,255,255,0.20), rgba(255,255,255,0.82)), url('{{ asset('assets/img/home-1/cta/bg-image.png') }}');">



            <div class="section-title-area align-items-end mb-0">

                <div class="section-title">

                    <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                        MEET OUR SPECIALISTS
                    </span>

                    <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                        Expert Doctors, Compassionate <br>
                        Care For Your Better Health
                    </h2>

                </div>

                <div class="call-box wow fadeInUp" data-wow-delay=".3s">

                    <div class="call-icon">
                        <img src="{{ asset('assets/img/home-1/cta/call-icon.png') }}"
                            alt="Emergency Helpline">
                    </div>

                    <div class="content">
                        <p>Call Emergency</p>

                        <a href="tel:+919727579000">
                            +91 97275 79000
                        </a>
                    </div>

                </div>

            </div>
        </div>


     <!-- Doctors -->
<!-- Doctors -->
<div class="row g-4 section-padding pb-0 advance-wrap">

    @foreach($doctors as $doctor)

        <div class="col-xl-3 col-lg-4 col-md-6">

            <div class="team-box-items mt-0 advance-item h-100 d-flex flex-column">

                <!-- Doctor Image -->
                <div class="team-image">

                    <img
                        src="{{ asset($doctor['image']) }}"
                        alt="{{ $doctor['name'] }}"
                    >

                    <span class="post-box">
                        {{ $doctor['department'] }}
                    </span>

                </div>

                <!-- Doctor Content -->
                <div class="team-content d-flex flex-column flex-grow-1">

                    <!-- Doctor Name -->
                    <div style="height: 35px; overflow: hidden;">

                        <h3 class="mb-0">
                            <a href="{{ route('doctors.show', $doctor['slug']) }}">
                                {{ $doctor['name'] }}
                            </a>
                        </h3>

                    </div>


                    <!-- Appointment -->
                    <div
                        class="phone-box"
                        style="height: 45px;"
                    >

                        <i class="fas fa-phone-alt"></i>

                        <span>
                            <b>Appointment</b> :

                            <a href="tel:+919727579000">
                                +91 97275 79000
                            </a>
                        </span>

                    </div>


                    <!-- Specialization -->
                    <div
                        style="
                            height: 65px;
                            overflow: hidden;
                        "
                    >

                        <p class="mb-0">
                            {{ $doctor['specialization'] }}
                        </p>

                    </div>


                    <!-- Qualification -->
                    <div
                        style="
                            height: 55px;
                            overflow: hidden;
                        "
                    >

                        <p class="mb-0">
                            <strong>
                                {{ $doctor['qualification'] }}
                            </strong>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    @endforeach

</div>

        <!-- Button -->
        <div class="team-button text-center mt-5 wow fadeInUp" data-wow-delay=".9s">

            <a href="{{ url('/doctors') }}" class="theme-btn">
                <i class="far fa-chevron-right"></i>
                View All Doctors
            </a>

        </div>

    </div>
    ```

</section>
<!-- Cta Section End -->




<!-- Video Section Start -->
<div class="vedio-bg-section fix bg-cover" style="background-image: url(assets/img/home-1/counter/video-img.jpg);">
    <div class="counter-section">
        <div class="container">
            <div class="counter-wrapper zoom-effect-style">
                <div class="counter-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home-1/counter/icon-01.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h2><span class="odometer" data-count="38">00</span>k</h2>
                        <p>Satisfied Patients</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home-1/counter/icon-02.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h2><span class="odometer" data-count="420">00</span></h2>
                        <p>Clinic Rooms</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home-1/counter/icon-03.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h2><span class="odometer" data-count="32">00</span>+</h2>
                        <p>Awards Winning</p>
                    </div>
                </div>
                <div class="counter-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home-1/counter/icon-04.png') }}" alt="img">
                    </div>
                    <div class="content">
                        <h2><span class="odometer" data-count="563">00</span>K</h2>
                        <p>Kinds Of Research</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vedio-wrapper">
        <div class="video">
            <a href="#" class="video-btn ripple video-popup">
                <i class="fas fa-play"></i>
            </a>
        </div>
    </div>
</div>


<!-- Feature Section Start -->
<section class="feature-treatment-section section-padding fix section-bg-3">

    <div class="feature-shape-1">
        <img src="{{ asset('assets/img/home-1/feature/shape-01.png') }}" alt="img">
    </div>

    <div class="feature-shape-2">
        <img src="{{ asset('assets/img/home-1/feature/shape-02.png') }}" alt="img">
    </div>

    <div class="container">

        <div class="section-title text-center">

            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                WHY CHOOSE ATULYA HOSPITAL
            </span>

            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                Quality Healthcare Focused <br>
                On You & Your Family
            </h2>

        </div>

        <div class="row">

            <!-- Feature 1 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="feature-treatment-items item_right_1">

                    <div class="feature-icon-box">

                        <h3>
                            Compassionate Care <br> For Every Patient
                        </h3>

                        <i class="flaticon-heartbeat"></i>

                    </div>

                    <p>
                        We believe every patient deserves personalised attention,
                        compassionate care and a comfortable healthcare experience.
                    </p>

                </div>
            </div>


            <!-- Feature 2 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="feature-treatment-items">

                    <div class="feature-icon-box">

                        <h3>
                            Experienced Doctors <br> & Medical Team
                        </h3>

                        <i class="flaticon-social-care"></i>

                    </div>

                    <p>
                        Our dedicated team of doctors and healthcare professionals
                        works together to provide reliable and personalised medical care.
                    </p>

                </div>
            </div>


            <!-- Feature 3 -->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="feature-treatment-items item_left_1">

                    <div class="feature-icon-box">

                        <h3>
                            Comprehensive <br> Multispeciality Care
                        </h3>

                        <i class="flaticon-health-insurance-1"></i>

                    </div>

                    <p>
                        From routine consultations to specialised treatments,
                        Atulya Hospital provides comprehensive healthcare services
                        under one roof.
                    </p>

                </div>
            </div>

        </div>

    </div>

</section>



<!--  Appointment Section Start -->
<section class="appointment-section">
    <div class="container">
        <div class="appointment-wrapper">
            <div class="row g-2">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="appointment-items">
                        <h3>Book An Appointment</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <p>Name</p>
                                        <input type="text" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <p>Email</p>
                                        <input type="text" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <p>Phone</p>
                                        <input type="text" placeholder="Your phone">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <p>Department</p>
                                        <div class="form">
                                            <select class="single-select w-100">
                                                <option>Your department</option>
                                                <option>Cardiology Department.</option>
                                                <option>Heart Disease</option>
                                                <option>Orthopedics Department</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <p>Date</p>
                                        <input type="text" placeholder="Your date">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <p>Time</p>
                                        <input type="text" placeholder="Your time">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-clt">
                                        <button class="theme-btn" type="submit">
                                            Make an Appointment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="appointment-image">
                        <img src="{{ asset('assets/img/home-1/appointemnt.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Testimonial Section5 Start -->
<section class="testimonial-section-1 section-padding pb-0 bg-cover fix" style="background-image: url('assets/img/home-1/testimonial/bg-test1.png');">
    <div class="shape float-bob-y">
        <img src="{{ asset('assets/img/home-1/testimonial/vector.png') }}" alt="img">
    </div>
    <div class="shape-2 float-bob-y">
        <img src="{{ asset('assets/img/home-1/testimonial/hand.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="testimonial-wrapper-1">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="testimonial-image">
                        <img src="{{ asset('assets/img/home-1/testimonial/test-girl.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-title-area">
                        <div class="section-title">
                            <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR TESTIMONIAL</span>
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                Our Real Story of Clients
                            </h2>
                        </div>
                        <div class="array-button-2">
                            <button class="array-prev"><i class="fas fa-chevron-left"></i></button>
                            <button class="array-next"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="testimonial-right-item">
                        <div class="swiper testimonial-slider-1">
                            <div class="swiper-wrapper">
                             
                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">

                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                               “I am a doctor myself and have taken the help of my colleague Dr. Dhaivat Shukla for joint-related problems in my relatives. His diagnosis and treatment approach have always impressed me. His knowledge, dedication, and patient care are truly commendable. Best wishes to my dear friend Dr. Shukla and the entire Atulya Hospital team.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>Sangeeta Sheth</h5>

                                                </div>
                                                <div class="icon">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">

                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                           “Dr. Priyanka Prajapati provided excellent treatment for my father he was suffering from malaria. She was professional, knowledgeable, and he received the right treatment at the right time. Her caring approach gave us confidence throughout the treatment. Thanks to her and the Atulya team for their excellent care.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Krishtal Parikh</h5>

                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">

                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                          “My mother was suffering from arthritis, severe morning stiffness, and constant pain. Dr. Dhaivat Shukla at Atulya Hospital helped us manage her condition with proper treatment and guidance. Her pain improved significantly, and we are truly thankful to Dr. Shukla and the entire Atulya team.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Taksh Shrimali</h5>

                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">

                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                               “Dr. Dhaivat Shukla is an excellent doctor. I was suffering from Ankylosing Spondylitis, and he diagnosed my condition quickly and started effective treatment. He is very supportive, helpful, and caring towards his patients. I am very satisfied with his treatment and would highly recommend him.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Shivani Joshi</h5>

                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-box-item-1">
                                        <div class="client-image">

                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                              “My son was just 5 years old when he was diagnosed with a rheumatological condition. We took multiple opinions before meeting Dr. Dhaivat Shukla. He understood the condition well, guided us properly, and started the right treatment. We are very thankful to Dr. Shukla and the Atulya team for their care and support.”
                                            </p>
                                            <div class="info-item">
                                                <div class="info-content">
                                                    <h5>
                                                        Husain Bhatia
                                                    </h5>

                                                </div>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/home-5/testimonial/01.svg') }}" alt="img">
                                                </div>
                                            </div>
                                        </div>
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

<!-- Brand Section Start -->
<div class="brand-section section-padding fix">
    <div class="container">
        <div class="swiper brand-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/01.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/02.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/03.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/04.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/05.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="barnd-image text-center">
                        <img src="{{ asset('assets/img/home-1/brand/06.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News Section Start -->
<section class="news-section section-padding fix pt-0">
    <div class="news-shape-1">
        <img src="{{ asset('assets/img/home-1/news/shape-01.png') }}" alt="img">
    </div>
    <div class="news-shape-2">
        <img src="{{ asset('assets/img/home-1/news/shape-02.png') }}" alt="img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="subtitle tz-sub-tilte tz-sub-anim  text-uppercase tx-subTitle">OUR BLOG</span>
            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Our Recent Insights, Blog <br> and News From Us</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="news-box-items">
                    <div class="news-img">
                        <img src="{{ asset('assets/img/home-1/news/blog-1.png') }}" alt="img">
                        <span class="post-box">
                            Medical
                        </span>
                    </div>
                    <div class="news-content">
                        <span>09 May, 2026</span>
                        <h3><a href="{{ url('/blog') }}">When to See a Doctor: Warning <br> Signs You Shouldn’t Ignore</a></h3>
                        <p>A brief statement outlining the purpose and <br> mission of the clinic this can include.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="news-box-items">
                    <div class="news-img">
                        <img src="{{ asset('assets/img/home-1/news/blog-2.png') }}" alt="img">
                        <span class="post-box">
                            Medical
                        </span>
                    </div>
                    <div class="news-content">
                        <span>20 July, 2026</span>
                        <h3><a href="{{ url('/blog') }}">10 Everyday Habits for a Healthier <br> Life for Your Life</a></h3>
                        <p>A brief statement outlining the purpose and <br> mission of the clinic this can include.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="news-box-items">
                    <div class="news-img">
                        <img src="{{ asset('assets/img/home-1/news/blog-3.png') }}" alt="img">
                        <span class="post-box">
                            Medical
                        </span>
                    </div>
                    <div class="news-content">
                        <span>20 January, 2026</span>
                        <h3><a href="{{ url('/blog') }}">10 Simple Daily Habits to Improve <br> Your Healthcare</a></h3>
                        <p>A brief statement outlining the purpose and <br> mission of the clinic this can include.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Faq Section Start -->

<!-- Faq Section Start -->

<section class="faq-section section-padding bg-cover" style="background-image: url('assets/img/home-1/faq-bg.jpg');">
    <div class="container">
        <div class="faq-wrapper-1">
            <div class="row g-4">


                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="faq-content sticky-style">
                        <div class="section-title mb-0 text-start">
                            <span class="subtitle tz-sub-tilte tz-sub-anim text-uppercase tx-subTitle">
                                FREQUENTLY ASKED QUESTIONS
                            </span>

                            <h2 class="tx-title sec_title tz-itm-title tz-itm-anim">
                                Have Questions About Our Healthcare Services?
                            </h2>
                        </div>

                        <div class="faq-button wow fadeInUp" data-wow-delay=".2s">
                            <a href="{{ url('/contact') }}"class="theme-btn">
                                <i class="far fa-chevron-right"></i>
                                Contact Us
                            </a>

                            <div class="icon-items">
                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>

                                <div class="content">
                                    <p>Emergency Assistance</p>
                                    <h4>
                                        <a href="tel:+919727579000">
                                            +91 97275 79000
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Accordion -->
                <div class="col-lg-6">
                    <div class="faq-items">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion">

                                <!-- FAQ 1 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".2s">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne"
                                            aria-expanded="false"
                                            aria-controls="collapseOne">
                                            What medical services are available at Atulya Hospital?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseOne"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Atulya Hospital provides comprehensive multispeciality healthcare services including consultations, diagnosis, treatment, surgical care and other specialised medical services under one roof.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 2 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".4s">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How can I book an appointment with a doctor?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            You can book an appointment through our website appointment form or contact Atulya Hospital directly at +91 97275 79000 for assistance with scheduling your consultation.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 3 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".6s">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Do I need an appointment before visiting the hospital?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingThree"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Booking an appointment in advance is recommended for doctor consultations as it can help reduce waiting time. For urgent medical needs, you can contact the hospital directly for immediate guidance.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 4 -->
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".8s">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour"
                                            aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Does Atulya Hospital provide emergency medical assistance?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseFour"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingFour"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes. For urgent medical assistance, patients or family members can contact Atulya Hospital at +91 97275 79000. Our team will guide you according to the patient's medical requirements.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 5 -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                    <h5 class="accordion-header" id="headingFive">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive"
                                            aria-expanded="true"
                                            aria-controls="collapseFive">
                                            What should I bring for my doctor consultation?
                                        </button>
                                    </h5>

                                    <div
                                        id="collapseFive"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="headingFive"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Please bring your previous medical reports, prescriptions, current medication details and any relevant test results. These records can help our doctors better understand your medical history and provide appropriate care.
                                        </div>
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
<!-- Faq Section End -->

@endsection