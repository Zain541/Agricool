@extends('layouts.main')

@section('content')
            <div class="about"  >
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">
                            <img src="{{asset('images/iStock-659262450-1024x683.jpg')}}" style="width:inherit;"
                                 class="h-100 overflow-hidden" alt="...">


                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>

                        <div class="carousel-item" data-interval="0">
                            <img src="{{asset('images/wheat.jpg')}}" class="w-100 d-block overflow-hidden" alt="...">


                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/iStock-659262450-1024x683.jpg')}}" style="width:inherit;"
                                 class="h-100 overflow-hidden" alt="...">

                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
            </div>
            <section class="about-us-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-5 offset-1">
                            <div class="about-us-content mb-100">
                                <!-- Section Heading -->
                                <div class="section-heading p-5">
                                    <p>About us</p>
                                    <h2><span>Let Us</span> Tell You Our Story</h2>
                                    <img src="{{asset('images/core-img/decor2.png')}}" style="margin-left: 1%" alt="">

                                </div>
                                <p>AgriCool is a digital crowdfunding platform. We connect emerging farmers with
                                    investors by
                                    lending money on the farmer's behalf.
                                    Our platform is merely a peer to peer lending platform form of crowdfunding.
                                    Investors or
                                    sponsors are willing to lend their money to fund agribusinesses then later get
                                    reward as a
                                    form of return on investment (ROI). </p>
                                <p>AgriCool offers ROI between 10-25%, depending on the lengthy of investment and many
                                    other
                                    factors.
                                    Emerging farmers or small-scale farmers submit their agribusiness projects that
                                    require
                                    funding. We review the investment portfolios, do risk assessment and insure the
                                    investment.
                                    If approved, we then post the project on our digital platforms.
                                    At the end of the farming period once the produce is harvested and sold into the
                                    market, the
                                    investor/sponsor gets a return on investment (ROI) based on their contribution.</p>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="about-us-content mb-100">
                                <div class="section-heading">
                                    <img src="{{asset('images/67141908_681817918958100_7094924869321621504_n.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            {{--            <section class="about-us-area">--}}
{{--                <div class="container">--}}
{{--                    <div class="row align-items-center">--}}

{{--                        <!-- About Us Content -->--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="about-us-content mb-100">--}}
{{--                                <!-- Section Heading -->--}}
{{--                                <div class="section-heading">--}}
{{--                                    <p>About us</p>--}}
{{--                                    <h2><span>Let Us</span> Tell You Our Story</h2>--}}
{{--                                    <img src="{{asset('images/core-img/decor2.png')}}" style="margin-left: 1%" alt="">--}}

