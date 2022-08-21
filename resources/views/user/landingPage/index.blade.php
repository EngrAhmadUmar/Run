@extends('user.landingPage.layout.app')

@section('homepage')
    @include('user.landingPage.layout.header')

    <section class="bg-home section-padding bg-lightan mb-5" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="col-lg-8 text-center">

                    <div class="mb-4">
                        <h1 class="fw-bold">We Deliver When You Need It, At Your Fingertips
                            Multiple On-Demand Services</h1>
                    <p class="pt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint dignissimos accusantium, ut suscipit exercitationem excepturi. Atque officia modi aliquid nisi?</p>
                    </div>

                    <div class="mt-5">
                        <img src="{{ asset('user/landingPage/images/hiclipart.com.png') }}" class="img-fluid" alt="" loading="lazy" >
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0 mt-0 border-bottom mt-5">
        <div class="container">
            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-12 col-md-6 col-xl-5">
                    <div class="mb-5 mb-md-0">
                        <img class="img-fluid" src="{{ asset('user/landingPage/images/app2.png') }}" loading="lazy"
                            alt="…" />
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-6 offset-xl-1">
                    <div class="mb-3">
                        <h3 class="fs-3 fw-bold mb-2">Lawlan Logistics</h3>
                        <p class="text-gray lead">
                            We Are Africa's foremost dispatch hailing app
                        </p>
                    </div>
                    <ul class="check-list">
                        <li>Visit the website</li>
                        <li>Signup and login</li>
                        <li>Enter your pickup and drop off locations</li>
                        <li>You can also chat with the admin</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-services" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-box text-center">
                        <h5 class="sub-title text-primary f-13 text-uppercase">Benefits of Using Lawlan Logistics</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">

                <div class="col-lg-4">
                    <div class="service-box service-active mt-4">
                        <div class="service-icon icon-xxl uim-icon-primary">
                            <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><polygon class="uim-primary" points="12 12.3 3.5 7.05 12 1.8 20.5 7.05 12 12.3"></polygon><polygon class="uim-quaternary" points="12 22.2 12 12.3 20.5 7.05 20.5 16.95 12 22.2"></polygon><polygon class="uim-tertiary" points="12 22.2 3.5 16.95 3.5 7.05 12 12.3 12 22.2"></polygon></svg></span>
                        </div>

                        <h5 class="f-20 mt-4 pt-2">Better</h5>

                        <p class="text-muted mt-3 mb-0">Lawlan Logistics uses the power of technology to give you more visibility and more flexibility for your urban, last-mile shipments </p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box mt-4">
                        <div class="service-icon icon-xxl uim-icon-primary">
                            <i></i>
                        </div>


                        <h5 class="f-20 mt-4 pt-2">Cheaper</h5>

                        <p class="text-muted mt-3 mb-0">Our platform cuts the unnecessary logistics steps to make B2B deliveries more affordable, without hidden costs </p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box mt-4">
                        <div class="service-icon icon-xxl uim-icon-primary">
                            <i></i>
                        </div>

                        <h5 class="f-20 mt-4 pt-2">Faster</h5>

                        <p class="text-muted mt-3 mb-0">We commit to deliver within 2 hours max in the urban areas where we operate</p>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('user.landingPage.layout.testimony')

    <section class="mt-5 border-bottom m-auto text-center mt-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="mt-5 mt-md-0">
                        <img class="img-fluid" src="{{ asset('user/landingPage/images/rider.png') }}" loading="lazy"
                            alt="…">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interested-join section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="interested-join-content text-center">
                        <div class="mb-4">
                            <h2 class="text-dark-400 fw-bold text-white mb-3">
                                Interested in riding with lawlan Logistics?
                            </h2>
                            <p class="text-white">
                                Hit us up and we'll get in touch with you.
                            </p>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-light btn-lg">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('user.landingPage.layout.footer')

@endsection
