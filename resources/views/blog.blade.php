@extends('layouts.app')
@section('content')
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
                           
                        </div>
                    </div>
                </div>
            </div>
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