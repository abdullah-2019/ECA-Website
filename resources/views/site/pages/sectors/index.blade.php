@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sectors</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Sectors</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
        <div class="container">

            <div class="section-title justify-content-around">
                <h2>SECTORS</h2>
                <p>
                    To boost the overall business enabling environment and help entrepreneurs and micro, small, and
                    medium companies (MSMEs) thrive, ECA collaborates with private business incubators and accelerators,
                    as well as firms of all sizes. ECA assisted entrepreneurs and MSMEs in gaining access to capital and
                    vital services, as well as having precise financial documentation and clear taxation, via its
                    support and services. Furthermore, ECA collaborate with local enterprises to provide consulting and
                    training services in order to help organizations and employees develop their potential.
                </p><br>
                <p>
                    Eagle-Wise chartered Accountants has the privileged of working with public sector of the country.
                    Public enterprises, often known as state-owned firms, are self-financing commercial enterprises
                    controlled by the government that offer a variety of private goods and services. ECA has worked with
                    some of the ministries of Afghanistan and are still in progress to achieve various projects of the
                    government and provide the best quality services to the government and especially to inhabitants of
                    the country.
                </p><br>
                <p>
                    Eagle-Wise chartered Accountants is also working with various NGO’s and Welfare organizations across
                    Afghanistan. ECA provide their own services to them and help them in every aspect of their
                    functions. ECA also tend to work with charity organizations and provide their own services at very
                    low or less costs.
                </p><br>
                <p>
                    ECA provide Audit, Taxation and Advisory services as per the applicable Laws, Regulations, FIRSs,
                    IASs, ISAs, IPSAS, IPPFs’ Standards to the below sectors at large.
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> Manufacturing</li>
                            <li><i class="bi bi-check2-circle"></i> Mining and energy</li>
                            <li><i class="bi bi-check2-circle"></i> Oil and gas</li>
                            <li><i class="bi bi-check2-circle"></i> Financial institutions</li>
                            <li><i class="bi bi-check2-circle"></i> Professional services</li>
                            <li><i class="bi bi-check2-circle"></i> Insurance companies</li>
                            <li><i class="bi bi-check2-circle"></i> Donors community</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> Information technology</li>
                            <li><i class="bi bi-check2-circle"></i> Vehicle financing and leasing</li>
                            <li><i class="bi bi-check2-circle"></i> Wholesale and retail trade</li>
                            <li><i class="bi bi-check2-circle"></i> Construction</li>
                            <li><i class="bi bi-check2-circle"></i> Food and beverage</li>
                            <li><i class="bi bi-check2-circle"></i> Entertainment</li>
                            <li><i class="bi bi-check2-circle"></i> Telecommunications</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> NGOs</li>
                            <li><i class="bi bi-check2-circle"></i> Retail</li>
                            <li><i class="bi bi-check2-circle"></i> Health care</li>
                            <li><i class="bi bi-check2-circle"></i> Pharmaceutics</li>
                            <li><i class="bi bi-check2-circle"></i> Public Sectors organization</li>
                            <li><i class="bi bi-check2-circle"></i> Demanded clients</li>
                            <li><i class="bi bi-check2-circle"></i> Not-for-profit and charities, including sports
                                organizations, churches, etc</li>
                            <li><i class="bi bi-check2-circle"></i> Real estate, land development and property
                                management</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-4 box sector-box">
                    <img src="{{ asset('../site-assets/img/private-sector.webp') }}" alt="img">
                    <h5>Private Sectors</h5>
                    <p>
                        To boost the overall business enabling environment and help entrepreneurs and micro, small, and
                        medium companies (MSMEs) thrive, ECA collaborates with private business incubators and
                        accelerators, as well as firms of all sizes. ECA assisted entrepreneurs and MSMEs in gaining
                        access to capital and vital services, as well as having precise financial documentation and
                        clear taxation, via its support and services. Furthermore, ECA collaborated with local
                        enterprises to provide consulting and training services in order to help organizations and
                        employees develop their potential.
                    </p>
                </div>

                <div class="col-lg-4 box featured sector-box">
                    <img src="{{ asset('../site-assets/img/public-sector.jpg') }}" alt="public sector">
                    <h5>Public Sectors</h5>
                    <p>
                        Eagle-Wise chartered Accountants has the privileged of working with public sector of the
                        country.
                        Public enterprises, often known as state-owned firms, are self-financing commercial enterprises
                        controlled by the government that sell a variety of private goods and services.
                    </p>
                    <p>
                        They typically function on a commercial basis. ECA has worked with some of the ministries of
                        Afghanistan and are still in progress to achieve various projects of the government and provide
                        the best quality services to the government and especially to inhabitants of the country.
                    </p>
                </div>

                <div class="col-lg-4 box sector-box">
                    <img src="{{ asset('../site-assets/img/ngo.png') }}" alt="ngo">
                    <h5>NGO’S & WELFARE</h5>
                    <p>
                        Eagle-Wise chartered Accountants is also working with various NGO’s and Welfare organizations
                        across Afghanistan. ECA provide their own services to them and help them in every aspect of
                        their functions. ECA also tend to work with charity organizations and provide their own services
                        at very low or less costs.
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->
@endsection
