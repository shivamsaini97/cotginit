@extends('layouts.app')
@section('content')
<main id="home">
    <section class="banner-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                   <div class="heading">
                        <h1>Elevate your Business with Perfect Partner Today!</h1>
                   </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-flex">
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
</main>
@endsection