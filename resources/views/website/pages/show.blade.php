@extends('website.layout.app')

@section('title', $department['name'])

@section('content')

    <!-- =========================
        Department Details Section
    ========================== -->
    <section class="service-details-section section-padding pt-80 pb-80">

        <div class="container">

            <div class="service-details-wrapper">

                <div class="row g-3">

                    <!-- =========================
                        LEFT SIDEBAR
                    ========================== -->
                    <div class="col-lg-4 order-2 order-xl-1">

                        <div class="service-details-sidebar sticky-style">

                            <!-- Department List -->
                            <div class="sidebar-widget">

                                <ul class="wow fadeInUp" data-wow-delay=".3s">

                                    <li>
                                        <a href="{{ url('/departments/urology') }}">
                                            <span>Urology</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/orthopedic') }}">
                                            <span>Orthopedic</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/rheumatology') }}">
                                            <span>Rheumatology</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/gastro-surgery') }}">
                                            <span>Gastro Surgery</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/trauma') }}">
                                            <span>Trauma</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/critical-care') }}">
                                            <span>Critical Care</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/general-surgery') }}">
                                            <span>General Surgery</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/joint-replacement') }}">
                                            <span>Joint Replacement</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/internal-medicine') }}">
                                            <span>Internal Medicine</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/ent') }}">
                                            <span>ENT</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/arthroscopy') }}">
                                            <span>Arthroscopy</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/skin-cosmetics') }}">
                                            <span>Skin & Cosmetics</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/onco-surgery') }}">
                                            <span>Onco Surgery</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/sports-medicine') }}">
                                            <span>Sports Medicine</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/plastic-surgery') }}">
                                            <span>Plastic Surgery</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/departments/physiotherapy') }}">
                                            <span>Physiotherapy</span>
                                            <span class="icon">
                                                <i class="far fa-long-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                </ul>

                            </div>


                            <!-- Contact Sidebar -->
                            <div class="sidebar-widget-image wow fadeInUp"
                                data-wow-delay=".5s">

                                <img
                                    src="{{ asset('assets/img/inner/service-details/02.jpg') }}"
                                    alt="Hospital Department"
                                >

                                <div class="content">

                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>

                                    <h3>
                                        <a href="tel:+916355258425">
                                            +91 63552 58425
                                        </a>
                                    </h3>

                                    <h3>
                                        <a
                                            href="mailto:info@example.com"
                                            class="link"
                                        >
                                            info@example.com
                                        </a>
                                    </h3>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- =========================
                        RIGHT CONTENT
                    ========================== -->
                    <div class="col-lg-8 order-1 order-xl-2">

                        <div class="service-details-right-items" style="padding-bottom: 10px;">


                            <!-- Department Main Image -->
                            <div class="service-img wow img-custom-anim-left">

                                <img
                                    src="{{ asset('assets/img/home-5/contact.jpg') }}"
                                    alt="{{ $department['name'] }}"
                                >

                            </div>


                            <!-- Department Name -->
                            <h3>
                                {{ $department['name'] }}
                            </h3>


                            <!-- Introduction -->
                            <p>
                                {{ $department['introduction'] }}
                            </p>


                            <!-- =========================
                                SERVICES
                            ========================== -->

                            <h4 style="margin-top: 24px; margin-bottom: 10px;">
                                Our Services
                            </h4>

                            <p>
                                Our {{ $department['name'] }} Department provides
                                a range of medical services focused on diagnosis,
                                treatment and continued patient care.
                            </p>


                            <div class="list-box">

                                <ul>

                                    @foreach(array_slice($department['services'], 0, ceil(count($department['services']) / 2)) as $service)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $service }}
                                        </li>

                                    @endforeach

                                </ul>


                                <ul>

                                    @foreach(array_slice($department['services'], ceil(count($department['services']) / 2)) as $service)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $service }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>



                            <h4 style="margin-top: 24px; margin-bottom: 10px;">
                                Our Specialities
                            </h4>

                            <p>
                                Our department provides specialized care across
                                multiple areas, supported by experienced medical
                                professionals and appropriate hospital facilities.
                            </p>


                            <div class="list-box">

                                <ul>

                                    @foreach(array_slice($department['specialities'], 0, ceil(count($department['specialities']) / 2)) as $speciality)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $speciality }}
                                        </li>

                                    @endforeach

                                </ul>


                                <ul>

                                    @foreach(array_slice($department['specialities'], ceil(count($department['specialities']) / 2)) as $speciality)

                                        <li>
                                            <i class="far fa-check"></i>
                                            {{ $speciality }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>


                       
                             
                            <h4 style="margin-top: 24px; margin-bottom: 10px;">
                                Related Doctors
                            </h4>

                            <p>
                                Our {{ $department['name'] }} services are supported
                                by qualified medical professionals who focus on
                                patient-specific diagnosis and treatment.
                            </p>


                            <div class="list-box">

                                <ul>

                                    @foreach($department['related_doctors'] as $doctor)

                                        <li>
                                            <i class="far fa-user-md"></i>
                                            {{ $doctor }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>


                       

                            @if(count($department['images']) > 1)

                                <h4>
                                    Department Facilities
                                </h4>

                                <div class="row g-3 mt-2>

                                    @foreach(array_slice($department['images'], 1) as $image)

                                        <div class="col-md-6">

                                            <div class="service-img">

                                                <img
                                                    src="{{ asset('assets/img/home-5/contact.jpg') }}"
                                                    alt="{{ $department['name'] }}"
                                                >

                                            </div>

                                        </div>

                                    @endforeach

                                </div>

                            @endif


                            <!-- Appointment CTA -->
                            <div class="mt-4">

                                <button
                                    type="button"
                                    class="theme-btn"
                                    disabled
                                    style="opacity: 0.65; cursor: not-allowed;"
                                >

                                    <i class="far fa-chevron-right"></i>

                                    Make An Appointment

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="contact-appointment-section section-padding fix pt-0">

        <div class="container">

            <div class="contact-appointment-wrapper-5">

                <div class="row g-3">

                    <!-- LEFT -->
                    <div class="col-lg-6">

                        <div class="contact-appointment-left-item">

                            <div
                                class="contact-appointment-image wow img-custom-anim-left"
                                data-wow-duration="1.3s"
                                data-wow-delay="0.3s"
                            >

                                <img
                                    src="{{ asset('assets/img/home-5/contact.jpg') }}"
                                    alt="Contact Hospital"
                                >

                            </div>


                            <div class="contact-appointment-list">

                                <h5
                                    class="wow fadeInUp"
                                    data-wow-delay=".3s"
                                >
                                    Working Hours
                                </h5>

                                <div
                                    class="contact-list wow fadeInUp"
                                    data-wow-delay=".5s"
                                >

                                    <ul class="list">

                                        <li>
                                            Monday
                                            <span>9AM - 10PM</span>
                                        </li>

                                        <li>
                                            Saturday
                                            <span>9AM - 08PM</span>
                                        </li>

                                        <li>
                                            Sunday
                                            <span>9AM - 12PM</span>
                                        </li>

                                    </ul>


                                    <div class="caller-item">

                                        <div class="icon">

                                            <img
                                                src="{{ asset('assets/img/home-5/call.png') }}"
                                                alt="Call"
                                            >

                                        </div>

                                        <div class="content">

                                            <span>For Help</span>

                                            <p>
                                                <a href="tel:+916355258425">
                                                    +91 63552 58425
                                                </a>
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- RIGHT -->
                    <div class="col-lg-6">

                        <div class="contact-appointment-box">

                            <h3>
                                Book An Appointment
                            </h3>

                            <form action="javascript:void(0);" method="POST" onsubmit="return false;">

                                @csrf

                                <div class="row g-3">

                                    <!-- Name -->
                                    <div class="col-lg-6 wow fadeInUp"
                                        data-wow-delay=".3s">

                                        <div class="form-clt">

                                            <span>Name</span>

                                            <input
                                                type="text"
                                                name="name"
                                                placeholder="Your Name"
                                            >

                                        </div>

                                    </div>


                                    <!-- Email -->
                                    <div class="col-lg-6 wow fadeInUp"
                                        data-wow-delay=".5s">

                                        <div class="form-clt">

                                            <span>Email</span>

                                            <input
                                                type="email"
                                                name="email"
                                                placeholder="Your Email"
                                            >

                                        </div>

                                    </div>


                                    <!-- Phone -->
                                    <div class="col-lg-6 wow fadeInUp"
                                        data-wow-delay=".3s">

                                        <div class="form-clt">

                                            <span>Phone</span>

                                            <input
                                                type="text"
                                                name="phone"
                                                placeholder="Your Phone"
                                            >

                                        </div>

                                    </div>


                                    <!-- Department -->
                                    <div class="col-lg-6 wow fadeInUp"
                                        data-wow-delay=".5s">

                                        <div class="form-clt">

                                            <span>Department</span>

                                            <div class="form">

                                                <select
                                                    name="department"
                                                    class="single-select w-100"
                                                >

                                                    <option value="">
                                                        Select Department
                                                    </option>

                                                    <option
                                                        value="{{ $department['slug'] }}"
                                                        selected
                                                    >
                                                        {{ $department['name'] }}
                                                    </option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- Age -->
                                    <div class="col-lg-12 wow fadeInUp"
                                        data-wow-delay=".5s">

                                        <div class="form-clt">

                                            <span>Select Age</span>

                                            <div class="form">

                                                <select
                                                    name="age"
                                                    class="single-select w-100"
                                                >

                                                    <option value="">
                                                        Select Age
                                                    </option>

                                                    <option value="0-18">
                                                        0 - 18
                                                    </option>

                                                    <option value="19-40">
                                                        19 - 40
                                                    </option>

                                                    <option value="41-60">
                                                        41 - 60
                                                    </option>

                                                    <option value="60+">
                                                        60+
                                                    </option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- Message -->
                                    <div class="col-lg-12 wow fadeInUp"
                                        data-wow-delay=".3s">

                                        <div class="form-clt">

                                            <span>Your Message</span>

                                            <textarea
                                                name="message"
                                                placeholder="Write your message..."
                                            ></textarea>

                                        </div>

                                    </div>


                                    <!-- Submit -->
                                    <div class="col-lg-12 wow fadeInUp"
                                        data-wow-delay=".3s">

                                        <button
                                            type="button"
                                            class="theme-btn"
                                            disabled
                                            style="opacity: 0.65; cursor: not-allowed;"
                                        >

                                            <i class="far fa-chevron-right"></i>

                                            Make Your Appointment

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection