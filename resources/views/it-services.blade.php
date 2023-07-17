@extends('layouts.app')
@section('content')
    {{-- are enter maro ismme --}}
    <main id="about">
        {{-- Banner start --}}
        <section class="main-banner it-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <div class="banner-text">
                                <h1>IT SERVICES</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                                        <li class="breadcrum"> > </li>
                                        <li class="breadcrumb-item active" aria-current="page">IT SERVICES</li>
                                    </ol>
                               
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
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="side-left">
                            <div class="heading-start">
                                <h2 class="wow fadeInUp" data-wow-delay="100ms">Spend More Time <br>Growing Your Business</h2>
                                <div class="headingline-2 it-services1">
                                    <svg width="314" height="15" viewBox="0 0 314 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="line2" d="M313.987 2.20027C312.441 2.07971 310.896 2.10983 309.351 2.08974C307.806 2.06965 306.274 2.02944 304.742 1.91893C301.319 1.6778 297.909 1.42664 294.499 1.20561C287.919 0.783639 281.325 0.442042 274.732 0.261198C268.684 0.0937501 262.637 0.00669793 256.589 0C255.018 0 253.459 0 251.887 0C245.893 0 239.899 0.110496 233.892 0.231059C219.865 0.522419 205.839 0.813786 191.826 1.30608C178.133 1.78833 164.439 2.31078 150.759 2.94373C144.033 3.25519 137.306 3.55659 130.579 3.94842C123.32 4.32016 116.047 4.64164 108.774 5.06361L63.8043 7.67581C50.8037 8.43937 37.8297 9.58471 24.9223 11.0315C16.5971 11.9558 8.28524 13.0408 0 14.2364C9.51071 14.6852 19.0348 14.9397 28.5721 15C34.806 15 41.0266 14.9397 47.2206 14.7488C51.2167 14.6283 55.2127 14.4575 59.2754 14.2465C61.7397 14.1159 64.2039 13.9149 66.6682 13.7441L86.5155 12.3577C94.0548 11.8252 101.594 11.2525 109.16 10.7703L132.497 9.2331C139.49 8.79103 146.484 8.42933 153.49 8.02746C160.497 7.62558 167.143 7.34427 173.977 7.02277C180.81 6.70127 187.763 6.44003 194.65 6.15872C201.536 5.87741 208.69 5.72673 215.696 5.52579C228.523 5.1641 241.338 5.03347 254.165 4.97319C261.292 4.97319 268.431 4.75216 275.558 4.56127C282.684 4.37038 289.611 4.13931 296.617 3.81781C299.481 3.6872 302.345 3.59677 305.195 3.37574C306.572 3.28335 307.942 3.13578 309.298 2.93368C310.497 2.74278 311.682 2.47152 312.894 2.31077C313.267 2.31077 313.627 2.24045 314 2.22035L313.987 2.20027Z" fill="#5EA813"/>
                                        </svg>
                                        
                                        
                                    </div>
                            </div>
                            <div class="paragraph wow fadeInUp" data-wow-delay="200ms">
                                <p>Are you tired of wasting time on IT issues that take away from your core business? Cotgin IT Solution is here to offer the best outsourcing IT services. Our commitment from customization to focus on quality assurance for every business needs to deliver desired results. So whether you're looking to streamline your operations or stay ahead of the competition, we will help you get there.  
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="side-right project-complete">
                            <div class="number-row d-flex">
                                <div class="d-flex align-items-center text-start">
                                  <h6 class="number year-ex"><span class="counter" data-count="3"> 0 </span>+</h6>
                                  <p class="card-text">Years of Excellence</p>
                                </div>                        
                            </div>
                            <div class="side-img">
                                <img src="{{ asset('images/it-services.jpg') }}" class="img-fluid" alt="Success Starts Here">
                            </div>
                            {{-- <div class="progressbar">
                                <div class="circle m-2"
                                    style="background: conic-gradient(rgb(94 168 19) 324deg, rgb(241, 241, 241) 324deg);
                                ">
                                    <div class="progress-bar-div">
                                        <div class="result-score">89%</div>
                                        <div class="score-heading">Successful cases in 12 years </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="let-experts-handle pt-0">
            <div class="container">
                <h2 class="position-relative mb-5 wow fadeInUp" data-wow-delay="100ms"  >Let Experts Handle  </h2>
                <div class="headingline9 it-services1">
                    <video class="heading-4 d-none" width="113.9px" height="122.2px" src="{{asset('images/video/final-4.mp4')}}" muted autoplay></video>


                    </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="handel-card card  Experts-1 wow fadeInUp" data-wow-delay="200ms">
                            <h4 >Experts at Your Service</h4>
                            <p>
                                Our team of outsourced experts has deep knowledge of software development, infrastructure management, and cybersecurity. We believe in working closely with our clients to fully understand their requirements and deliver solutions. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="handel-card card  Experts-2 wow fadeInUp" data-wow-delay="200ms">
                            <h4>Custom Solutions for Your Success</h4>
                            <p>
                                By understanding your objectives, challenges, and long-term goals, we create custom strategies that meet your unique needs. Whether you need help with data management or network security we're here to help. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="handel-card card  Experts-3 wow fadeInUp" data-wow-delay="300ms">
                            <h4>Modern Demands Services</h4>
                            <p>
                                Our team of experts follows proper quality control measures to deliver projects that are on time. With advanced technology and adherence to industry best practices, you can trust that your IT needs are being handled with care and expertise.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="handel-card card  Experts-4 wow fadeInUp" data-wow-delay="400ms">
                            <h4>Secure Business Solutions</h4>
                            <p>
                                Data breaches and cyber-attacks are nightmares for any business owner. With our robust security measures and proactive approach, keep your sensitive information safe against any potential risks. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="solution py-0">
            <div class="container">
                <h2 class="mb-5">Outsource your Worries</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ultimate-box card-services position-relative overflow-hidden wow fadeInUp" data-wow-delay="100ms">
                            <a href="#">
                                <img class="hover-icon" src="{{ asset('images/svg/right-hover.svg') }}" alt="">
                                <img class="solution-icon" src="{{ asset('images/email.jpg') }}" alt="">
                                <div class="title cards mt-3">
                                    <h4><a href="#">Outsource Email Management</a></h4>
                                    <p>Let us manage your inbox</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ultimate-box card-services position-relative overflow-hidden wow fadeInUp" data-wow-delay="200ms">
                            <a href="#">
                                <img class="hover-icon" src="{{ asset('images/svg/right-hover.svg') }}" alt="">
                                <img class="solution-icon" src="{{ asset('images/cyber.jpg') }}" alt="">
                                <div class="title cards mt-3">
                                    <h4><a href="#">Outsource Cybersecurity</a></h4>
                                    <p>Lower your risk. Trust our experts</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ultimate-box  position-relative overflow-hidden wow fadeInUp" data-wow-delay="300ms">
                            <a href="#">
                                <img class="hover-icon" src="{{ asset('images/svg/right-hover.svg') }}" alt="">
                                <img class="solution-icon" src="{{ asset('images/data.jpg') }}" alt="">
                                <div class="title cards mt-3">
                                    <h4><a href="#">Outsource Data Storage</a></h4>
                                    <p>End data storage hassles with us</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ultimate-box card-services position-relative overflow-hidden wow fadeInUp" data-wow-delay="400ms">
                            <a href="#">
                                <img class="hover-icon" src="{{ asset('images/svg/right-hover.svg') }}" alt="">
                                <img class="solution-icon" src="{{ asset('images/soft.jpg') }}" alt="">
                                <div class="title cards mt-3">
                                    <h4><a href="#">Outsource Business Software</a></h4>
                                    <p>Partner with us for biz growth</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- About section end --}}
    </main>
@endsection
