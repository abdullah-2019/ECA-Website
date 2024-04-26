@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ol>
            </div>

        </div>
    </section>

    @include('site.home.about.index')

    <!-- ======= About Section ======= -->
    <section class="facts section-bg aos-init aos-animate" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('site-assets/img/privacy.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Privacy Policy:</h3>

                    <p>
                        Eagle Wise Chartered Accountants value client’s privacy. Any information pertaining to the
                        operations of your organization will be held strictly confidential. We require strict adherence by
                        all our staff to the ethical rules of our profession. In all respects of our practice, the firm and
                        its employees maintain strict confidentiality towards information obtained while carrying out our
                        professional duties. In addition, the firm and its people maintain complete independence of interest
                        and mental attitude in relationships with clients. We endeavor to provide quality and transcendent
                        services to all our clients.
                    </p>
                    <p>
                        Our commitment to our clients and others is to respect and protect the privacy and confidentiality
                        of personal and business information that is entrusted to us in the course of rendering professional
                        services to our clients. Each and every one of our employees, partners and contractors is
                        responsible for maintaining the confidentiality and security of all information to which they have
                        access. Our employees are trained to know and respect our Privacy Policy, and compliance with our
                        policies and procedures for protecting personal information is a condition of their employment.
                    </p>
                    <p>
                        The Personal Information Protection and Electronic Documents Act (PIPEDA) governs how all private
                        sector organizations handle personal information of clients, employees, and other. Personal
                        information is defined as any information that can identify an individual and information about an
                        identifiable individual. This includes information such as a person’s home address, date of birth,
                        social insurance number, medical and financial information.
                    </p>
                    <p>
                        The ECA’s partners, staff and associates are governed by the Rules of Professional Conduct
                        maintained by the IFAC. These rules also set standards for the collection and use of personal
                        information.
                    </p>

                    <h3>Resources:</h3>

                    <p>
                        If you have concerns or complaints regarding your personal information or our Privacy Policy, please
                        contact our Privacy and Confidentiality leader in writing by email or mail:
                    </p>
                    <i class="bi bi-check2-circle text-blue"></i> <strong>Phone:</strong> +93 (0) 776 41 53 81 <br>
                    <i class="bi bi-check2-circle"></i> <strong>Email:</strong> privacy@eca.org.af <br>
                    <i class="bi bi-check2-circle"></i> <strong>Address:</strong> OFFICE #6, 4TH FLOOR Muslim Business
                    Center Haji
                    Yaqoob Square, Shar-e-naw Kabul, Afghanistan

                </div>
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
