@extends('layouts.app')
@section('content')
    <style>
        .blog-big-img {
            position: relative;
        }
    </style>
    <main id="blog">

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


        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </section>

        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-big-img">
                            <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100" alt="Blog">
                            <img src="{{ asset('images/svg/latest-blog.svg') }}" alt="Blog">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Lorem Ipsum Dolor</h4>
                        <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo dictum
                            pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum lacus
                            posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum
                            tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet......</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0 pt-4">
            <div class="container">
                <div class="row my-4">
                    <div class="col-lg-3">
                        <div class="blog-box">
                            <div class="blog-box-img">
                                <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100"
                                    alt="Success Starts Here">
                            </div>
                            <div class="blog-box-content">
                                <h5>IT SUPPORT 5</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                    tellus sem. Aenean pretium...</p>
                                <a href="">Read More</a>
                            </div>
                            <div class="date">
                                <h5>26</h5>
                                <p>FEB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="blog-box">
                            <div class="blog-box-img">
                                <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100"
                                    alt="Success Starts Here">
                            </div>
                            <div class="blog-box-content">
                                <h5>IT SUPPORT 5</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                    tellus sem. Aenean pretium...</p>
                                <a href="">Read More</a>
                            </div>
                            <div class="date">
                                <h5>26</h5>
                                <p>FEB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="blog-box">
                            <div class="blog-box-img">
                                <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100"
                                    alt="Success Starts Here">
                            </div>
                            <div class="blog-box-content">
                                <h5>IT SUPPORT 5</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                    tellus sem. Aenean pretium...</p>
                                <a href="">Read More</a>
                            </div>
                            <div class="date">
                                <h5>26</h5>
                                <p>FEB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="blog-box">
                            <div class="blog-box-img">
                                <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100"
                                    alt="Success Starts Here">
                            </div>
                            <div class="blog-box-content">
                                <h5>IT SUPPORT 5</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                    tellus sem. Aenean pretium...</p>
                                <a href="">Read More</a>
                            </div>
                            <div class="date">
                                <h5>26</h5>
                                <p>FEB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
