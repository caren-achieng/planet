<x-app-layout>
    <!-- ======= Hero Section ======= -->
    @foreach($siteIdentities as $siteIdentity)
        @php
            $counter = 0;
        @endphp
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">{{ $siteIdentity -> tagline ?? 'Empowering Change, Shaping a Sustainable Future'}}</h2>
                        <p data-aos="fade-up"> {!!  $siteIdentity -> description ?? 'Welcome to our website, where sustainability and caring for people and the planet converge. We are dedicated to empowering change and shaping a sustainable future. Through informative resources, practical tips, and a vibrant community, we inspire individuals, businesses, and communities to make conscious choices that align with their values. Join us as we amplify our impact, drive positive change, and create a world where the well-being of both people and the planet are at the forefront. Start your journey towards a sustainable future with us today. Together, we can make a difference.'  !!} </p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">{{ $siteIdentity -> call_to_action ?? 'Get Started'}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

{{--            <div class="carousel-item{{ $counter === 0 ? ' active' : '' }}" style="background-image: url({{ $siteIdentity->getFirstMediaUrl('carousels') }})"></div>--}}

            <div class="carousel-item active" style="background-image: url({{ $siteIdentity -> getFirstMediaUrl('carousels') }})"></div>
{{--            <div class="carousel-item" style="background-image: url({{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }})"></div>--}}
{{--            <div class="carousel-item" style="background-image: url({{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}"></div>--}}
{{--            <div class="carousel-item" style="background-image: url({{ asset('assets/img/hero-carousel/hero-carousel-4.jpg') }}"></div>--}}
{{--            <div class="carousel-item" style="background-image: url({{ asset('assets/img/hero-carousel/hero-carousel-5.jpg') }}"></div>--}}
{{--            <div class="carousel-item" style="background-image: url({{ $siteIdentity -> getFirstMediaUrl('carousel') }}"></div>--}}

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->
    @endforeach

    <main id="main">
        <!-- ======= Targets and Milestones Section ======= -->
        <section id="constructions" class="constructions section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>{{ $target -> tagline ?? 'Targets & Milestones'}}</h2>
                    <p>{!!  $target -> description ?? 'At Strathmore University, we are committed to fostering sustainability and promoting the well-being of both people and the planet. We aim to integrate sustainability into every aspect of our university\'s scholarship, operations, and community engagement. By doing so, we strive to position Strathmore University as a leader in local and global sustainability efforts. '  !!}</p>
                </div>

                <div class="row gy-4">
                    @foreach($targetsAndMilestones as $targetAndMilestone)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url({{ $targetAndMilestone -> getFirstMediaUrl('targets') }}"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $targetAndMilestone -> goal ?? 'Energy Efficiency'}}</h4>
                                        <p>{!!  $targetAndMilestone -> goal_description ?? 'Learn how Strathmore University reduces energy wastage by implementing timed lights in washrooms, promoting energy efficiency and conservation.'  !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                    @endforeach

                </div>

            </div>
        </section><!-- End Constructions Section -->



        <!-- ======= Updates & Happenings ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
`
            <div class=" section-header">
                <h2>{{$news -> tagline ?? 'Updates & Happenings'}}</h2>
                <p>{!! $news -> description ??  'Stay up-to-date with the latest sustainability updates and happenings on campus. Join us in our journey towards a greener and more sustainable future.'!!}</p>
            </div>

            <div class="row gy-5">

                @foreach($updatesAndHappenings as $updateAndHappening )
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src=" {{ $updateAndHappening -> getFirstMediaUrl('event_images') }}" class="img-fluid" alt="">
                                <span class="post-date">{{ $updateAndHappening -> date ?? 'June 22' }}</span>
                            </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">{{ $updateAndHappening -> event ?? 'Strathmore University Achieves Plastic-Free Campus Status' }}</h3>

                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>{{ $updateAndHappening -> read_more ?? 'Read More' }}</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->
                @endforeach


            </div>

            </div>
        </section>
        <!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
</x-app-layout>