{{--                                </div>--}}
{{--                                <p>AgriCool is a digital crowdfunding platform. We connect emerging farmers with investors by--}}
{{--                                    lending money on the farmer's behalf.--}}
{{--                                    Our platform is merely a peer to peer lending platform form of crowdfunding. Investors or--}}
{{--                                    sponsors are willing to lend their money to fund agribusinesses then later get reward as a--}}
{{--                                    form of return on investment (ROI). </p>--}}
{{--                                <p>AgriCool offers ROI between 10-25%, depending on the lengthy of investment and many other--}}
{{--                                    factors.--}}
{{--                                    Emerging farmers or small-scale farmers submit their agribusiness projects that require--}}
{{--                                    funding. We review the investment portfolios, do risk assessment and insure the investment.--}}
{{--                                    If approved, we then post the project on our digital platforms.--}}
{{--                                    At the end of the farming period once the produce is harvested and sold into the market, the--}}
{{--                                    investor/sponsor gets a return on investment (ROI) based on their contribution.</p>--}}

{{--                                --}}{{--                    <a href="#" class="btn btn-primary mt-30">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Famie Video Play -->--}}
{{--                        <div class="col-sm-4">--}}
{{--                            <div class="container">--}}
{{--                                <img src="{{asset('images/about_us.png')}}" alt="">--}}
{{--                                <!-- Play Icon -->--}}
{{--                                <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i--}}
{{--                                        class="fa fa-play"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}
            <section class="about-us-area" id="works">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="about-us-content mb-100">
                                <div class="section-heading">
                                    <img src="{{asset('images/download.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section-heading">

                                <h2 class="project-header">
                                    How It Works
                                </h2>
                                <img src="{{asset('images/core-img/decor2.png')}}" style="margin-left: 33%" alt="">
                            </div>
                            <p>
                                AgriCoolisa peer to peer lending platform form of crowdfunding. Investors or sponsorslend their
                                money to fund agribusinesses then later get reward as a form of return on investment (ROI).
                                AgriCool
                                offers ROI up to 25%, depending on the duration of investment and many other factors
                            </p>
                            <p>
                                Emerging farmerssubmit their agribusiness projects that require funding. Our team comprising of
                                agro-economists reviewinvestment proposals, check financial feasibility, do risk assessment and
                                recommend risks mitigants. If approved, the project is then posted on our digital platforms for
                                fundraising.
                            </p>
                            <p>
                                At the end of the farming period once the produce is harvested and sold into the market, the
                                investor or sponsor gets a return on investment (ROI) based on their contribution.
                            </p>
                        </div>

                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row blog">
                    <div class="col-md-12">
                        <h3 class="text-center mb-5 team">Meet Our Team</h3>
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">


                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('images/a.jpg')}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('images/b.jpg')}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('images/c.jpg')}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('images/d.jpg')}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('images/a.jpg')}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('images/c.jpg')}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('images/b.jpg')}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('images/d.jpg')}}" alt="Image" style="max-width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->

                    </div>
                </div>
            </div>
            <section class="about-us-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="about-us-content mb-100">
                                <div class="section-heading">
                                    <img src="{{asset('images/bg-img/7.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section-heading">
                                <p>What we do</p>
                                <h2><span>Our Produce</span> Is Mainstay For Us</h2>
                                <img src="{{asset('images/core-img/decor2.png')}}" style="margin-left: 20%" alt="">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms"
                                         style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                        <!-- Service Title -->
                                        <div class="service-title mb-3 d-flex align-items-center">
                                            <img src="{{asset('images/core-img/s1.png')}}" alt="">
                                            <h5>Fruit & Vegetable</h5>
                                        </div>
                                        <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo
                                            aliquam manta legolas. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms"
                                         style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                        <!-- Service Title -->
                                        <div class="service-title mb-3 d-flex align-items-center">
                                            <img src="{{asset('images/core-img/s2.png')}}" alt="">
                                            <h5>Meat & Eggs</h5>
                                        </div>
                                        <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo
                                            aliquam manta legolas. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms"
                                         style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                        <!-- Service Title -->
                                        <div class="service-title mb-3 d-flex align-items-center">
                                            <img src="{{asset('images/core-img/s3.png')}}" alt="">
                                            <h5>Milk & Cheese</h5>
                                        </div>
                                        <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo
                                            aliquam manta legolas. </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms"
                                         style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                                        <!-- Service Title -->
                                        <div class="service-title mb-3 d-flex align-items-center">
                                            <img src="{{asset('images/core-img/s4.png')}}" alt="">
                                            <h5>Rice & Cornn</h5>
                                        </div>
                                        <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo
                                            aliquam manta legolas. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="project-area section-padding-100-50" id="projects">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 offset-4" style="margin-bottom: 65px">
                            <h4 class="text-center">Our</h4>
                            <img src="{{asset('images/core-img/decor2.png')}}" style="margin-left: 20%" alt="">
                            <h2 class="project-header">
                                PROJECTS
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="card" style="border: none">
                                <img src="{{asset('images/Untitled.jpg')}}" class="card-img-top" alt="...">

                            </div>
                            <a href="#" class="btn btn-success mt-2 offset-5">Click here</a>

                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="card" style="border: none">
                                <img src="{{asset('images/Untitled2.png')}}" class="card-img-top" alt="...">
                            </div>
                            <a href="{{route('work')}}" class="btn btn-success mt-2 offset-6">Click here</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="newsletter-area bg-overlay section-padding-100"
                     style="background-image: url('{{asset('images/bg-img/8.jpg')}}');">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="newsletter-content">
                                <!-- Section Heading -->
                                <div class="section-heading white text-center">
                                    <p class="text-black">What we do</p>
                                    <h2 class="text-black"><span>Our Produce</span> Is Mainstay For Us</h2>
                                    <img src="{{asset('images/core-img/decor2.png')}}" alt="">

                                </div>
                                <p class="text-black mb-50 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Nullam at diam convallis ligula cursus bibendum sed at enim. Class aptent taciti sociosqu ad
                                    litora torquent conubia nostra, per inceptos
                                    himenaeos.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter Form -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6">
                            <form action="#" method="post">
                                <input type="text" class="form-control" placeholder="Enter your email">

                                <button type="submit" class="btn btn-success mt-3 offset-4">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-area section-padding-100-0" id="contact">

                <div class="container">
                    <div class="row justify-content-between">

                        <!-- Contact Content -->
                        <div class="col-sm-6">
                            <div class="contact-content mb-100">
                                <!-- Section Heading -->
                                <div class="section-heading">
                                    <p>Contact now</p>
                                    <h2><span>Get In Touch</span> With Us</h2>
                                    <img src="img/core-img/decor.png" alt="">
                                </div>
                                <!-- Contact Form Area -->
                                <div class="contact-form-area">
                                    <form action="index.html" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                                            </div>
                                            <div class="col-sm-12 mt-3">
                                                <input type="text" class="form-control" name="subject"
                                                       placeholder="Your Subject">
                                            </div>
                                            <div class="col-sm-12 mt-3">
                                                <textarea name="message" class="form-control" cols="30" rows="10"
                                                          placeholder="Your Message"></textarea>
                                            </div>
                                            <div class="col-sm-12 mt-3">
                                                <button type="submit" class="btn btn-success">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Maps -->
                        <div class="col-sm-6">
                            <div class="contact-maps">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28313.28917392649!2d-88.2740948914384!3d41.76219337461615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880efa1199df6109%3A0x8a1293b2ae8e0497!2sE+New+York+St%2C+Aurora%2C+IL%2C+USA!5e0!3m2!1sen!2sbd!4v1542893000723"
                                    allowfullscreen="" class="w-100" style="height: 540px;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @endsection
@section('scripts')
    <script>
        $('#blogCarousel').carousel({
            interval: 500
        });


        $(document).ready(function () {
            $("#myCarousel").on("slide.bs.carousel", function (e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 3;
                var totalItems = $(".carousel-item").length;

                if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i = 0; i < it; i++) {
                        // append slides to end
                        if (e.direction == "left") {
                            $(".carousel-item")
                                .eq(i)
                                .appendTo(".carousel-inner");
                        } else {
                            $(".carousel-item")
                                .eq(0)
                                .appendTo($(this).find(".carousel-inner"));
                        }
                    }
                }
            });
        });
    </script>
    @endsection
