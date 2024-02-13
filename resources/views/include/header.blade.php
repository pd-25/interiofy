<!DOCTYPE html>
<html lang="en">


<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta http-equiv="X-UA-Compatible" content="ie=edge" />
     <title>INTERIOR</title>
     <!-- favicon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
     <!-- Owlcarosuel CSS -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
     <!-- Main Stylesheet -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
     <!-- Responsive Css -->
     <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
     <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.min.css" rel="stylesheet">
     @stack('styles')
</head>

<body>
     <a href="#" class="scroll"><i class="fa-solid fa-angle-up"></i></a>
     <!-- header start -->

     <div class="headerWarp">
          <div class="topbar-area">
               <div class="container-fluid">
                    <div class="top_bar_cont">
                         {{-- <a id="login_btn" href="#" data-toggle="modal" data-target="#loginModal">Login/Register</a> --}}
                         {{-- <a id="login_btn" href="#" data-toggle="modal" data-target="#registerModal">Login/Register</a> --}}

                         @if (Auth::check())
                            @if(Auth::user()->type == 'user')
                                <a id="login_btn" href="{{ route('user-dashboard') }}" >Dashboard</a> | <a id="login_btn" href="{{ route('logout') }}" >Logout</a>
                            @else
                                <a id="login_btn" href="{{ route('partner-dashboard') }}" >Dashboard</a> | <a id="login_btn" href="{{ route('logout') }}" >Logout</a>
                            @endif
                         @else
                                <a id="login_btn" href="{{ route('login') }}" >Login</a> | <a id="login_btn" href="{{ route('register') }}">Register</a>
                         @endif

                        </div>
               </div>
          </div>
          <div class="container-fluid">
               <header class="header">
                    <div class="header-main">
                         <div class="logo">
                              <a href="{{ url('/') }}" class="logomain">
                                   <img src="{{ asset('images/interify.jpeg') }}" alt="" class="logo_img">
                              </a>
                         </div>
                         <div class="open-nav-menu">
                              <span></span>
                         </div>
                         <div class="menu-overlay">
                         </div>
                         <!-- navigation menu start -->
                         <nav class="nav-menu">
                              <div class="close-nav-menu">
                                   <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="512" height="512" x="0" y="0" viewBox="0 0 329.26933 329"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                             <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"
                                                  fill="#000000" data-original="#000000" class=""></path>
                                        </g>
                                   </svg>
                              </div>
                              <ul class="menu">
                                   <li class="menu-item">
                                        <a href="{{ url('/') }}">Home</a>
                                   </li>
                                   <li class="menu-item menu-item-has-children">
                                        <a href="#" data-toggle="sub-menu">Our Services <i class="plus"></i></a>
                                        <ul class="sub-menu">

                                             <li class="menu-item">
                                                  <a href="{{ route('interior-decoration') }}">interior decoration</a>
                                             </li>
                                             <li class="menu-item">
                                                  <a href="{{ route('design-plan-architecture') }}">Design, Plan & Architecture</a>
                                             </li>
                                             <li class="menu-item">
                                                  <a href="{{ route('electrical-lighting') }}">Electrical and Lighting work</a>
                                             </li>
                                             <li class="menu-item">
                                                  <a href="{{ route('plumbing') }}">Plumbing Work</a>
                                             </li>
                                             <li class="menu-item">
                                                  <a href="{{ route('structural') }}">Structural</a>
                                             </li>
                                             <li class="menu-item">
                                                  <a href="{{ route('flooring') }}">Flooring Work</a>
                                             </li>
                                              <li class="menu-item">
                                                  <a href="{{ route('carpentry-masonry') }}">Carpentry & Masonry</a>
                                             </li>
                                             <li class="menu-item">
                                                  <a href="{{ route('painting') }}">Painting Work</a>
                                             </li>
                                        </ul>
                                   </li>
                                   <li class="menu-item">
                                        <a href="{{ route('partnerwithus') }}">Partner with us</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="{{ route('about-us') }}">About Us</a>
                                   </li>
                                   <li class="menu-item">
                                        <a href="{{ route('blogs') }}">Blogs</a>
                                    </li>
                                   <li class="menu-item">
                                        <a href="{{ route('contact-us') }}">Contact Us</a>
                                   </li>
                              </ul>
                         </nav>
                         <!-- navigation menu end -->
                    </div>
               </header>
          </div>
     </div>

     <!-- header end -->
