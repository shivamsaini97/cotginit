@extends('layouts.app')
@section('content')
    <style>

    </style>
    <main id="contact">
        {{-- Banner start --}}
        <section class="main-banner about-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <div class="banner-text">
                                <h1>Contact Us</h1>
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                                        <li class="breadcrum"> > </li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                    <div class="col-lg-7">
                        <div class="side-left">
                            <div class="form">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="validationCustom01" class="form-label">Your Name *</label>
                                            <input type="text" class="form-control" id="validationCustom01" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom02" class="form-label">Company Name *</label>
                                            <input type="text" class="form-control" id="validationCustom02" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="validationCustomEmail" class="form-label">Email *</label>
                                            <input type="text" class="form-control" id="validationCustomEmail"
                                                aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom03" class="form-label">Phone *</label>
                                            <input type="text" class="form-control" id="validationCustom03" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label">Outsource *</label>
                                            <select class="form-select" id="validationCustom04" required>
                                                <option selected disabled value="">...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom05" class="form-label">Service *</label>
                                            <select class="form-select" id="validationCustom04" required>
                                                <option selected disabled value="">...</option>
                                                <option>...</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please provide a valid.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="validationCustom06" class="form-label">Message</label>
                                            <textarea class="form-control" rows="6" placeholder="Message" id="invalidCheck" required> </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btns contact-form" data-attr="Send Message">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="side-right">
                            <div class="heading-start wow fadeInUp" data-wow-delay="100ms">
                                <h4>Make Your Business Goals A Reality</h4>
                                <div class="headingline-2 contact-page-heading">
                                    <svg width="150" height="12" viewBox="0 0 150 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="line2" d="M149.994 1.76022C149.255 1.66377 148.517 1.68787 147.779 1.67179C147.041 1.65572 146.309 1.62356 145.578 1.53514C143.942 1.34224 142.313 1.14131 140.684 0.964487C137.541 0.626911 134.391 0.353634 131.241 0.208959C128.352 0.0750001 125.463 0.00535834 122.575 0C121.824 0 121.079 0 120.328 0C117.465 0 114.601 0.0883969 111.732 0.184847C105.031 0.417935 98.3307 0.651029 91.6366 1.04487C85.0952 1.43067 78.5539 1.84862 72.0188 2.35499C68.8054 2.60415 65.592 2.84527 62.3786 3.15874C58.9106 3.45612 55.4363 3.71331 51.962 4.05089L30.4798 6.14065C24.2693 6.7515 18.0715 7.66777 11.9056 8.82517C7.92856 9.56462 3.95792 10.4327 0 11.3891C4.54333 11.7481 9.09304 11.9518 13.6491 12C16.6271 12 19.5987 11.9518 22.5576 11.7991C24.4666 11.7026 26.3755 11.566 28.3163 11.3972C29.4935 11.2927 30.6707 11.1319 31.8479 10.9953L41.329 9.88613C44.9306 9.46014 48.5322 9.00202 52.1465 8.61621L63.2949 7.38648C66.6356 7.03282 69.9762 6.74346 73.3233 6.42196C76.6703 6.10046 79.8456 5.87541 83.1099 5.61821C86.3742 5.36101 89.6958 5.15202 92.9856 4.92697C96.2754 4.70192 99.6925 4.58138 103.04 4.42063C109.167 4.13128 115.289 4.02678 121.416 3.97855C124.821 3.97855 128.231 3.80173 131.636 3.64901C135.04 3.4963 138.349 3.31145 141.696 3.05424C143.064 2.94976 144.432 2.87742 145.794 2.70059C146.452 2.62668 147.106 2.50863 147.754 2.34694C148.326 2.19423 148.893 1.97722 149.472 1.84862C149.65 1.84862 149.822 1.79236 150 1.77628L149.994 1.76022Z" fill="#5EA813"/>
                                        </svg>
                                        
                                    </div>
                            </div>
                            <div class="paragraph wow fadeInUp" data-wow-delay="200ms">
                                <p>We would be happy to discuss your outsourcing projects so don’t wait contact us today and
                                    learn more about our services.</p>
                            </div>
                            <div class="heading-start mt-5">
                                <h4 class="wow fadeInUp" data-wow-delay="300ms">Our Office</h4>
                                <div class="headingline-2 contact-page-heading">
                                    <svg width="150" height="12" viewBox="0 0 150 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="line2" d="M149.994 1.76022C149.255 1.66377 148.517 1.68787 147.779 1.67179C147.041 1.65572 146.309 1.62356 145.578 1.53514C143.942 1.34224 142.313 1.14131 140.684 0.964487C137.541 0.626911 134.391 0.353634 131.241 0.208959C128.352 0.0750001 125.463 0.00535834 122.575 0C121.824 0 121.079 0 120.328 0C117.465 0 114.601 0.0883969 111.732 0.184847C105.031 0.417935 98.3307 0.651029 91.6366 1.04487C85.0952 1.43067 78.5539 1.84862 72.0188 2.35499C68.8054 2.60415 65.592 2.84527 62.3786 3.15874C58.9106 3.45612 55.4363 3.71331 51.962 4.05089L30.4798 6.14065C24.2693 6.7515 18.0715 7.66777 11.9056 8.82517C7.92856 9.56462 3.95792 10.4327 0 11.3891C4.54333 11.7481 9.09304 11.9518 13.6491 12C16.6271 12 19.5987 11.9518 22.5576 11.7991C24.4666 11.7026 26.3755 11.566 28.3163 11.3972C29.4935 11.2927 30.6707 11.1319 31.8479 10.9953L41.329 9.88613C44.9306 9.46014 48.5322 9.00202 52.1465 8.61621L63.2949 7.38648C66.6356 7.03282 69.9762 6.74346 73.3233 6.42196C76.6703 6.10046 79.8456 5.87541 83.1099 5.61821C86.3742 5.36101 89.6958 5.15202 92.9856 4.92697C96.2754 4.70192 99.6925 4.58138 103.04 4.42063C109.167 4.13128 115.289 4.02678 121.416 3.97855C124.821 3.97855 128.231 3.80173 131.636 3.64901C135.04 3.4963 138.349 3.31145 141.696 3.05424C143.064 2.94976 144.432 2.87742 145.794 2.70059C146.452 2.62668 147.106 2.50863 147.754 2.34694C148.326 2.19423 148.893 1.97722 149.472 1.84862C149.65 1.84862 149.822 1.79236 150 1.77628L149.994 1.76022Z" fill="#5EA813"/>
                                        </svg>
                                        
                                        
                                    </div>
                            </div>
                            <div class="contact-info">
                                <div class="info-box wow fadeInUp" data-wow-delay="400ms">
                                    <span class="contact-icon shadow"><img src="{{ asset('images/svg/map.svg') }}"
                                            class="img-fluid" alt="Address"></span>
                                    <p>21 Arihant Nagar, West Punjabi Bagh, New Delhi, Delhi 110026</p>
                                </div>
                                <div class="info-box wow fadeInUp" data-wow-delay="500ms">
                                    <span class="contact-icon shadow"><img src="{{ asset('images/svg/email.svg') }}"
                                            class="img-fluid" alt="email"></span>
                                    <p><a href="mailto:info@cotginitsolution.com">info@cotginitsolution.com</a></p>
                                </div>
                                <div class="info-box wow fadeInUp" data-wow-delay="600ms">
                                    <span class="contact-icon shadow"><img src="{{ asset('images/svg/phone.svg') }}"
                                            class="img-fluid" alt="Phone"></span>
                                    <p><a href="tel:8587851708">+91 8587851708</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56007.60833972151!2d77.04823174863284!3d28.675418800000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0377bc04b6b9%3A0x1c40fb16bb1f179a!2sCotgin%20Analytics%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1688552823973!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </main>
@endsection
