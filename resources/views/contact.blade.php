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
                            <div class="heading-start">
                                <h4>Make Your Business Goals A Reality</h4>
                            </div>
                            <div class="paragraph">
                                <p>We would be happy to discuss your outsourcing projects so don’t wait contact us today and
                                    learn more about our services.</p>
                            </div>
                            <div class="heading-start mt-5">
                                <h4>Our Office</h4>
                            </div>
                            <div class="contact-info">
                                <div class="info-box">
                                    <span class="contact-icon shadow"><img src="{{ asset('images/svg/map.svg') }}"
                                            class="img-fluid" alt="Address"></span>
                                    <p>21 Arihant Nagar, West Punjabi Bagh, New Delhi, Delhi 110026</p>
                                </div>
                                <div class="info-box">
                                    <span class="contact-icon shadow"><img src="{{ asset('images/svg/email.svg') }}"
                                            class="img-fluid" alt="email"></span>
                                    <p><a href="mailto:info@cotginitsolution.com">info@cotginitsolution.com</a></p>
                                </div>
                                <div class="info-box">
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
