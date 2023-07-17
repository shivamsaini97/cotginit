@extends('layouts.app')
@section('content')
    <style>

    </style>
    <main id="blog-detail">

        {{-- About section start --}}
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="side-left">
                            <img src="{{ asset('images/about.jpg') }}" class="img-fluid" alt="Success Starts Here">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="side-right mt-lg-5">
                            <div>
                                <h2>Lorem Ipsum dolor Sit Amet Lorem Ipsum Dolor</h2>
                            </div>
                            <div class="author">
                                <img src="{{ asset('images/svg/user.svg') }}" class="img-fluid" alt="">
                                <div class="author-detail">
                                    <p>Lea Balcerzak</p>
                                    <p><span>Admin</span></p>
                                </div>
                            </div>

                            <div class="blog-topic">
                                <h5>Topics</h5>
                                <p>Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem, Ipsum, Lorem Ipsum, Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus
                            sem.
                            Aenean pretium convallis lorem, sit amet dapibus ante mollis a. Integer bibendum interdum sem,
                            eget
                            volutpat purus pulvinar in. Sed tristique augue vitae sagittis porta. Phasellus ullamcorper,
                            dolor
                            suscipit mattis viverra, sapien elit condimentum odio, ut imperdiet nisi risus sit amet ante.
                            Sed
                            sem lorem, laoreet et facilisis quis, tincidunt non lorem. Etiam tempus, dolor in sollicitudin
                            faucibus, sem massa accumsan erat.</p>

                        <p>“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model
                            search for evolved over sometimes by accident, sometimes on purpose ”</p>
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
                            tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus
                            sem. Aenean pretium convallis lorem, sit amet dapibus ante mollis a. Integer bibendum interdum
                            sem, eget volutpat purus pulvinar in. Sed tristique augue vitae sagittis porta. Phasellus
                            ullamcorper, dolor suscipit mattis viverra, sapien elit condimentum odio, ut imperdiet nisi
                            risus sit amet ante. Sed sem lorem, laoreet et facilisis quis, tincidunt non lorem. Etiam
                            tempus, dolor in sollicitudin faucibus, sem massa accumsan erat.</p>

                        <p>“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model search for evolved over sometimes by accident, sometimes on purpose ”</p>

                        <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo
                            dictum pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum
                            lacus posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum
                            tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100" alt="Success Starts Here">
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
                            tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus
                            sem. Aenean pretium convallis lorem, sit amet dapibus ante mollis a. Integer bibendum interdum
                            sem, eget volutpat purus pulvinar in. Sed tristique augue vitae sagittis porta. Phasellus
                            ullamcorper, dolor suscipit mattis viverra, sapien elit condimentum odio, ut imperdiet nisi
                            risus sit amet ante. Sed sem lorem, laoreet et facilisis quis, tincidunt non lorem. Etiam
                            tempus, dolor in sollicitudin faucibus, sem massa accumsan erat.</p>

                        <p>“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model search for evolved over sometimes by accident, sometimes on purpose ”</p>

                        <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo
                            dictum pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum
                            lacus posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum
                            tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>
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
                            tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus
                            sem. Aenean pretium convallis lorem, sit amet dapibus ante mollis a. Integer bibendum interdum
                            sem, eget volutpat purus pulvinar in. Sed tristique augue vitae sagittis porta. Phasellus
                            ullamcorper, dolor suscipit mattis viverra, sapien elit condimentum odio, ut imperdiet nisi
                            risus sit amet ante. Sed sem lorem, laoreet et facilisis quis, tincidunt non lorem. Etiam
                            tempus, dolor in sollicitudin faucibus, sem massa accumsan erat.</p>

                        <p>“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model search for evolved over sometimes by accident, sometimes on purpose ”</p>

                        <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo
                            dictum pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum
                            lacus posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum
                            tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0 pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="side-left">
                            <div class="heading-start">
                                <h2>Related Blogs</h2>
                            </div>
                        </div>
                    </div>
                </div>
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
