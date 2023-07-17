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
                                        <li class="breadcrum"> > </li>
                                        <li class="breadcrumb-item active" aria-current="page">ABOUT</li>
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
                            <div class="heading-start wow fadeInUp" data-wow-delay="100ms">
                                <h2>Success Starts Here</h2>
                                <div class="headingline-2 about-page-heading">
                                    <svg width="349" height="15" viewBox="0 0 349 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="line2" d="M348.985 2.20027C347.268 2.07971 345.55 2.10983 343.833 2.08974C342.116 2.06965 340.413 2.02944 338.71 1.91893C334.906 1.6778 331.115 1.42664 327.325 1.20561C320.012 0.783639 312.683 0.442042 305.355 0.261198C298.633 0.0937501 291.912 0.00669793 285.19 0C283.443 0 281.711 0 279.964 0C273.302 0 266.639 0.110496 259.962 0.231059C244.373 0.522419 228.783 0.813786 213.208 1.30608C197.988 1.78833 182.769 2.31078 167.564 2.94373C160.087 3.25519 152.611 3.55659 145.134 3.94842C137.065 4.32016 128.982 4.64164 120.898 5.06361L70.9163 7.67581C56.4665 8.43937 42.0464 9.58471 27.7003 11.0315C18.4471 11.9558 9.20875 13.0408 0 14.2364C10.5708 14.6852 21.1565 14.9397 31.7569 15C38.6857 15 45.5996 14.9397 52.484 14.7488C56.9255 14.6283 61.367 14.4575 65.8826 14.2465C68.6215 14.1159 71.3604 13.9149 74.0994 13.7441L96.1589 12.3577C104.539 11.8252 112.918 11.2525 121.328 10.7703L147.266 9.2331C155.039 8.79103 162.811 8.42933 170.599 8.02746C178.386 7.62558 185.774 7.34427 193.369 7.02277C200.964 6.70127 208.692 6.44003 216.346 6.15872C224.001 5.87741 231.951 5.72673 239.739 5.52579C253.996 5.1641 268.238 5.03347 282.496 4.97319C290.416 4.97319 298.352 4.75216 306.273 4.56127C314.193 4.37038 321.892 4.13931 329.679 3.81781C332.862 3.6872 336.046 3.59677 339.214 3.37574C340.744 3.28335 342.266 3.13578 343.774 2.93368C345.106 2.74278 346.424 2.47152 347.771 2.31077C348.186 2.31077 348.585 2.24045 349 2.22035L348.985 2.20027Z" fill="#5EA813"/>
                                        </svg>
                                        
                                    </div>
                            </div>
                            <div class="paragraph  wow fadeInUp" data-wow-delay="200ms">
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
                                <h5 class="inverted-coma-text wow fadeInUp" data-wow-delay="300ms">
                                    Lorem ipsum dolor sit amet, consectetur Nam nec pulvinar dui. Nam tristique
                                    tristique
                                    enim et
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="side-right  wow fadeInRight" data-wow-delay="100ms">
                            <div class="side-img">
                                <img src="{{ asset('images/cotgin.jpg') }}" class="img-fluid" alt="Success Starts Here">
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
                                <div class="headingline-4 about-page-heading">
                                    <svg width="278" height="15" viewBox="0 0 278 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="d-none" d="M277.988 2.20027C276.62 2.07971 275.252 2.10983 273.884 2.08974C272.516 2.06965 271.16 2.02944 269.804 1.91893C266.773 1.6778 263.754 1.42664 260.735 1.20561C254.909 0.783639 249.071 0.442042 243.234 0.261198C237.88 0.0937501 232.526 0.00669793 227.171 0C225.78 0 224.4 0 223.009 0C217.702 0 212.395 0.110496 207.076 0.231059C194.658 0.522419 182.24 0.813786 169.833 1.30608C157.71 1.78833 145.586 2.31078 133.475 2.94373C127.519 3.25519 121.564 3.55659 115.608 3.94842C109.181 4.32016 102.742 4.64164 96.3029 5.06361L56.4892 7.67581C44.9791 8.43937 33.4925 9.58471 22.065 11.0315C14.6943 11.9558 7.33534 13.0408 0 14.2364C8.42031 14.6852 16.8524 14.9397 25.2963 15C30.8155 15 36.3229 14.9397 41.8067 14.7488C45.3447 14.6283 48.8826 14.4575 52.4795 14.2465C54.6613 14.1159 56.843 13.9149 59.0247 13.7441L76.5965 12.3577C83.2714 11.8252 89.9464 11.2525 96.6449 10.7703L117.306 9.2331C123.498 8.79103 129.689 8.42933 135.893 8.02746C142.096 7.62558 147.98 7.34427 154.03 7.02277C160.08 6.70127 166.236 6.44003 172.333 6.15872C178.43 5.87741 184.763 5.72673 190.967 5.52579C202.323 5.1641 213.668 5.03347 225.025 4.97319C231.335 4.97319 237.656 4.75216 243.965 4.56127C250.274 4.37038 256.407 4.13931 262.61 3.81781C265.145 3.6872 267.681 3.59677 270.205 3.37574C271.424 3.28335 272.636 3.13578 273.837 2.93368C274.898 2.74278 275.948 2.47152 277.021 2.31077C277.351 2.31077 277.67 2.24045 278 2.22035L277.988 2.20027Z" fill="#5EA813"/>
                                        </svg>
                                        
                                        
                                    </div>
                            </div>
                            <div class="side-img  wow fadeInLeft" data-wow-delay="100ms">
                                <img class="mt-4 w-100" src="{{ asset('images/get-smarter.jpg') }}" class="img-fluid" alt="Grow Smarter with Perfect Partner">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="side-right">
                            <div class="block shadow animate-img">
                                <img class="mt-1 about-icons" src="{{ asset('images/svg/our-vision.svg') }}" alt="Our Vision">
                                <img class="mt-1 bottom-shadow" src="{{ asset('images/svg/shadow.svg') }}" alt="Our Vision">
                                <h4>Our Vision</h4>
                                <p>Our vision is to provide high-quality services to our clients and help them achieve
                                    their
                                    business goals</p>
                            </div>
                            <div class="block shadow animate-img">
                                <img class="mt-1 about-icons" src="{{ asset('images/svg/our-mission.svg') }}" alt="Our Mission">
                                <img class="mt-1 bottom-shadow" src="{{ asset('images/svg/shadow.svg') }}"
                                    alt="Our Mission">
                                <h4>Our Mission</h4>
                                <p>Our aim is to give our clients the assurance that their outsourcing needs are in the
                                    hands of a trustworthy partner.</p>
                            </div>
                            <div class="block shadow animate-img">
                                <img class="mt-1 about-icons" src="{{ asset('images/svg/why-us.svg') }}" alt="Why Us">
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
