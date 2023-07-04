@extends('layouts.app')
@section('content')
    <style>
        .about-banner {
            background-image: url(http://localhost/github/cotginit/public/images/banner/about-banner.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .banner {
            padding: 80px 0;
        }

        .banner-text {
            text-align: center
        }

        .banner-text h1 {
            color: var(--white);
        }

        .breadcrumb {
            text-align: center;
        }

        .breadcrumb .breadcrumb-item {
            color: var(--white);
        }

        .side-left {
            padding: 5px 10px;
        }

        .heading-start {
            position: relative;
            padding-bottom: 10px;
        }

        .heading-start h2:after {
            content: "";
            position: absolute;
            background-image: url(http://localhost/github/cotginit/public/images/svg/heading-bottom-start.svg);
            width: 100%;
            height: 100%;
            left: 0;
            top: 45px;
            background-repeat: no-repeat;
        }

        .heading-end {
            position: relative;
            padding-bottom: 10px;
        }

        .heading-end h2:after {
            content: "";
            position: absolute;
            background-image: url(http://localhost/github/cotginit/public/images/svg/heading-bottom-end.svg);
            width: 100%;
            height: 100%;
            right: -50%;
            top: 45px;
            background-repeat: no-repeat;
        }

        .paragraph p {
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: 0em;
            text-align: left;
            padding-top: 10px;
        }

        .inverted-coma-text {
            position: relative;
            color: var(--green);
            font-family: Figtree;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            letter-spacing: 0em;
            text-align: left;
            padding-left: 40px;

        }

        .inverted-coma-text::after {
            content: "";
            position: absolute;
            background-image: url('../public/images/svg/inverted-coma.svg');
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-repeat: no-repeat;
        }

        .side-right {
            padding: 5px 0;
            position: relative;
        }

        .side-img img {
            border-radius: 20px;
            /* top: 100px; */
        }

        .progressbar {
            width: 157px;
            height: 157px;
            top: 869px;
            left: 650px;
            border-radius: 9.930442810058594px;
        }

        .circle {
            width: 138px;
            height: 138px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            place-content: center;
            position: relative;
            align-items: center;
            justify-content: center;
        }

        .circle:before {
            position: absolute;
            content: '';
            width: 86%;
            height: 86%;
            background: white;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .progress-bar-div {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .progressbar {
            background: #fff;
            width: 157px;
            height: 157px;
            top: 300px;
            left: -50px;
            border-radius: 9.930442810058594px;
            position: absolute;
        }

        .score-heading {
            font-family: 'Montserrat';
            font-weight: 600;
            font-size: 16px;
        }

        .result-score {
            font-weight: 700;
            font-size: 45px;
            color: var(--green);
        }

        .score-heading {
            font-family: Poppins;
            font-size: 12px;
            font-weight: 600;
            line-height: 14px;
            letter-spacing: 0em;
            text-align: center;
        }

        .result-score {
            font-family: Figtree;
            font-size: 31px;
            font-weight: 800;
            line-height: 37px;
            letter-spacing: 0em;
            text-align: left;
        }

        .block {
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0px 4px 8px -2px #cdcdcd;
            text-align: center;
            padding: 7px 25px 64px 25px;
            margin-bottom: 35px;
        }

        .block p {
            font-family: Poppins;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: 0em;
            text-align: center;
        }
    </style>
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
                    <div class="col-md-5">
                        <div class="side-left">
                            <div class="heading-start">
                                <h2>Success Starts Here</h2>
                            </div>
                            <div class="paragraph">
                                <p>Cotgin IT Solution is a leading provider of outsourcing services to B2B businesses. We
                                    offer
                                    a wide range of services, including  Marketing solutions, UI/UX, software development,
                                    IT
                                    support, and business process outsourcing. Our professionals are dedicated to delivering
                                    exceptional results that exceed our client's expectations with the best possible
                                    service.
                                </p>
                                <h5 class="inverted-coma-text">
                                    Lorem ipsum dolor sit amet, consectetur Nam nec pulvinar dui. Nam tristique tristique
                                    enim et
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="side-right">
                            <div class="side-img">
                                <img src="{{ asset('images/about-us.jpg') }}" alt="Success Starts Here">
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

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="side-left">
                            <div class="heading-end">
                                <h2>Grow Smarter with Perfect Partner</h2>
                            </div>
                            <div class="side-img">
                                <img class="mt-4" src="{{ asset('images/get-smarter.jpg') }}"
                                    alt="Grow Smarter with Perfect Partner">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="side-right">
                            <div class="block">
                                <img class="mt-4" src="{{ asset('images/svg/why-us.svg') }}" alt="Why Us">
                                <h4>Why Us</h4>
                                <p>Our outsourcing expertise has empowered countless B2B businesses. It’s your turn to save
                                    money, improve efficiency, and achieve remarkable growth with us.</p>
                            </div>
                            <div class="block">
                                <img class="mt-4" src="{{ asset('images/svg/why-us.svg') }}" alt="Why Us">
                                <h4>Our Mission</h4>
                                <p>Our aim is to give our clients the assurance that their outsourcing needs are in the
                                    hands of a  trustworthy partner.</p>
                            </div>
                            <div class="block">
                                <img class="mt-4" src="{{ asset('images/svg/why-us.svg') }}" alt="Why Us">
                                <h4>Our Vision</h4>
                                <p>Our vision is to provide high-quality services to our clients and help them achieve their
                                    business goals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- About section end --}}
    </main>
@endsection
