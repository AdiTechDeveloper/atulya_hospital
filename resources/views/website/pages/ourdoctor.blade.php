@extends('website.layout.app')

@section('title', 'Our Doctors')

@section('content')

<section class="team-section fix section-padding">

    <div class="container">

        <!-- Section Heading -->
        <div class="section-title text-center mb-5 wow fadeInUp"
             data-wow-delay=".2s">

            <span class="subtitle">
                OUR DOCTORS
            </span>

            <h2>
                Meet Our Expert Doctors
            </h2>

            <p>
                Our experienced specialists are dedicated to providing
                quality healthcare with compassionate patient care.
            </p>

        </div>


        <!-- Doctors Grid -->
        <div class="row g-4">

            @foreach($doctors as $doctor)

                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp"
                     data-wow-delay=".2s">

                    <div class="team-box-items mt-0">

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
                        <div class="team-content">

                            <!-- Name -->
                            <h3>
                                <a href="{{ route('doctors.show', $doctor['slug']) }}">
                                    {{ $doctor['name'] }}
                                </a>
                            </h3>


                            <!-- Specialization -->
                            <p>
                                {{ $doctor['specialization'] }}
                            </p>


                            <!-- Qualification -->
                            <p>
                                <strong>
                                    {{ $doctor['qualification'] }}
                                </strong>
                            </p>


                            <!-- Appointment -->
                            <div class="phone-box">

                                <i class="fas fa-phone-alt"></i>

                                <span>
                                    <b>Appointment</b> :
                                    <a href="tel:+919727579000">
                                        +91 97275 79000
                                    </a>
                                </span>

                            </div>


                            <!-- Timing -->
                            <div class="phone-box">

                                <i class="far fa-clock"></i>

                                <span>
                                    <b>OPD Timing</b> :
                                    {{ $doctor['timing'] }}
                                </span>

                            </div>


                            <!-- Profile Button -->
                            <a
                                href="{{ route('doctors.show', $doctor['slug']) }}"
                                class="theme-btn mt-3"
                            >
                                <i class="far fa-chevron-right"></i>
                                View Profile
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection