@extends('layouts.app')
@section('content')
    {{-- are enter maro ismme --}}
    <main id="about">
        {{-- Banner start --}}
        <section class="main-banner about-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <div class="banner-text">
                                <h1>About Us</h1>
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Banner end --}}

        {{-- About section start --}}
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="side-left">
                            <div class="heading-start">
                                <h2>Success Starts Here</h2>
                            </div>
                            <div class="paragraph">
                                <p>Cotgin IT Solution is a leading provider of outsourcing services to B2B businesses.
                                    We
                                    offer
                                    a wide range of services, including  Marketing solutions, UI/UX, software
                                    development,
                                    IT
                                    support, and business process outsourcing. Our professionals are dedicated to
                                    delivering
                                    exceptional results that exceed our client's expectations with the best possible
                                    service.
                                </p>
                                <h5 class="inverted-coma-text">
                                    Lorem ipsum dolor sit amet, consectetur Nam nec pulvinar dui. Nam tristique
                                    tristique
                                    enim et
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="side-right">
                            <div class="side-img">
                                <img src="{{ asset('images/about-us.jpg') }}" class="img-fluid" alt="Success Starts Here">
                            </div>
                            <div class="progressbar">
                                <div class="circle m-2"
                                    style="background: conic-gradient(rgb(94 168 19) 324deg, rgb(241, 241, 241) 324deg);
                                ">
                                    <div class="progress-bar-div">
                                        <div class="result-score">89%</div>
                                        <div class="score-heading">Successful cases in 12 years </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="side-left">
                            <div class="heading-end">
                                <h2>Grow Smarter with Perfect Partner</h2>
                            </div>
                            <div class="side-img">
                                <img class="mt-4 w-100" src="{{ asset('images/get-smarter.jpg') }}" class="img-fluid"
                                    alt="Grow Smarter with Perfect Partner">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="side-right">
                            <div class="block shadow">
                                <img class="mt-1" src="{{ asset('images/svg/our-vision.svg') }}" alt="Our Vision">
                                <img class="mt-1 bottom-shadow" src="{{ asset('images/svg/shadow.svg') }}" alt="Our Vision">
                                <h4>Our Vision</h4>
                                <p>Our vision is to provide high-quality services to our clients and help them achieve
                                    their
                                    business goals</p>
                            </div>
                            <div class="block shadow">
                                <img class="mt-1" src="{{ asset('images/svg/our-mission.svg') }}" alt="Our Mission">
                                <img class="mt-1 bottom-shadow" src="{{ asset('images/svg/shadow.svg') }}"
                                    alt="Our Mission">
                                <h4>Our Mission</h4>
                                <p>Our aim is to give our clients the assurance that their outsourcing needs are in the
                                    hands of a trustworthy partner.</p>
                            </div>
                            <div class="block shadow">
                                <img class="mt-1" src="{{ asset('images/svg/why-us.svg') }}" alt="Why Us">
                                <img class="mt-1 bottom-shadow" src="{{ asset('images/svg/shadow.svg') }}" alt="Why Us">
                                <h4>Why Us</h4>
                                <p>Our outsourcing expertise has empowered countless B2B businesses. It’s your turn to
                                    save
                                    money, improve efficiency, and achieve remarkable growth with us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- About section end --}}
    </main>
@endsection
