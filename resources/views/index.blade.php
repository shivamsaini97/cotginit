@extends('layouts.app')
@section('content')
<main id="home">
    <section class="banner-home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                   <div class="heading">
                        <h1>Elevate your Business with Perfect Partner Today!</h1>
                   </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-flex justify-content-end">
                        <div class="image-box">
                            <img src="{{ asset('images/banner1.jpg') }}" alt="">
                        </div>
                        <div class="image-box">
                            <img src="{{ asset('images/banner2.jpg') }}" alt="">
                        </div>
                        <div class="image-box">
                            <img src="{{ asset('images/banner3.jpg') }}" alt="">
                        </div>
                        <div class="image-box">
                            <img src="{{ asset('images/banner4.jpg') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <p>Are you struggling to implement outsourcing for your business? You are at right place. Our team is ready to guide you through the outsourcing process. We work with businesses of all sizes and customize our services to meet each client's unique needs. Let us help you implement outsourcing successfully.</p>
                </div>
                <div class="col-lg-5">
                    <div class="heading-homeh2">
                        <h2>Power up Business with Outsourcing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-8">
                    
                </div>
            </div>
        </div>
    </section>
</main>
@endsection