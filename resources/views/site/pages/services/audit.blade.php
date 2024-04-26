@extends('site.layouts.app')

@section('css')
    <style>
        .eca-timeline-title {
            font-size: 25px;
            margin-bottom: 10px;
            color: #ede9e9;
        }

        .eca-timeline-p {
            font-size: 15px;
            color: #ede9e9;
        }

        .eca-timeline {
            max-width: 1200px;
            position: relative;
            margin: 0 auto;
        }

        .eca-timeline::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 6px;
            margin-left: -3px;
            background-color: var(--primary-color);
        }

        .eca-container {
            width: 50%;
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
        }

        .eca-container::after {
            content: "";
            position: absolute;
            top: 15px;
            right: -12px;
            width: 25px;
            height: 25px;
            z-index: 1;
            border-radius: 50%;
            background-color: var(--primary-color);
            border: 5px solid #E5BF15;
        }

        .eca-timeline-left {
            left: 0;
        }

        .eca-timeline-right {
            left: 50%;
        }

        .eca-timeline-left::before {
            content: " ";
            position: absolute;
            top: 22px;
            right: 30px;
            width: 0;
            height: 0;
            z-index: 1;
            border: medium solid var(--primary-color);
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent var(--primary-color);
        }

        .eca-timeline-right::before {
            content: " ";
            position: absolute;
            top: 22px;
            left: 30px;
            width: 0;
            height: 0;
            z-index: 1;
            border: medium solid var(--primary-color);
            border-width: 10px 10px 10px 0;
            border-color: transparent var(--primary-color) transparent transparent;
        }

        .eca-timeline-right::after {
            left: -12px;
        }

        .content {
            padding: 20px 30px;
            position: relative;
            border-radius: 6px;
            background-color: var(--primary-color);
        }

        @media screen and (max-width: 600px) {
            .eca-timeline::after {
                left: 31px;
            }

            .eca-container {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .eca-container::before {
                left: 60px;
                border: medium solid var(--primary-color);
                border-width: 10px 10px 10px 0;
                border-color: transparent var(--primary-color) transparent transparent;
            }

            .eca-timeline-left::after,
            .eca-timeline-right::after {
                left: 14px;
            }

            .eca-timeline-right {
                left: 0%;
            }
        }
    </style>
@endsection

@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Audit and Assurance Services</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <p>
                We provide meticulous Audit and Assurance Services, ensuring accurate and transparent financial records. Our
                experienced auditors adhere to high standards, employing the latest audit methodologies and staying updated
                on accounting practices. We offer tailored project audits for prominent donor agencies in Afghanistan and
                conduct statutory audits for various organizations. Additionally, we perform Special Purpose Audits aligned
                with ISA 805. Our services empower clients with comprehensive financial insights and uphold strict auditor
                independence.
            </p>
        </div>
        <div class="eca-timeline">
            <div class="eca-container eca-timeline-left" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="1000">
                <div class="content">
                    <h2 class="eca-timeline-title">Elevating Standards, Ensuring Integrity</h2>
                    <p class="eca-timeline-p">
                        Our seasoned auditors meticulously examine financial records, ensuring accuracy, compliance, and
                        transparency. Our rigorous auditing processes provide clients with a comprehensive understanding of
                        their financial health and enable them to make informed decisions. We adhere to the highest
                        standards of quality by employing the latest Eagle General Audit Methodology (EGAM) in conducting
                        audits, ensuring alignment with ECA standards. We bolster our audit teams with a cadre of
                        specialists who stay abreast of both domestic and international accounting and auditing practices.
                        This proactive approach enables us to swiftly adapt to changes in accounting systems and laws.
                        Moreover, to augment the effectiveness of our audit services, we have established a robust audit
                        opinion review system overseen by independent review committees separate from the audit teams. This
                        synergy of seasoned professionals, coupled with the utilization of contemporary, tailored
                        knowledge-sharing systems, plays a pivotal role in upholding ECA's commitment to strict auditor
                        independence.
                    </p>
                </div>
            </div>
            <div class="eca-container eca-timeline-right" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="1000">
                <div class="content">
                    <h2 class="eca-timeline-title">Project Financial Statement Audit</h2>
                    <p class="eca-timeline-p">
                        We possess a comprehensive understanding of the criteria established by prominent donor agencies
                        operating in Afghanistan, including UNDP, UN Women, UNOPS, UNOCHA, US Embassy, World Bank, and
                        USAID. Our extensive expertise extends to the audit of funds associated with these agencies, and we
                        provide project audit services tailored to meet the specific requirements and reporting guidelines
                        stipulated by the donor agencies.
                    </p>
                </div>
            </div>
            <div class="eca-container eca-timeline-left" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="1000">
                <div class="content">
                    <h2 class="eca-timeline-title">Statutory Audit</h2>
                    <p class="eca-timeline-p">
                        We specialize in conducting statutory annual audits of financial statements for a diverse range of
                        organizations, including non-governmental organizations (NGOs), public sector entities, and private
                        sector businesses. Our services align with the requirements set forth by the Ministry of Economy and
                        the Ministry of Commerce and Industry in Afghanistan.
                    </p>
                </div>
            </div>
            <div class="eca-container eca-timeline-right" data-aos="fade-up" data-aos-easing="ease-in-out"
                data-aos-duration="1000">
                <div class="content">
                    <h2 class="eca-timeline-title">Special Purpose Audit</h2>
                    <p class="eca-timeline-p">
                        We extend our audit services to encompass specific elements or items within financial statements,
                        meticulously aligned with the special purpose framework in accordance with ISA 805.hanistan.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
