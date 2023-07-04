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

        .side-text {
            padding: 5px 10px;
        }

        .heading {
            position: relative;
        }

        .heading h2:after {
            content: "";
            position: absolute;
            background-image: url(http://localhost/github/cotginit/public/images/svg/heading-bottom.svg);
            width: 100%;
            height: 100%;
            left: 0;
            top: 35px;
            background-repeat: no-repeat;
        }

        .paragraph p {
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            letter-spacing: 0em;
            text-align: left;
            padding: 20px 0px 0px 0px;
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
            background-image: url(http://localhost/github/cotginit/public/images/svg/inverted-coma.svg);
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-repeat: no-repeat;
        }

        .content .side-img {
            border-radius: 20px;
            margin-top: 40px;
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
                        <div class="side-text">
                            <div class="heading">
                                <h2> Success Starts Here</h2>
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
                        <div class="side-img">
                            <img src="{{ asset('images/about-us.jpg') }}" alt="About Us">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- About section end --}}
    </main>
@endsection
