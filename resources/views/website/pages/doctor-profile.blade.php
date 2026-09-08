@extends('website.layout.app')

@section('title', $doctor['name'] . ' - Atulya Hospital')

@section('content')

<!-- Doctor Profile Section -->
<section class="team-details-section section-padding fix">
    <div class="container">

        <div class="row g-5 align-items-center">

            <!-- Doctor Image -->
            <div class="col-lg-5">
                <div class="team-details-image">
                    <img
                        src="{{ asset($doctor['image']) }}"
                        alt="{{ $doctor['name'] }}"
                        class="img-fluid"
                    >
                </div>
            </div>

            <!-- Doctor Details -->
            <div class="col-lg-7">
                <div class="team-details-content">

                    <span class="subtitle text-uppercase">
                        {{ $doctor['department'] }}
                    </span>

                    <h1>
                        {{ $doctor['name'] }}
                    </h1>

                    <h4>
                        {{ $doctor['specialization'] }}
                    </h4>

                    <div class="doctor-info mt-4">

                        <!-- Department -->
                        <div class="doctor-info-item">
                            <strong>Department</strong>
                            <span>
                                {{ $doctor['department'] }}
                            </span>
                        </div>

                        <!-- Qualification -->
                        <div class="doctor-info-item">
                            <strong>Qualification</strong>
                            <span>
                                {{ $doctor['qualification'] }}
                            </span>
                        </div>

                        <!-- Specialization -->
                        <div class="doctor-info-item">
                            <strong>Specialization</strong>
                            <span>
                                {{ $doctor['specialization'] }}
                            </span>
                        </div>

                        <!-- Timing -->
                        <div class="doctor-info-item">
                            <strong>OPD Timing</strong>
                            <span>
                                {{ $doctor['timing'] }}
                            </span>
                        </div>

                    </div>

                    <!-- Buttons -->
                    <div class="mt-4">

                        <a
                            href="/contact?doctor={{ urlencode($doctor['name']) }}"
                            class="theme-btn"
                        >
                            <i class="far fa-calendar-check"></i>
                            Book An Appointment
                        </a>

                        <a
                            href="tel:+919727579000"
                            class="theme-btn ms-2"
                        >
                            <i class="fas fa-phone-alt"></i>
                            Call Us
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>


<!-- Doctor About Section -->
<section class="section-padding pt-0">
    <div class="container">

        <div class="row g-4">

            <!-- About Doctor -->
            <div class="col-lg-8">

                <div class="doctor-about-content">

                    <span class="subtitle text-uppercase">
                        About The Doctor
                    </span>

                    <h2>
                        {{ $doctor['name'] }}
                    </h2>

                    <p>
                        {{ $doctor['name'] }} is a
                        {{ $doctor['specialization'] }}
                        at Atulya Super Speciality Hospital & ICU.
                    </p>

                    <p>
                        Atulya Hospital is committed to providing
                        quality healthcare through experienced medical
                        professionals, modern facilities and
                        compassionate patient care.
                    </p>

                </div>

            </div>


            <!-- Appointment Box -->
            <div class="col-lg-4">

                <div class="doctor-appointment-box">

                    <h3>
                        Book An Appointment
                    </h3>

                    <p>
                        Schedule your consultation with
                        {{ $doctor['name'] }}.
                    </p>

                    <div class="appointment-info">

                        <!-- Department -->
                        <div>
                            <i class="fas fa-stethoscope"></i>

                            <span>
                                {{ $doctor['department'] }}
                            </span>
                        </div>

                        <!-- Qualification -->
                        <div>
                            <i class="fas fa-graduation-cap"></i>

                            <span>
                                {{ $doctor['qualification'] }}
                            </span>
                        </div>

                        <!-- Timing -->
                        <div>
                            <i class="fas fa-clock"></i>

                            <span>
                                {{ $doctor['timing'] }}
                            </span>
                        </div>

                        <!-- Phone -->
                        <div>
                            <i class="fas fa-phone-alt"></i>

                            <a href="tel:+919727579000">
                                +91 97275 79000
                            </a>
                        </div>

                    </div>

                    <a
                        href="/contact?doctor={{ urlencode($doctor['name']) }}"
                        class="theme-btn w-100 text-center mt-3"
                    >
                        Book Appointment
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection