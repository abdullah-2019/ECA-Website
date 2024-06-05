@include('site.home.slideshow.index')

<main id="main">

    @include('site.home.our-offer.index')

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">

            <div class="row">
                @forelse ($services as $service)


                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">

                          @php echo $service->description; @endphp
                    @empty
                        <p >There are no data.</p>
                    @endforelse
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    @include('site.home.why-us.index')

    @include('site.home.about.index')

    @include('site.home.facts.index')

</main>
