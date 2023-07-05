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
            <div class="row mt-lg-5">
                <div class="col-lg-5 mt-lg-5">
                    <div class="outsourcing position-relative">
                        <div class="d-flex">
                            <span>
                                <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_1_14272)">
                                    <circle cx="33" cy="33" r="32" fill="white"/>
                                    </g>
                                    <g clip-path="url(#clip0_1_14272)">
                                    <g opacity="0.53" filter="url(#filter1_f_1_14272)">
                                    <path d="M43.3125 29.25C43.3135 27.5121 42.8753 25.8021 42.0386 24.2789C41.2019 22.7557 39.9939 21.4687 38.5266 20.5373C37.0593 19.6059 35.3805 19.0605 33.646 18.9516C31.9116 18.8428 30.1777 19.174 28.6055 19.9146C27.0333 20.6551 25.6738 21.781 24.6532 23.1876C23.6325 24.5943 22.984 26.236 22.7677 27.9604C22.5514 29.6848 22.7744 31.4359 23.416 33.051C24.0576 34.6661 25.0969 36.0929 26.4375 37.1988V46.125C26.4374 46.2849 26.4782 46.4421 26.556 46.5818C26.6338 46.7215 26.746 46.839 26.882 46.9231C27.018 47.0071 27.1732 47.055 27.3329 47.0622C27.4926 47.0694 27.6515 47.0356 27.7945 46.9641L33 44.3672L38.2066 46.9699C38.3372 47.0324 38.4803 47.064 38.625 47.0625C38.8736 47.0625 39.1121 46.9637 39.2879 46.7879C39.4637 46.6121 39.5625 46.3736 39.5625 46.125V37.1988C40.7355 36.2328 41.68 35.019 42.3284 33.6447C42.9767 32.2704 43.3128 30.7696 43.3125 29.25ZM24.5625 29.25C24.5625 27.5812 25.0574 25.9499 25.9845 24.5624C26.9116 23.1748 28.2294 22.0934 29.7711 21.4548C31.3129 20.8161 33.0094 20.6491 34.6461 20.9746C36.2828 21.3002 37.7862 22.1038 38.9662 23.2838C40.1462 24.4638 40.9498 25.9672 41.2754 27.6039C41.6009 29.2406 41.4339 30.9371 40.7952 32.4789C40.1566 34.0206 39.0752 35.3384 37.6876 36.2655C36.3001 37.1926 34.6688 37.6875 33 37.6875C30.763 37.685 28.6183 36.7953 27.0365 35.2135C25.4547 33.6317 24.565 31.487 24.5625 29.25ZM37.6875 44.6086L33.4184 42.4746C33.2881 42.4094 33.1445 42.3755 32.9988 42.3755C32.8532 42.3755 32.7095 42.4094 32.5793 42.4746L28.3125 44.6086V38.434C29.7637 39.1757 31.3702 39.5625 33 39.5625C34.6298 39.5625 36.2363 39.1757 37.6875 38.434V44.6086ZM33 35.8125C34.2979 35.8125 35.5667 35.4276 36.6459 34.7065C37.7251 33.9854 38.5663 32.9605 39.063 31.7614C39.5597 30.5622 39.6896 29.2427 39.4364 27.9697C39.1832 26.6967 38.5582 25.5274 37.6404 24.6096C36.7226 23.6918 35.5533 23.0668 34.2803 22.8136C33.0073 22.5604 31.6878 22.6903 30.4886 23.187C29.2895 23.6837 28.2646 24.5249 27.5435 25.6041C26.8224 26.6833 26.4375 27.9521 26.4375 29.25C26.4394 30.9899 27.1314 32.658 28.3617 33.8883C29.592 35.1186 31.2601 35.8106 33 35.8125ZM33 24.5625C33.9271 24.5625 34.8334 24.8374 35.6042 25.3525C36.3751 25.8675 36.9759 26.5996 37.3307 27.4562C37.6855 28.3127 37.7783 29.2552 37.5974 30.1645C37.4166 31.0738 36.9701 31.909 36.3146 32.5646C35.659 33.2201 34.8238 33.6666 33.9145 33.8474C33.0052 34.0283 32.0627 33.9355 31.2062 33.5807C30.3496 33.2259 29.6176 32.6251 29.1025 31.8542C28.5874 31.0834 28.3125 30.1771 28.3125 29.25C28.3125 28.0068 28.8064 26.8145 29.6854 25.9354C30.5645 25.0564 31.7568 24.5625 33 24.5625Z" fill="#BF8D5C"/>
                                    </g>
                                    <path d="M43.3125 29.25C43.3135 27.5121 42.8753 25.8021 42.0386 24.2789C41.2019 22.7557 39.9939 21.4687 38.5266 20.5373C37.0593 19.6059 35.3805 19.0605 33.646 18.9516C31.9116 18.8428 30.1777 19.174 28.6055 19.9146C27.0333 20.6551 25.6738 21.781 24.6532 23.1876C23.6325 24.5943 22.984 26.236 22.7677 27.9604C22.5514 29.6848 22.7744 31.4359 23.416 33.051C24.0576 34.6661 25.0969 36.0929 26.4375 37.1988V46.125C26.4374 46.2849 26.4782 46.4421 26.556 46.5818C26.6338 46.7215 26.746 46.839 26.882 46.9231C27.018 47.0071 27.1732 47.055 27.3329 47.0622C27.4926 47.0694 27.6515 47.0356 27.7945 46.9641L33 44.3672L38.2066 46.9699C38.3372 47.0324 38.4803 47.064 38.625 47.0625C38.8736 47.0625 39.1121 46.9637 39.2879 46.7879C39.4637 46.6121 39.5625 46.3736 39.5625 46.125V37.1988C40.7355 36.2328 41.68 35.019 42.3284 33.6447C42.9767 32.2704 43.3128 30.7696 43.3125 29.25ZM24.5625 29.25C24.5625 27.5812 25.0574 25.9499 25.9845 24.5624C26.9116 23.1748 28.2294 22.0934 29.7711 21.4548C31.3129 20.8161 33.0094 20.6491 34.6461 20.9746C36.2828 21.3002 37.7862 22.1038 38.9662 23.2838C40.1462 24.4638 40.9498 25.9672 41.2754 27.6039C41.6009 29.2406 41.4339 30.9371 40.7952 32.4789C40.1566 34.0206 39.0752 35.3384 37.6876 36.2655C36.3001 37.1926 34.6688 37.6875 33 37.6875C30.763 37.685 28.6183 36.7953 27.0365 35.2135C25.4547 33.6317 24.565 31.487 24.5625 29.25ZM37.6875 44.6086L33.4184 42.4746C33.2881 42.4094 33.1445 42.3755 32.9988 42.3755C32.8532 42.3755 32.7095 42.4094 32.5793 42.4746L28.3125 44.6086V38.434C29.7637 39.1757 31.3702 39.5625 33 39.5625C34.6298 39.5625 36.2363 39.1757 37.6875 38.434V44.6086ZM33 35.8125C34.2979 35.8125 35.5667 35.4276 36.6459 34.7065C37.7251 33.9854 38.5663 32.9605 39.063 31.7614C39.5597 30.5622 39.6896 29.2427 39.4364 27.9697C39.1832 26.6967 38.5582 25.5274 37.6404 24.6096C36.7226 23.6918 35.5533 23.0668 34.2803 22.8136C33.0073 22.5604 31.6878 22.6903 30.4886 23.187C29.2895 23.6837 28.2646 24.5249 27.5435 25.6041C26.8224 26.6833 26.4375 27.9521 26.4375 29.25C26.4394 30.9899 27.1314 32.658 28.3617 33.8883C29.592 35.1186 31.2601 35.8106 33 35.8125ZM33 24.5625C33.9271 24.5625 34.8334 24.8374 35.6042 25.3525C36.3751 25.8675 36.9759 26.5996 37.3307 27.4562C37.6855 28.3127 37.7783 29.2552 37.5974 30.1645C37.4166 31.0738 36.9701 31.909 36.3146 32.5646C35.659 33.2201 34.8238 33.6666 33.9145 33.8474C33.0052 34.0283 32.0627 33.9355 31.2062 33.5807C30.3496 33.2259 29.6176 32.6251 29.1025 31.8542C28.5874 31.0834 28.3125 30.1771 28.3125 29.25C28.3125 28.0068 28.8064 26.8145 29.6854 25.9354C30.5645 25.0564 31.7568 24.5625 33 24.5625Z" fill="#BF8D5C"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_d_1_14272" x="0" y="0" width="76" height="76" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dx="5" dy="5"/>
                                    <feGaussianBlur stdDeviation="3"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.266667 0 0 0 0 0.266667 0 0 0 0 0.266667 0 0 0 0.06 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_14272"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_14272" result="shape"/>
                                    </filter>
                                    <filter id="filter1_f_1_14272" x="16.6875" y="12.9314" width="32.625" height="40.1318" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                    <feGaussianBlur stdDeviation="3" result="effect1_foregroundBlur_1_14272"/>
                                    </filter>
                                    <clipPath id="clip0_1_14272">
                                    <rect width="30" height="30" fill="white" transform="translate(18 18)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    
                            </span>
                            <span>
                                <h4>Quality Assurance</h4>
                                <p>We value our clients with exceptional service</p>
                            </span>
                        </div>
                    </div>
                    <div class="outsourcing position-relative">
                        <div class="d-flex">
                            <span>
                                <svg width="76" height="77" viewBox="0 0 76 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_1_14273)">
                                    <circle cx="33" cy="33.5" r="32" fill="white"/>
                                    </g>
                                    <g clip-path="url(#clip0_1_14273)">
                                    <g opacity="0.53" filter="url(#filter1_f_1_14273)">
                                    <path d="M40.105 23.0037C40.7563 22.18 40.1425 21 39.06 21H30.665C30.4377 20.9983 30.2138 21.0552 30.0148 21.1651C29.8158 21.275 29.6484 21.4342 29.5288 21.6275L23.1763 32.1975C22.675 33.03 23.305 34.0687 24.3113 34.0687H28.5975L24.56 44.15C23.9763 45.425 25.5538 46.5912 26.6138 45.6687L43 30.1637H34.4388L40.105 23.0037Z" stroke="#6C749D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <path d="M40.105 23.0037C40.7563 22.18 40.1425 21 39.06 21H30.665C30.4377 20.9983 30.2138 21.0552 30.0148 21.1651C29.8158 21.275 29.6484 21.4342 29.5288 21.6275L23.1763 32.1975C22.675 33.03 23.305 34.0687 24.3113 34.0687H28.5975L24.56 44.15C23.9763 45.425 25.5538 46.5912 26.6138 45.6687L43 30.1637H34.4388L40.105 23.0037Z" stroke="#6C749D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_d_1_14273" x="0" y="0.5" width="76" height="76" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dx="5" dy="5"/>
                                    <feGaussianBlur stdDeviation="3"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.266667 0 0 0 0 0.266667 0 0 0 0 0.266667 0 0 0 0.06 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_14273"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_14273" result="shape"/>
                                    </filter>
                                    <filter id="filter1_f_1_14273" x="15.7403" y="13.7499" width="34.5098" height="39.5026" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                    <feGaussianBlur stdDeviation="3" result="effect1_foregroundBlur_1_14273"/>
                                    </filter>
                                    <clipPath id="clip0_1_14273">
                                    <rect width="30" height="30" fill="white" transform="translate(18 18.5)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    
                            </span>
                            <span>
                                <h4>Quality Assurance</h4>
                                <p>We value our clients with exceptional service</p>
                            </span>
                        </div>
                    </div>
                    <div class="outsourcing">
                        <div class="d-flex">
                            <span>
                                <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_1_14274)">
                                    <circle cx="33" cy="33" r="32" fill="white"/>
                                    </g>
                                    <g clip-path="url(#clip0_1_14274)">
                                    <g opacity="0.53" filter="url(#filter1_f_1_14274)">
                                    <path d="M37.375 34.25C36.2147 34.25 35.1019 34.7109 34.2814 35.5314C33.4609 36.3519 33 37.4647 33 38.625M33 38.625V39.875M33 38.625C33 37.4647 32.5391 36.3519 31.7186 35.5314C30.8981 34.7109 29.7853 34.25 28.625 34.25M33 39.875C33 41.0353 33.4609 42.1481 34.2814 42.9686C35.1019 43.7891 36.2147 44.25 37.375 44.25C38.5353 44.25 39.6481 43.7891 40.4686 42.9686C41.2891 42.1481 41.75 41.0353 41.75 39.875V37.625M33 39.875C33 41.0353 32.5391 42.1481 31.7186 42.9686C30.8981 43.7891 29.7853 44.25 28.625 44.25C27.4647 44.25 26.3519 43.7891 25.5314 42.9686C24.7109 42.1481 24.25 41.0353 24.25 39.875V37.625" stroke="#A969A9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M39.875 38C41.0353 38 42.1481 37.5391 42.9686 36.7186C43.7891 35.8981 44.25 34.7853 44.25 33.625C44.25 32.4647 43.7891 31.3519 42.9686 30.5314C42.1481 29.7109 41.0353 29.25 39.875 29.25H39.25" stroke="#A969A9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M41.75 29.625V26.125C41.75 24.9647 41.2891 23.8519 40.4686 23.0314C39.6481 22.2109 38.5353 21.75 37.375 21.75C36.2147 21.75 35.1019 22.2109 34.2814 23.0314C33.4609 23.8519 33 24.9647 33 26.125M26.125 38C24.9647 38 23.8519 37.5391 23.0314 36.7186C22.2109 35.8981 21.75 34.7853 21.75 33.625C21.75 32.4647 22.2109 31.3519 23.0314 30.5314C23.8519 29.7109 24.9647 29.25 26.125 29.25H26.75" stroke="#A969A9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M24.25 29.625V26.125C24.25 24.9647 24.7109 23.8519 25.5314 23.0314C26.3519 22.2109 27.4647 21.75 28.625 21.75C29.7853 21.75 30.8981 22.2109 31.7186 23.0314C32.5391 23.8519 33 24.9647 33 26.125V38.625" stroke="#A969A9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <path d="M37.375 34.25C36.2147 34.25 35.1019 34.7109 34.2814 35.5314C33.4609 36.3519 33 37.4647 33 38.625M33 38.625V39.875M33 38.625C33 37.4647 32.5391 36.3519 31.7186 35.5314C30.8981 34.7109 29.7853 34.25 28.625 34.25M33 39.875C33 41.0353 33.4609 42.1481 34.2814 42.9686C35.1019 43.7891 36.2147 44.25 37.375 44.25C38.5353 44.25 39.6481 43.7891 40.4686 42.9686C41.2891 42.1481 41.75 41.0353 41.75 39.875V37.625M33 39.875C33 41.0353 32.5391 42.1481 31.7186 42.9686C30.8981 43.7891 29.7853 44.25 28.625 44.25C27.4647 44.25 26.3519 43.7891 25.5314 42.9686C24.7109 42.1481 24.25 41.0353 24.25 39.875V37.625" stroke="#A969A9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M39.875 38C41.0353 38 42.1481 37.5391 42.9686 36.7186C43.7891 35.8981 44.25 34.7853 44.25 33.625C44.25 32.4647 43.7891 31.3519 42.9686 30.5314C42.1481 29.7109 41.0353 29.25 39.875 29.25H39.25" stroke="#A969A9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M41.75 29.625V26.125C41.75 24.9647 41.2891 23.8519 40.4686 23.0314C39.6481 22.2109 38.5353 21.75 37.375 21.75C36.2147 21.75 35.1019 22.2109 34.2814 23.0314C33.4609 23.8519 33 24.9647 33 26.125M26.125 38C24.9647 38 23.8519 37.5391 23.0314 36.7186C22.2109 35.8981 21.75 34.7853 21.75 33.625C21.75 32.4647 22.2109 31.3519 23.0314 30.5314C23.8519 29.7109 24.9647 29.25 26.125 29.25H26.75" stroke="#A969A9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M24.25 29.625V26.125C24.25 24.9647 24.7109 23.8519 25.5314 23.0314C26.3519 22.2109 27.4647 21.75 28.625 21.75C29.7853 21.75 30.8981 22.2109 31.7186 23.0314C32.5391 23.8519 33 24.9647 33 26.125V38.625" stroke="#A969A9" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_d_1_14274" x="0" y="0" width="76" height="76" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dx="5" dy="5"/>
                                    <feGaussianBlur stdDeviation="3"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.266667 0 0 0 0 0.266667 0 0 0 0 0.266667 0 0 0 0.06 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_14274"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_14274" result="shape"/>
                                    </filter>
                                    <filter id="filter1_f_1_14274" x="14.5" y="14.5" width="37" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                    <feGaussianBlur stdDeviation="3" result="effect1_foregroundBlur_1_14274"/>
                                    </filter>
                                    <clipPath id="clip0_1_14274">
                                    <rect width="30" height="30" fill="white" transform="translate(18 18)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    
                                    
                            </span>
                            <span>
                                <h4>Quality Assurance</h4>
                                <p>We value our clients with exceptional service</p>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 text-end mt-lg-5">
                    <div class="numbers">
                        <div class="num-col">
                          <h6 class="number"><span class="counter" data-count="60"> 0 </span>+</h6>
                          <p class="card-text"><strong>Years of Excellence</strong></p>
                        </div>
                        <div class="num-col">
                          <h6 class="number"><span class="counter" data-count="500"> 0 </span>+</h6>
                          <p class="card-text"><strong>Students Trained</strong></p>
                        </div>
                      </div>
                   <div class="outsourcing-img mt-lg-5">
                    <img src="{{ asset('images/cotgin-min.jpg') }}" alt="">
                   </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection