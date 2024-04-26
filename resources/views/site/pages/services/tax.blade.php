@extends('site.layouts.app')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Tax Services</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="about" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('site-assets/img/tax.jpg') }}" class="img-fluid" alt="tax-services" loading="lazy">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Tax Services</h3>
                    <p>
                        ECA takes pride in delivering unparalleled tax services that transcend conventional expectations.
                        Our dedicated team of seasoned professionals is well-versed in navigating the complexities of local
                        tax
                        regulations to provide clients with practical and strategic solutions tailored to their unique
                        needs. Whether you are an individual, a small business, or a large corporation, we are committed to
                        optimizing your tax position and ensuring compliance with the latest fiscal requirements. Our
                        approach goes beyond mere compliance; we strive to identify opportunities for tax efficiency,
                        offering comprehensive guidance to help you make informed financial decisions. At ECA, we believe in
                        delivering not just services but a partnership that empowers you with the knowledge and confidence
                        to navigate the ever-evolving landscape of tax regulations. We offer a comprehensive range of tax
                        compliance services in this domain.
                    </p>

                </div>
                <br>
                <div class="col-lg-12">
                    <ul>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Monthly and quarterly tax returns filling and assessment.
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Obtaining verification of monthly withholding taxes from the Taxpayers’ Services Department
                            (TSD).
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Preparation and filing of Annual income tax return based on the documents provided by the
                            client.
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Provide regular tax advice to “clients” on tax related issues in accordance with the tax
                            compliances rules.
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Obtaining tax clearance on annual basis from Tax office, based on the submitted tax return for
                            the year.
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Assisting the client in all tax matters at case management level in respect of the submitted tax
                            return as reported through ECA.
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Assist clients in tax audit proceedings
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Obtaining tax exemption certificate for national and international NGOs, based on income tax law
                            of Afghanistan. (for national and international grants etc).
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Obtaining tax exemption under bilateral agreement and treaties (US-ARMY, NATO/ISAF Contractors
                            and sub-contractors, UN AND USAID Contractors, World bank and EU contractors etc).
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Obtaining tax clarification on specific taxation matters.
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Preparing and submitting tax amendments as result of tax audit any tax exemption and correction
                            in the tax returns based on tax laws.
                        </li>
                        <li>
                            <i class="bi bi-check2-circle"></i>
                            Contesting any tax matter on behalf of tax clients relating to adjustment of tax refunds and
                            overpayment of taxes like withholding taxes on interest etc.
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection
