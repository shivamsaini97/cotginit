@extends('layouts.app')
@section('content')
<<<<<<< HEAD
<main class="blog-page">
    <section class="main-banner blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <div class="banner-text">
                            <h1>BLOG</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                                    <li class="breadcrum"> > </li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                           
=======
    <style>
        .blog-big-img {
            position: relative;
        }

        .latest-blog-text {
            position: absolute;
            left: 0;
        }

        .tabular-nav .nav-pills .nav-link.active,
        .tabular-nav .nav-pills .show>.nav-link {
            background: var(--green);
            color: var(--white);
            padding: 10px 20px;
        }

        .tabular-nav .nav-item .nav-link {
            border: 2px solid var(--green);
            color: var(--green);
            padding: 10px 20px;
        }

        .tabular-nav .active-tab,
        .tabular-nav .nav-link:hover {
            background: var(--green);
            color: var(--white);
            padding: 10px 20px;
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
                                <h1>Blog</h1>
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>
                            </div>
>>>>>>> 9bb48ab261e2d7864db6b576c6fe9adbf3f5842d
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
    </section>
    <section class="blog-tab pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="{{route('blog-detail')}}home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">View All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="{{route('blog-detail')}}profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">IT Service</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="{{route('blog-detail')}}contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Marketing Solutions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="helpdesk-support1" data-bs-toggle="tab" data-bs-target="{{route('blog-detail')}}helpdesk-support" type="button" role="tab" aria-controls="helpdesk-support" aria-selected="false">Helpdesk Support</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ui-ux1" data-bs-toggle="tab" data-bs-target="{{route('blog-detail')}}ui-ux" type="button" role="tab" aria-controls="ui-ux" aria-selected="false">UI/UX</button>
                          </li>
                        
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active mt-5" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="row ">
                                <div class="col-12 position-relative py-1">
                                    <div class="latest-blog-box ">
                                        <span class="tag-latest " ></span>
                                        <a href="{{route('blog-detail')}}"><img class="latest-blog " src="{{ asset('images/latest-blog.jpg') }}" class="img-fluid" alt="Grow Smarter with Perfect Partner"></a>
                                    </div>
                                    <a href="{{route('blog-detail')}}"><h4 class="mt-3">IT SUPPORT 8</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretiumLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium... <a href="{{route('blog-detail')}}" class="read-more"><b>Read More</b></a></p>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-lg-3">
                                    <div class="blog-box">
                                        <div class="blog-box-img">
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
                                        </div>
                                        <div class="date">
                                            <h5>26</h5>
                                            <p>FEB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item active"><a class="page-link" href="javascript:void()">1</a></li>
                                  <li class="page-item " aria-current="page">
                                    <a class="page-link" href="javascript:void()">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">...</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link next-page" href="javascript:void()">Next</a>
                                  </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade mt-5" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="row ">
                                <div class="col-12 position-relative py-1">
                                    <div class="latest-blog-box ">
                                        <span class="tag-latest " ></span>
                                        <a href="{{route('blog-detail')}}"><img class="latest-blog " src="{{ asset('images/latest-blog.jpg') }}" class="img-fluid" alt="Grow Smarter with Perfect Partner"></a>
                                    </div>
                                    <a href="{{route('blog-detail')}}"><h4 class="mt-3">IT SUPPORT 8</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretiumLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium... <a href="{{route('blog-detail')}}" class="read-more"><b>Read More</b></a></p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <div class="blog-box">
                                        <div class="blog-box-img">
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
                                        </div>
                                        <div class="date">
                                            <h5>26</h5>
                                            <p>FEB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item active"><a class="page-link" href="javascript:void()">1</a></li>
                                  <li class="page-item " aria-current="page">
                                    <a class="page-link" href="javascript:void()">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">...</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link next-page" href="javascript:void()">Next</a>
                                  </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade mt-5" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="row ">
                                <div class="col-12 position-relative py-1">
                                    <div class="latest-blog-box ">
                                        <span class="tag-latest " ></span>
                                        <a href="{{route('blog-detail')}}"><img class="latest-blog " src="{{ asset('images/latest-blog.jpg') }}" class="img-fluid" alt="Grow Smarter with Perfect Partner"></a>
                                    </div>
                                    <a href="{{route('blog-detail')}}"><h4 class="mt-3">IT SUPPORT 8</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretiumLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium... <a href="{{route('blog-detail')}}" class="read-more"><b>Read More</b></a></p>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-lg-3">
                                    <div class="blog-box">
                                        <div class="blog-box-img">
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
                                        </div>
                                        <div class="date">
                                            <h5>26</h5>
                                            <p>FEB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item active"><a class="page-link" href="javascript:void()">1</a></li>
                                  <li class="page-item " aria-current="page">
                                    <a class="page-link" href="javascript:void()">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">...</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link next-page" href="javascript:void()">Next</a>
                                  </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade mt-5" id="helpdesk-support" role="tabpanel" aria-labelledby="helpdesk-support1" tabindex="0">
                            <div class="row ">
                                <div class="col-12 position-relative py-1">
                                    <div class="latest-blog-box ">
                                        <span class="tag-latest " ></span>
                                        <a href="{{route('blog-detail')}}"><img class="latest-blog " src="{{ asset('images/latest-blog.jpg') }}" class="img-fluid" alt="Grow Smarter with Perfect Partner"></a>
                                    </div>
                                    <a href="{{route('blog-detail')}}"><h4 class="mt-3">IT SUPPORT 8</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretiumLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium... <a href="{{route('blog-detail')}}" class="read-more"><b>Read More</b></a></p>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-lg-3">
                                    <div class="blog-box">
                                        <div class="blog-box-img">
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
                                        </div>
                                        <div class="date">
                                            <h5>26</h5>
                                            <p>FEB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item active"><a class="page-link" href="javascript:void()">1</a></li>
                                  <li class="page-item " aria-current="page">
                                    <a class="page-link" href="javascript:void()">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">...</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link next-page" href="javascript:void()">Next</a>
                                  </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tab-pane fade mt-5" id="ui-ux" role="tabpanel" aria-labelledby="ui-ux1" tabindex="0">
                            <div class="row ">
                                <div class="col-12 position-relative py-1">
                                    <div class="latest-blog-box ">
                                        <span class="tag-latest " ></span>
                                        <a href="{{route('blog-detail')}}"><img class="latest-blog " src="{{ asset('images/latest-blog.jpg') }}" class="img-fluid" alt="Grow Smarter with Perfect Partner"></a>
                                    </div>
                                    <a href="{{route('blog-detail')}}"><h4 class="mt-3">IT SUPPORT 8</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretiumLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium... <a href="{{route('blog-detail')}}" class="read-more"><b>Read More</b></a></p>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-lg-3">
                                    <div class="blog-box">
                                        <div class="blog-box-img">
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
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
                                            <a href="{{route('blog-detail')}}"><img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid w-100"
                                                alt="Success Starts Here"></a>
                                        </div>
                                        <div class="blog-box-content">
                                            <a href="{{route('blog-detail')}}"><h5>IT SUPPORT 5</h5></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non
                                                tellus sem. Aenean pretium...</p>
                                            <a href="" class="read-more">Read More</a>
                                        </div>
                                        <div class="date">
                                            <h5>26</h5>
                                            <p>FEB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item active"><a class="page-link" href="javascript:void()">1</a></li>
                                  <li class="page-item " aria-current="page">
                                    <a class="page-link" href="javascript:void()">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">...</a></li>
                                  <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link next-page" href="javascript:void()">Next</a>
                                  </li>
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
=======
        </section>
        {{-- Banner end --}}


        <section>
            <div class="container tabular-nav">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-view-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-view" type="button" role="tab" aria-controls="pills-view"
                                    aria-selected="true">View All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-it-tab" data-bs-toggle="pill" data-bs-target="#pills-it"
                                    type="button" role="tab" aria-controls="pills-it" aria-selected="false">IT
                                    Service</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-marketing" type="button" role="tab"
                                    aria-controls="pills-marketing" aria-selected="false">Marketing Solutions</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-helpdesk-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-helpdesk" type="button" role="tab"
                                    aria-controls="pills-helpdesk" aria-selected="false">Helpdesk Support</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ui-tab" data-bs-toggle="pill" data-bs-target="#pills-ui"
                                    type="button" role="tab" aria-controls="pills-ui"
                                    aria-selected="false">UI/UX</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-view" role="tabpanel"
                                aria-labelledby="pills-view-tab" tabindex="0">
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="blog-big-img">
                                                    <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100"
                                                        alt="Blog">
                                                    <img class="latest-blog-text"
                                                        src="{{ asset('images/svg/latest-blog.svg') }}" alt="Blog">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Lorem Ipsum Dolor</h4>
                                                <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam
                                                    vel dui eget justo dictum
                                                    pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit,
                                                    sit amet bibendum lacus
                                                    posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat
                                                    sapien, et interdum
                                                    tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet......</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0 pt-4">
                                    <div class="container">
                                        <div class="row my-4">
                                            @for ($i = 0; $i < 12; $i++)
                                                <div class="col-lg-3">
                                                    <div class="blog-box">
                                                        <div class="blog-box-img">
                                                            <img src="{{ asset('images/blog.jpg') }}"
                                                                class="img-fluid w-100" alt="Success Starts Here">
                                                        </div>
                                                        <div class="blog-box-content">
                                                            <h5>IT SUPPORT 5</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                                                non
                                                                placerat mi. Etiam non
                                                                tellus sem. Aenean pretium...</p>
                                                            <a href="">Read More</a>
                                                        </div>
                                                        <div class="date">
                                                            <h5>26</h5>
                                                            <p>FEB</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="pills-it" role="tabpanel" aria-labelledby="pills-it-tab"
                                tabindex="0">
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="blog-big-img">
                                                    <img src="{{ asset('images/blog.jpg') }}" class="img-fluid w-100"
                                                        alt="Blog">
                                                    <img class="latest-blog-text"
                                                        src="{{ asset('images/svg/latest-blog.svg') }}" alt="Blog">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Lorem Ipsum Dolor</h4>
                                                <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam
                                                    vel dui eget justo dictum
                                                    pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit,
                                                    sit amet bibendum lacus
                                                    posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat
                                                    sapien, et interdum
                                                    tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet......</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0 pt-4">
                                    <div class="container">
                                        <div class="row my-4">
                                            @for ($i = 0; $i < 12; $i++)
                                                <div class="col-lg-3">
                                                    <div class="blog-box">
                                                        <div class="blog-box-img">
                                                            <img src="{{ asset('images/blog.jpg') }}"
                                                                class="img-fluid w-100" alt="Success Starts Here">
                                                        </div>
                                                        <div class="blog-box-content">
                                                            <h5>IT SUPPORT 5</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                                                non
                                                                placerat mi. Etiam non
                                                                tellus sem. Aenean pretium...</p>
                                                            <a href="">Read More</a>
                                                        </div>
                                                        <div class="date">
                                                            <h5>26</h5>
                                                            <p>FEB</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="pills-marketing" role="tabpanel"
                                aria-labelledby="pills-marketing-tab" tabindex="0">
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="blog-big-img">
                                                    <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100"
                                                        alt="Blog">
                                                    <img class="latest-blog-text"
                                                        src="{{ asset('images/svg/latest-blog.svg') }}" alt="Blog">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Lorem Ipsum Dolor</h4>
                                                <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam
                                                    vel dui eget justo dictum
                                                    pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit,
                                                    sit amet bibendum lacus
                                                    posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat
                                                    sapien, et interdum
                                                    tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet......</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0 pt-4">
                                    <div class="container">
                                        <div class="row my-4">
                                            @for ($i = 0; $i < 12; $i++)
                                                <div class="col-lg-3">
                                                    <div class="blog-box">
                                                        <div class="blog-box-img">
                                                            <img src="{{ asset('images/blog-img.jpg') }}"
                                                                class="img-fluid w-100" alt="Success Starts Here">
                                                        </div>
                                                        <div class="blog-box-content">
                                                            <h5>IT SUPPORT 5</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                                                non
                                                                placerat mi. Etiam non
                                                                tellus sem. Aenean pretium...</p>
                                                            <a href="">Read More</a>
                                                        </div>
                                                        <div class="date">
                                                            <h5>26</h5>
                                                            <p>FEB</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="pills-helpdesk" role="tabpanel"
                                aria-labelledby="pills-helpdesk-tab" tabindex="0">
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="blog-big-img">
                                                    <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100"
                                                        alt="Blog">
                                                    <img class="latest-blog-text"
                                                        src="{{ asset('images/svg/latest-blog.svg') }}" alt="Blog">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Lorem Ipsum Dolor</h4>
                                                <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam
                                                    vel dui eget justo dictum
                                                    pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit,
                                                    sit amet bibendum lacus
                                                    posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat
                                                    sapien, et interdum
                                                    tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet......</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0 pt-4">
                                    <div class="container">
                                        <div class="row my-4">
                                            @for ($i = 0; $i < 12; $i++)
                                                <div class="col-lg-3">
                                                    <div class="blog-box">
                                                        <div class="blog-box-img">
                                                            <img src="{{ asset('images/blog-img.jpg') }}"
                                                                class="img-fluid w-100" alt="Success Starts Here">
                                                        </div>
                                                        <div class="blog-box-content">
                                                            <h5>IT SUPPORT 5</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                                                non
                                                                placerat mi. Etiam non
                                                                tellus sem. Aenean pretium...</p>
                                                            <a href="">Read More</a>
                                                        </div>
                                                        <div class="date">
                                                            <h5>26</h5>
                                                            <p>FEB</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="pills-ui" role="tabpanel" aria-labelledby="pills-ui-tab"
                                tabindex="0">
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="blog-big-img">
                                                    <img src="{{ asset('images/blog-img.jpg') }}" class="img-fluid w-100"
                                                        alt="Blog">
                                                    <img class="latest-blog-text"
                                                        src="{{ asset('images/svg/latest-blog.svg') }}" alt="Blog">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4>Lorem Ipsum Dolor</h4>
                                                <p>Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam
                                                    vel dui eget justo dictum
                                                    pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit,
                                                    sit amet bibendum lacus
                                                    posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat
                                                    sapien, et interdum
                                                    tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet......</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="p-0 pt-4">
                                    <div class="container">
                                        <div class="row my-4">
                                            @for ($i = 0; $i < 12; $i++)
                                                <div class="col-lg-3">
                                                    <div class="blog-box">
                                                        <div class="blog-box-img">
                                                            <img src="{{ asset('images/blog-img.jpg') }}"
                                                                class="img-fluid w-100" alt="Success Starts Here">
                                                        </div>
                                                        <div class="blog-box-content">
                                                            <h5>IT SUPPORT 5</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                                                non
                                                                placerat mi. Etiam non
                                                                tellus sem. Aenean pretium...</p>
                                                            <a href="">Read More</a>
                                                        </div>
                                                        <div class="date">
                                                            <h5>26</h5>
                                                            <p>FEB</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
>>>>>>> 9bb48ab261e2d7864db6b576c6fe9adbf3f5842d
