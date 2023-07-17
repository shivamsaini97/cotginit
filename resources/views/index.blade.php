@extends('layouts.app')
@section('content')
<main id="home">
    <section class="banner-home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                   <div class="heading mb-5">
                        <h1>Elevate your Business with Perfect Partner Today!</h1>
                      {{-- <video class="heading-1" width="70%" height="22px" src="{{asset('images/video/heading-line.mp4')}}" muted autoplay></video> --}}
                      <div class="headingline-1">
                        <svg  viewBox="0 0 360 24"  xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-outside-1_1_79" maskUnits="userSpaceOnUse" x="0" y="0"  >
                        <rect fill="#fff" width="450" height="28"/>

                        </mask>
                        <path class="star"  d="M346.864 10.7113C343.525 11.0649 340.173 11.4059 336.858 11.8163C333.107 12.2773 329.332 12.7129 325.63 13.2686C321.237 13.9 316.87 14.6262 312.502 15.3271C309.344 15.8385 306.258 16.451 303.1 16.9625C301.467 17.2277 299.821 17.4234 298.152 17.5939C296.869 17.7328 295.611 17.9096 294.316 18.0296C294.236 18.0296 294.156 18.0296 294.076 18.0296C293.634 18.0296 293.376 17.5757 293.59 17.1898C293.747 16.9056 293.893 16.6152 294.05 16.3247C294.522 15.4155 295.054 14.5125 295.49 13.597C295.768 12.9655 296.022 12.3657 296.204 11.7469C296.306 11.4189 296.367 11.0877 296.385 10.7555C296.367 10.4433 296.294 10.1326 296.167 9.82732C295.998 9.28592 295.61 8.76947 295.03 8.31192C294.703 8.04233 294.27 7.81204 293.759 7.63629C293.194 7.45232 292.578 7.31394 291.932 7.22585C291.379 7.1628 290.816 7.12478 290.251 7.1122C289.727 7.09325 289.201 7.09325 288.678 7.1122C287.323 7.19168 285.99 7.3549 284.709 7.59841L281.745 8.05934C280.039 8.33085 278.321 8.58344 276.639 8.8739C273.009 9.50532 269.379 10.0926 265.749 10.7682L252.44 13.2055C248.338 13.9569 244.224 14.7019 240.074 15.3713C237.533 15.788 234.932 16.1416 232.355 16.5078C229.776 16.883 227.158 17.1803 224.514 17.3981C221.803 17.5874 219.061 17.6254 216.335 17.5118C215.511 17.4412 214.701 17.3312 213.915 17.1834C213.414 17.0522 212.929 16.9046 212.463 16.7414C212.149 16.5993 211.848 16.4498 211.56 16.2933C211.468 16.2433 211.379 16.1834 211.3 16.1156C211.176 16.0099 211.077 15.8818 211.001 15.7378C210.825 15.4059 210.691 15.0683 210.6 14.7272C210.491 13.9821 210.515 13.237 210.479 12.4856L210.406 10.4146C210.408 9.35969 210.295 8.3056 210.067 7.25745C209.854 5.88497 209.069 4.55327 207.768 3.35521C207.41 3.08221 207.005 2.82654 206.558 2.59121C205.275 1.90245 203.676 1.39605 201.912 1.11997C201.319 1.0521 200.716 1.01195 200.109 1H199.831C199.395 1 198.96 1 198.524 1.0442C197.062 1.1137 195.613 1.24676 194.193 1.44201C192.898 1.6188 191.628 1.87769 190.369 2.11764C189.111 2.35758 187.865 2.58489 186.618 2.83115C183.908 3.36155 181.258 3.96141 178.621 4.57389C175.983 5.18637 173.781 5.76726 171.361 6.39868C170.018 6.75228 168.663 7.09958 167.344 7.47843L161.294 9.20853L152.123 11.8542L141.753 14.8724C137.479 16.1378 133.085 17.2905 128.589 18.3263C126.79 18.7094 124.967 19.0714 123.12 19.4124C121.314 19.7567 119.451 20.0145 117.554 20.1827C116.078 20.2815 114.587 20.3048 113.102 20.2522C112.626 20.2054 112.158 20.1421 111.698 20.0627C111.409 19.9842 111.13 19.8956 110.863 19.7976C110.528 19.6425 110.213 19.4758 109.92 19.2987C109.762 19.1834 109.648 19.0208 109.554 18.8499C109.349 18.4797 109.197 18.1021 109.097 17.7201C108.952 17.0319 108.891 16.3373 108.794 15.6428L108.516 13.6033C108.381 12.5108 108.131 11.4231 107.766 10.3451C107.524 9.72869 107.193 9.12286 106.774 8.5329C106.352 7.85937 105.792 7.21156 105.104 6.60074C104.492 6.0869 103.747 5.61947 102.89 5.2116C101.989 4.78152 101.004 4.40265 99.9497 4.08136C98.9057 3.76787 97.7924 3.52193 96.6345 3.34892C95.2069 3.15093 93.7423 3.03445 92.2665 3.00161C86.5919 2.7743 80.9414 3.39944 75.424 4.01823C69.9066 4.63703 64.2199 5.48311 58.7025 6.35448C56.1979 6.74596 53.6812 7.12482 51.225 7.57945C47.2927 8.30558 43.3846 9.06963 39.4885 9.84628C33.0354 11.1091 26.659 12.4477 20.3592 13.8621C18.6532 14.2347 16.9592 14.6072 15.2653 14.9924C13.5714 15.3776 12.2041 15.7185 10.6796 16.0911C7.43693 16.893 4.23057 17.7328 1 18.5599C6.86826 17.6823 12.7002 16.7162 18.5806 15.8637C23.3236 15.1692 28.0504 14.4494 32.7612 13.7043C37.964 12.8834 43.1466 12.0226 48.309 11.1218L52.7738 10.3262C55.4235 9.84629 58.1096 9.41691 60.7836 8.98123C64.7523 8.3498 68.7451 7.71838 72.7621 7.16904C74.7706 6.89121 76.7913 6.65127 78.8119 6.41764C80.8325 6.18402 83.204 5.9125 85.4303 5.74201C88.1907 5.55264 90.9834 5.52723 93.7548 5.66625C94.7066 5.75072 95.6421 5.87962 96.5498 6.05141C97.3241 6.25114 98.0683 6.48124 98.7761 6.73968C99.3842 6.99927 99.9508 7.28434 100.47 7.59209C100.94 7.95928 101.345 8.34819 101.68 8.75393C102.372 9.67314 102.879 10.6275 103.192 11.6016C103.531 13.0728 103.688 14.5504 103.882 16.0216C103.882 16.3121 103.943 16.6088 103.967 16.8993C104.033 17.5508 104.167 18.2 104.366 18.8441C104.463 19.1346 104.572 19.4187 104.717 19.7028C104.877 19.994 105.104 20.2739 105.394 20.5363C105.707 20.806 106.067 21.0597 106.471 21.294C106.732 21.4542 107.015 21.6041 107.318 21.7423L108.31 22.1464C109.273 22.4737 110.344 22.7049 111.468 22.8284C112.639 22.9517 113.832 23.0089 115.026 22.9989C117.792 22.9702 120.536 22.7298 123.169 22.2854C124.451 22.0833 125.71 21.837 126.968 21.5908C128.226 21.3445 129.497 21.0857 130.743 20.8141C133.453 20.1827 136.103 19.5513 138.729 18.8315C139.878 18.5221 141.04 18.2 142.165 17.897L144.585 17.1834L151.929 15.0366C154.76 14.1947 157.584 13.3696 160.399 12.5614L169.34 9.96625C170.792 9.5432 172.281 9.15169 173.757 8.76021C177.011 7.89515 180.302 7.07432 183.666 6.32923C185.856 5.85567 188.07 5.40736 190.309 4.99694C192.499 4.5539 194.758 4.20957 197.06 3.96771C198.079 3.89523 199.108 3.87617 200.134 3.91086C200.286 3.92308 200.435 3.94211 200.581 3.96771C200.884 4.04979 201.174 4.13819 201.477 4.23922C201.859 4.4137 202.219 4.60146 202.553 4.8012C202.947 5.09229 203.253 5.48343 203.481 5.91611C203.756 6.43721 203.963 6.96758 204.102 7.50368C204.296 8.46976 204.308 9.44847 204.32 10.4272C204.32 11.1154 204.32 11.81 204.32 12.4983C204.32 12.9744 204.32 13.5321 204.32 14.0856C204.32 14.5715 204.344 15.0611 204.486 15.5259C204.52 15.6367 204.557 15.7473 204.598 15.8575C204.778 16.4369 205.105 16.9633 205.552 17.3732C205.657 17.4693 205.766 17.5639 205.881 17.657C206.042 17.8193 206.236 17.9717 206.462 18.1116C206.728 18.3011 207.006 18.4842 207.296 18.6547C207.665 18.871 208.07 19.0696 208.506 19.2482C209.008 19.4622 209.533 19.6604 210.079 19.8418C210.542 19.9931 211.033 20.1199 211.543 20.2206C212.152 20.3561 212.774 20.4741 213.407 20.5742C214.664 20.7371 215.948 20.8344 217.242 20.8647C218.697 20.9152 220.156 20.9152 221.61 20.8647C224.273 20.7762 226.919 20.5799 229.523 20.2774C232.342 19.9554 235.113 19.5134 237.884 19.1093C243.292 18.32 248.532 17.2592 253.807 16.2805C255.416 15.9837 257.025 15.6491 258.647 15.346C262.277 14.6451 265.906 13.9253 269.536 13.256C272.549 12.7003 275.586 12.1447 278.587 11.6016C280.002 11.3427 281.454 11.1281 282.882 10.8881L285.205 10.5093C286.393 10.2954 287.605 10.1204 288.835 9.98518C289.315 9.97256 289.795 9.97256 290.275 9.98518C290.417 9.98518 290.551 10.0597 290.614 10.1876C290.648 10.2579 290.68 10.3287 290.708 10.3999C290.726 10.4472 290.739 10.4966 290.745 10.547C290.756 10.629 290.761 10.7111 290.762 10.7932C290.764 11.0336 290.692 11.2668 290.601 11.4892C290.133 12.6295 289.539 13.755 288.823 14.8598C288.424 15.4912 288.073 16.1227 287.613 16.7225C287.468 16.9056 287.323 17.0887 287.189 17.2719C287.089 17.4404 287.015 17.6127 286.969 17.7872C286.894 18.0676 286.948 18.3612 287.02 18.642C287.057 18.8094 287.126 18.9744 287.226 19.1346C287.411 19.4391 287.662 19.7315 287.976 20.0059C288.161 20.132 288.331 20.2801 288.52 20.4008C288.677 20.5007 288.86 20.589 289.065 20.6626C289.588 20.8983 290.197 21.0766 290.856 21.1867C292.071 21.3745 293.346 21.4346 294.606 21.3635C295.828 21.2968 297.04 21.1914 298.236 21.0478L301.636 20.6689C304.411 20.3192 307.136 19.8698 309.791 19.324C314.97 18.3263 320.1 17.2971 325.218 16.2173C332.296 14.7335 339.435 13.3444 346.574 11.93L352.091 10.8376C354.39 10.3893 356.677 9.92204 359 9.51793C354.947 9.85258 350.905 10.3072 346.864 10.7113Z" fill="#5EA813"/>
                        </svg>
                        </div>
                   </div>
                </div>
                <div class="col-lg-7">
                    <div class="d-flex justify-content-end wow fadeInRight" data-wow-delay="300ms" >
                        <div class="image-box position-relative">
                            <a href="{{route('it-services')}}">
                                <div class="position-relative image-hover-box" >
                                    <img src="{{ asset('images/banner1.jpg') }}" alt="">
                                </div>
                                <p class="col-content">IT Service</p>
                                <div class="hover-show-text child-first position-absolute align-items-center bottom-0 left-0 d-flex w-100 px-3 pb-3">
                                    <div class="w-50">
                                        <p class="writing">IT Service </p>    
                                    </div> 
                                    <div class="w-50 text-end">
                                        <p class="number-text">100+</p>    
                                        <p class="subject-top">Projects Completed</p>       
                                    </div>                             
                                </div>
                            </a>
                        </div>
                        <div class="image-box hover-box position-relative">
                            <a href="#">
                                <div class="position-relative image-hover-box">
                                    <img class="banner-4" src="{{ asset('images/banner4.jpg') }}" alt="">
                                </div>
                                <p class="col-content">Help Desk</p>
                                <div class="hover-show-text hover-show-text1 position-absolute align-items-center bottom-0 left-0 d-flex w-100 px-3 pb-3">
                                    <div class="w-50">
                                        <p class="writing">Help Desk</p>    
                                    </div> 
                                    <div class="w-50 text-end">
                                        <p class="number-text">100</p>    
                                        <p class="subject-top">TOPICS</p>       
                                    </div>                             
                                </div>
                            </a>
                        </div>
                        <div class="image-box hover-box position-relative">
                            <a href="#"> 
                                <div class="position-relative image-hover-box">
                                    <img class="banner-3" src="{{ asset('images/banner3.jpg') }}" alt="">
                                </div>
                                <p class="col-content">UI/ UX Design</p>
    
                                <div class="hover-show-text hover-show-text1 position-absolute align-items-center bottom-0 left-0 d-flex w-100 px-3 pb-3">
                                    <div class="w-50">
                                        <p class="writing">UI/ UX Design</p>    
               
                                    </div> 
                                    <div class="w-50 text-end">
                                        <p class="number-text">100</p>    
                                        <p class="subject-top">TOPICS</p>       
                                    </div>                             
                                </div>
                            </a>
                        </div>
                        <div class="image-box hover-box position-relative">
                            <a href="#">
                                <div class="position-relative image-hover-box">
                                    <img class="banner-2" src="{{ asset('images/banner2.jpg') }}" alt="">
                                </div>
                                <p class="col-content">Marketing</p>
    
                                <div class="hover-show-text hover-show-text1 position-absolute align-items-center bottom-0 left-0 d-flex w-100 px-3 pb-3">
                                    <div class="w-50">
                                        <p class="writing">Marketing</p>    
                                    </div> 
                                    <div class="w-50 text-end">
                                        <p class="number-text">100</p>    
                                        <p class="subject-top">TOPICS</p>       
                                    </div>                             
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="about-us">
        <div class="container">
            <div class="row" >
                <div class="col-lg-7 wow fadeInUp"data-wow-delay="100ms">
                    <p>Are you struggling to implement outsourcing for your business? You are at right place. Our team is ready to guide you through the outsourcing process. We work with businesses of all sizes and customize our services to meet each client's unique needs. Let us help you implement outsourcing successfully.</p>
                </div>
                <div class="col-lg-5">
                    <div class="heading-homeh2">
                        <h2>Power up Business with Outsourcing</h2>
                        <div class="headingline-2">
                            <svg width="349" height="15" viewBox="0 0 349 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="line2" d="M348.985 2.20027C347.268 2.07971 345.55 2.10983 343.833 2.08974C342.116 2.06965 340.413 2.02944 338.71 1.91893C334.906 1.6778 331.115 1.42664 327.325 1.20561C320.012 0.783639 312.683 0.442042 305.355 0.261198C298.633 0.0937501 291.912 0.00669793 285.19 0C283.443 0 281.711 0 279.964 0C273.302 0 266.639 0.110496 259.962 0.231059C244.373 0.522419 228.783 0.813786 213.208 1.30608C197.988 1.78833 182.769 2.31078 167.564 2.94373C160.087 3.25519 152.611 3.55659 145.134 3.94842C137.065 4.32016 128.982 4.64164 120.898 5.06361L70.9163 7.67581C56.4665 8.43937 42.0464 9.58471 27.7003 11.0315C18.4471 11.9558 9.20875 13.0408 0 14.2364C10.5708 14.6852 21.1565 14.9397 31.7569 15C38.6857 15 45.5996 14.9397 52.484 14.7488C56.9255 14.6283 61.367 14.4575 65.8826 14.2465C68.6215 14.1159 71.3604 13.9149 74.0994 13.7441L96.1589 12.3577C104.539 11.8252 112.918 11.2525 121.328 10.7703L147.266 9.2331C155.039 8.79103 162.811 8.42933 170.599 8.02746C178.386 7.62558 185.774 7.34427 193.369 7.02277C200.964 6.70127 208.692 6.44003 216.346 6.15872C224.001 5.87741 231.951 5.72673 239.739 5.52579C253.996 5.1641 268.238 5.03347 282.496 4.97319C290.416 4.97319 298.352 4.75216 306.273 4.56127C314.193 4.37038 321.892 4.13931 329.679 3.81781C332.862 3.6872 336.046 3.59677 339.214 3.37574C340.744 3.28335 342.266 3.13578 343.774 2.93368C345.106 2.74278 346.424 2.47152 347.771 2.31077C348.186 2.31077 348.585 2.24045 349 2.22035L348.985 2.20027Z" fill="#5EA813"/>
                                </svg>
                                
                            </div>
                        {{-- <video class="heading-2" src="{{asset('images/video/2nd-animation.mp4')}}" muted autoplay></video> --}}
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5 wow fadeInUp"data-wow-delay="200ms">
                <div class="col-lg-5 mt-lg-3 py-md-0 py-5">
                    <div class="outsourcing position-relative">
                        <div class="d-flex">
                            <span>
                                <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_1_14272)">
                                    <circle cx="33" cy="33" r="32" fill="white"/>
                                    </g>
                                    <g clip-path="url(#clip0_1_14272)">
                                    <g opacity="0.53" filter="url(#filter1_f_1_14272)">
                                    </g>
                                    <path  d="M43.3125 29.25C43.3135 27.5121 42.8753 25.8021 42.0386 24.2789C41.2019 22.7557 39.9939 21.4687 38.5266 20.5373C37.0593 19.6059 35.3805 19.0605 33.646 18.9516C31.9116 18.8428 30.1777 19.174 28.6055 19.9146C27.0333 20.6551 25.6738 21.781 24.6532 23.1876C23.6325 24.5943 22.984 26.236 22.7677 27.9604C22.5514 29.6848 22.7744 31.4359 23.416 33.051C24.0576 34.6661 25.0969 36.0929 26.4375 37.1988V46.125C26.4374 46.2849 26.4782 46.4421 26.556 46.5818C26.6338 46.7215 26.746 46.839 26.882 46.9231C27.018 47.0071 27.1732 47.055 27.3329 47.0622C27.4926 47.0694 27.6515 47.0356 27.7945 46.9641L33 44.3672L38.2066 46.9699C38.3372 47.0324 38.4803 47.064 38.625 47.0625C38.8736 47.0625 39.1121 46.9637 39.2879 46.7879C39.4637 46.6121 39.5625 46.3736 39.5625 46.125V37.1988C40.7355 36.2328 41.68 35.019 42.3284 33.6447C42.9767 32.2704 43.3128 30.7696 43.3125 29.25ZM24.5625 29.25C24.5625 27.5812 25.0574 25.9499 25.9845 24.5624C26.9116 23.1748 28.2294 22.0934 29.7711 21.4548C31.3129 20.8161 33.0094 20.6491 34.6461 20.9746C36.2828 21.3002 37.7862 22.1038 38.9662 23.2838C40.1462 24.4638 40.9498 25.9672 41.2754 27.6039C41.6009 29.2406 41.4339 30.9371 40.7952 32.4789C40.1566 34.0206 39.0752 35.3384 37.6876 36.2655C36.3001 37.1926 34.6688 37.6875 33 37.6875C30.763 37.685 28.6183 36.7953 27.0365 35.2135C25.4547 33.6317 24.565 31.487 24.5625 29.25ZM37.6875 44.6086L33.4184 42.4746C33.2881 42.4094 33.1445 42.3755 32.9988 42.3755C32.8532 42.3755 32.7095 42.4094 32.5793 42.4746L28.3125 44.6086V38.434C29.7637 39.1757 31.3702 39.5625 33 39.5625C34.6298 39.5625 36.2363 39.1757 37.6875 38.434V44.6086ZM33 35.8125C34.2979 35.8125 35.5667 35.4276 36.6459 34.7065C37.7251 33.9854 38.5663 32.9605 39.063 31.7614C39.5597 30.5622 39.6896 29.2427 39.4364 27.9697C39.1832 26.6967 38.5582 25.5274 37.6404 24.6096C36.7226 23.6918 35.5533 23.0668 34.2803 22.8136C33.0073 22.5604 31.6878 22.6903 30.4886 23.187C29.2895 23.6837 28.2646 24.5249 27.5435 25.6041C26.8224 26.6833 26.4375 27.9521 26.4375 29.25C26.4394 30.9899 27.1314 32.658 28.3617 33.8883C29.592 35.1186 31.2601 35.8106 33 35.8125ZM33 24.5625C33.9271 24.5625 34.8334 24.8374 35.6042 25.3525C36.3751 25.8675 36.9759 26.5996 37.3307 27.4562C37.6855 28.3127 37.7783 29.2552 37.5974 30.1645C37.4166 31.0738 36.9701 31.909 36.3146 32.5646C35.659 33.2201 34.8238 33.6666 33.9145 33.8474C33.0052 34.0283 32.0627 33.9355 31.2062 33.5807C30.3496 33.2259 29.6176 32.6251 29.1025 31.8542C28.5874 31.0834 28.3125 30.1771 28.3125 29.25C28.3125 28.0068 28.8064 26.8145 29.6854 25.9354C30.5645 25.0564 31.7568 24.5625 33 24.5625Z" fill="#BF8D5C"/>
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
                    <div class="number-row d-flex">
                      
                          <div class="d-flex align-items-center text-start">
                            <h6 class="number year-ex"><span class="counter" data-count="5"> 0 </span>+</h6>
                            <p class="card-text">YEARS EXPERIENCE</p>
                          </div>
                   
                          <div class="divi">|</div>
                          <div class="d-flex align-items-center text-start">
                            <h6 class="number student-tra"><span class="counter" data-count="100"> 0 </span>+</h6>
                          <p class="card-text">HAPPY CLIENTS</p>
                          </div>
                  
                      </div>
                   <div class="outsourcing-img mt-lg-5">
                    <img class="animate-img" src="{{ asset('images/cotgin-min.jpg') }}" alt="">
                   </div>
                </div>
            </div>
        </div>
    </section>
    <section class="solution">
        <div class="container">
            <h2 class="text-center mb-5 wow fadeInUp"data-wow-delay="100ms">The Ultimate Solution is Here</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ultimate-box card-services1 position-relative overflow-hidden wow fadeInUp"data-wow-delay="200ms">
                        <a href="#">
                            <img class="hover-icon" src="{{ asset('images/svg/right-hover.svg') }}" alt="">
                            <img class="solution-icon" src="{{ asset('images/Outsource-UI-UX-Design.jpg') }}" alt="">
                            <div class="title cards mt-3">
                                <h4><a href="#">Outsource UI/ UX Design</a></h4>
                                <p>Level up Website Appeal</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ultimate-box card-services1 position-relative overflow-hidden wow fadeInUp"data-wow-delay="300ms">
                        <a href="#">
                            <img class="hover-icon" src="{{ asset('images/svg/right-hover.svg') }}" alt="">
                            <img class="solution-icon" src="{{ asset('images/Outsource-IT-Services.jpg') }}" alt="">
                            <div class="title cards mt-3">
                                <h4><a href="#">Outsource IT Services</a></h4>
                                <p>Maximize your IT with us</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ultimate-box position-relative overflow-hidden wow fadeInUp"data-wow-delay="300ms">
                        <a href="#">
                            <img class="hover-icon" src="{{ asset('images/svg/right-hover.svg') }}" alt="">
                            <img class="solution-icon" src="{{ asset('images/Outsource-Help-Desk.jpg') }}" alt="">
                            <div class="title cards mt-3">
                                <h4><a href="#">Outsource Help Desk</a></h4>
                                <p>Trust best Helpdesk Pros</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ultimate-box card-services1 position-relative overflow-hidden wow fadeInUp"data-wow-delay="400ms">
                        <a href="#">
                            <img class="hover-icon" src="{{ asset('images/svg/right-hover.svg') }}" alt="">
                            <img class="solution-icon" src="{{ asset('images/Outsource-Marketing.jpg') }}" alt="">
                            <div class="title cards mt-3">
                                <h4><a href="#">Outsource Marketing</a></h4>
                                <p>Perfect Fit for any Business </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0 home-grow">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="side-left">
                        <div class="heading-end wow fadeInUp"data-wow-delay="100ms">
                            <h2>Perfect match for B2B Service</h2>
                            <div class="headingline-3">
                                 <video class="heading-3" src="{{asset('images/video/final-3.mp4')}}" muted autoplay ></video>

                                {{-- <svg class="line3" width="235" height="15" viewBox="0 0 235 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M234.99 2.20027C233.834 2.07971 232.677 2.10983 231.521 2.08974C230.364 2.06965 229.218 2.02944 228.072 1.91893C225.509 1.6778 222.957 1.42664 220.405 1.20561C215.481 0.783639 210.546 0.442042 205.611 0.261198C201.085 0.0937501 196.559 0.00669793 192.033 0C190.857 0 189.691 0 188.514 0C184.028 0 179.542 0.110496 175.046 0.231059C164.549 0.522419 154.051 0.813786 143.564 1.30608C133.316 1.78833 123.068 2.31078 112.83 2.94373C107.795 3.25519 102.761 3.55659 97.7264 3.94842C92.2933 4.32016 86.8502 4.64164 81.4071 5.06361L47.7517 7.67581C38.0219 8.43937 28.312 9.58471 18.6521 11.0315C12.4214 11.9558 6.20074 13.0408 0 14.2364C7.11789 14.6852 14.2458 14.9397 21.3836 15C26.0491 15 30.7046 14.9397 35.3402 14.7488C38.3309 14.6283 41.3216 14.4575 44.3622 14.2465C46.2065 14.1159 48.0507 13.9149 49.895 13.7441L64.7488 12.3577C70.3913 11.8252 76.0338 11.2525 81.6962 10.7703L99.162 9.23309C104.396 8.79103 109.629 8.42933 114.873 8.02746C120.117 7.62558 125.091 7.34427 130.206 7.02277C135.32 6.70127 140.523 6.44003 145.677 6.15872C150.831 5.87741 156.185 5.72673 161.429 5.52579C171.029 5.1641 180.619 5.03347 190.219 4.97319C195.553 4.97319 200.896 4.75216 206.229 4.56127C211.563 4.37038 216.747 4.13931 221.99 3.81781C224.134 3.6872 226.277 3.59677 228.41 3.37574C229.441 3.28335 230.466 3.13578 231.481 2.93367C232.378 2.74278 233.265 2.47152 234.173 2.31077C234.452 2.31077 234.721 2.24045 235 2.22035L234.99 2.20027Z" fill="#5EA813"/>
                                    </svg> --}}

                            </div>
                        </div>
                        <div class="side-img wow fadeInLeft"data-wow-delay="200ms">
                            <img class="mt-4 w-100 " src="{{ asset('images/home-grow.jpg') }}" class="img-fluid"
                                alt="Grow Smarter with Perfect Partner">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="side-right">
                        <div class="block shadow animate-img">
                            <img class="mt-1 image-grow" src="{{ asset('images/Outsourcing-Made-Easy.png') }}" alt="Our Vision">
                            <img class="mt-1 bottom-shadow" src="{{ asset('images/svg/shadow.svg') }}" alt="Our Vision">
                            <h4>Outsourcing Made Easy</h4>
                            <p>Focus on your business while we manage the outsourcing process. Our experienced team will customize our services to your needs.</p>
                        </div>
                        <div class="block shadow animate-img wow fadeInRight" data-wow-delay="200ms">
                            <img class="mt-1 image-grow" src="{{ asset('images/Unleash-Business-Growth.png') }}" alt="Our Mission">
                            <img class="mt-1 bottom-shadow" src="{{ asset('images/svg/shadow.svg') }}"
                                alt="Our Mission">
                            <h4>Unleash Business Growth</h4>
                            <p>Step into the future of business with Cotgin IT Solution expert Marketing, Helpdesk, Website Design, and IT outsourcing services for businesses and individuals.</p>
                        </div>
                        <div class="block shadow animate-img wow fadeInRight" data-wow-delay="300ms">
                            <img class="mt-1 image-grow" src="{{ asset('images/Better-Results.png') }}" alt="Why Us">
                            <img class="mt-1 bottom-shadow" src="{{ asset('images/svg/shadow.svg') }}" alt="Why Us">
                            <h4>Better Results, Less Hassle</h4>
                            <p>Offload your tasks to our B2B outsourcing services and get the job done quickly to enjoy increased efficiency and a better overall return on investment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client pt-0 ">
        <div class="container position-relative">
            <h2 class="text-center position-relative wow fadeInUp"data-wow-delay="100ms">What our Client Says About Us</h2>
            <video class="heading-4" width="100%" height="100px" src="{{asset('images/video/final-4.mp4')}}" muted autoplay></video>
            <div class="row mt-3">
                <div class="col-12">
                    <a class='slick-prev'><img src="{{ asset('images/svg/prev.svg') }}" alt=""></a>
                    <a  class='slick-next'><img src="{{ asset('images/svg/next.svg') }}" alt=""></a>
                    <div class="client-slider wow fadeInUp"data-wow-delay="200ms">
                        <div class="client-card">
                            <p>I'm extremely happy to have received their services. They provided excellent Outsourcing support, and their team is Awesome.</p>
                            <div class="d-flex align-items-center">
                                <span class="client-img">
                                    <img class="mt-1 image-grow" src="{{ asset('images/William.png') }}" alt="Why Us">
                                </span>
    
                                <span class="client-detail ps-3">
                                    <h6>William</h6>
                                    <p>Lorem Ipsum</p>
                                </span>
                            </div>
                        </div>
                        <div class="client-card">
                            <p>I'm extremely happy to have received their services. They provided excellent Outsourcing support, and their team is Awesome.</p>
                            <div class="d-flex align-items-center">
                                <span class="client-img">
                                    <img class="mt-1 image-grow" src="{{ asset('images/William.png') }}" alt="Why Us">
                                </span>
    
                                <span class="client-detail ps-3">
                                    <h6>William</h6>
                                    <p>Lorem Ipsum</p>
                                </span>
                            </div>
                        </div>
                        <div class="client-card">
                            <p>I'm extremely happy to have received their services. They provided excellent Outsourcing support, and their team is Awesome.</p>
                            <div class="d-flex align-items-center">
                                <span class="client-img">
                                    <img class="mt-1 image-grow" src="{{ asset('images/William.png') }}" alt="Why Us">
                                </span>
    
                                <span class="client-detail ps-3">
                                    <h6>William</h6>
                                    <p>Lorem Ipsum</p>
                                </span>
                            </div>
                        </div>
                        <div class="client-card">
                            <p>I'm extremely happy to have received their services. They provided excellent Outsourcing support, and their team is Awesome.</p>
                            <div class="d-flex align-items-center">
                                <span class="client-img">
                                    <img class="mt-1 image-grow" src="{{ asset('images/William.png') }}" alt="Why Us">
                                </span>
    
                                <span class="client-detail ps-3">
                                    <h6>William</h6>
                                    <p>Lorem Ipsum</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0 perfect">
        <div class="container">
            <div class="row">
                <h2>Make A perfect Choice</h2>
                <p>We offer outsourcing services to a variety of companies, ranging from small businesses to large multinational corporations. With our services, we will show you how outsourcing can be implemented successfully.</p>
            </div>
            <div class="row mt-5 bg-map">
                <div class="col-lg-12"> 
                    <div class="d-flex perfect-img text-center mt-5 ">
                        <div class="wow fadeInUp"data-wow-delay="100ms" >
                            <img src="{{ asset('images/Experience-You-Can-Trust.png') }}" alt="">
                            <p><b>Experience You Can Trust</b></p>
                        </div>
                        <div class="wow fadeInUp"data-wow-delay="200ms">
                            <p><b>Custom Approach, Perfect Fit</b></p>
                            <img src="{{ asset('images/Custom-Approach-Perfect.png') }}" alt="">
                        </div>
                        <div class="wow fadeInUp"data-wow-delay="300ms">
                            <img src="{{ asset('images/Scale-Up-Outsourcing-as-You Grow.png') }}" alt="">
                            <p><b>Scale Up Outsourcing as You Grow</b></p>
                        </div>
                        <div class="wow fadeInUp"data-wow-delay="400ms">
                            <p><b>High Quality Services Always</b></p>
                            <img src="{{ asset('images/High-Quality-Services.png') }}" alt="">
                        </div>
                        <div class="wow fadeInUp"data-wow-delay="500ms">
                            <img src="{{ asset('images/Experience-You-Can-Trust.png') }}" alt="">
                            <p><b>Better Communication, Better Results</b></p>
                        </div>
                        <div class="wow fadeInUp"data-wow-delay="600ms">
                            <p><b>Scalable Pricing Models</b></p>
                            <img src="{{ asset('images/Scalable-Pricing-Models.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection