@extends('layouts.app')
@section('content')
    {{-- are enter maro ismme --}}
    <main id="about">
        {{-- Banner start --}}
        <section class="main-banner it-services-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <div class="banner-text">
                                <h1>OUTSOURCE EMAIL MANAGEMENT</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                                        <li class="breadcrum"> > </li>
                                        <li class="breadcrumb-item active" aria-current="page">IT SERVICES</li>
                                        <li class="breadcrum"> > </li>
                                        <li class="breadcrumb-item active" aria-current="page">OUTSOURCE EMAIL MANAGEMENT</li>
                                    </ol>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Banner end --}}

        {{-- About section start --}}
        <section class="worries pb-0">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-7">
                        <div class="side-left">
                            <div class="paragraph">
                                <p><b>Hey business owners!</b> Are you spending too much time on <b>email management?</b>  Think of us as your very own personal assistant for your inbox. With our expert outsourcing team handling your email, you'll have more time to devote to your business and yourself.
                                </p>
                            </div>
                            <div class="heading-start">
                                <h2 class="position-relative">Outsource your Worries</h2>
                            </div>
                            <div class="paragraph">
                                <p>Get the most out of outsourcing with our top-notch email management services. Try it now and watch your productivity skyrocket.  
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="img-col">
                                        <span class="icon-svg">
                                            <img src="{{asset('images/svg/line-md_email.svg')}}" alt="">
                                        </span>
                                    </div>
                                    <span>
                                        <p class="worries-points">Monitoring & Responding to Incoming Emails</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="img-col">
                                        <span class="icon-svg">
                                            <img src="{{asset('images/svg/line-md_email.svg')}}" alt="">
                                        </span>
                                    </div>
                                    <span>
                                        <p class="worries-points">Managing email campaigns</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="img-col">
                                        <span class="icon-svg">
                                            <img src="{{asset('images/svg/line-md_email.svg')}}" alt="">
                                        </span>
                                    </div>
                                    <span>
                                        <p class="worries-points">Filtering spam & Junk Mail</p>
                                    </span>
                                </div>

                        
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="img-col">
                                        <span class="icon-svg">
                                            <img src="{{asset('images/svg/line-md_email.svg')}}" alt="">
                                        </span>
                                    </div>
                                    <span>
                                        <p class="worries-points">Organizing & Categorizing Messages</p>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="img-col">
                                        <span class="icon-svg">
                                            <img src="{{asset('images/svg/line-md_email.svg')}}" alt="">
                                        </span>
                                    </div>
                                    <span>
                                        <p class="worries-points">Calendar management</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-lg-5">
                        <div class="side-img">
                            <img src="{{ asset('images/worries.png') }}" class="img-fluid" alt="Success Starts Here">
                        </div>
                    </div>
                 
                    </div>
                </div>
            </div>
        </section>
        <section class="let-experts pt-0">
            <div class="container">
                <h2 class="position-relative mb-5">Focus on Business, Not Inbox</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="handel-card card  Experts-1">
                            <h4 >Emails Piling Up</h4>
                            <p>
                                Do you feel overwhelmed by the never-ending flood of emails in your inbox? We specialize in handling large volumes of emails quickly and efficiently, ensuring prompt customer service and support.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="handel-card card  Experts-2">
                            <h4>Leave Inbox to Us</h4>
                            <p>
                                It's time to free up your internal resources and concentrate on what's really important to your business. Let us take care of your inbox while you take care of your business success!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="handel-card card  Experts-3">
                            <h4>Secure Your Email</h4>
                            <p>
                                We know that the security of your information is your top priority. And it's ours too. With enhanced security measures get peace of mind to email security. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="handel-card card  Experts-4">
                            <h4>Goodbye to Messy Emails</h4>
                            <p>
                                By outsourcing your email management to us, you can enjoy features like tracking, analytics, and seamless integration with your existing business systems. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="quick-business pt-0">
            <div class="container">
                <div class="row call-bg">
                    <div class="col-lg-7">
                        <h2 class="position-relative mb-4">Quick Business Solutions</h2>
                        <p>Tired of outsourcing worries? Our experts are here to help you kickstart your project stress-free. Schedule your free consultation and let us solve all your outsourcing concerns.</p>
                        <a class="btn btns" href="#" data-attr="Request A Quote"><span>Get Free Consultation</span></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="word-wide pb-0"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Join Our Worldwide Network </h2>
                        <p>Become a part of our satisfied clients from around the world to discover exceptional results with our outsourcing team, no matter where you're located.</p>
                        <img src="{{asset('images/word.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
