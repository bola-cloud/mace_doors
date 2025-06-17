<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mace Doors leads the Middle East in revolving, sliding, and swing doors, gate barriers, and entrance automation. Trusted in Egypt, UAE, and beyond for innovative and reliable access control solutions.">
    <meta name="keywords" content="Mace Doors, Sliding Door,  Swing Door ,  Gate Barrier, Access Control">

    <link rel="canonical" href="{{ canonical() }}">

    <meta property="og:title" content="Mace Doors | Sliding Door | Swing Door | Gate Barrier | Access Control">
    <meta property="og:description" content="Mace Doors leads the Middle East in revolving, sliding, and swing doors, gate barriers, and entrance automation. Trusted in Egypt, UAE, and beyond for innovative and reliable access control solutions.">

    <meta property="og:url" content="{{ canonical() }}">
    <link rel="icon" href="{{asset("user/mace-logo.jpeg")}}">

    <link rel="preconnect" href="https://fonts.googleapis.c!--om">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta name="seobility" content="c601e3a5fcc3483f55277746db17cbf9">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/all.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/a.css') }}" rel="stylesheet">
    @if (isset($schemaData))
        @foreach ($schemaData as $schema)
            <script type="application/ld+json">
                {!! $schema->toScript() !!}
            </script>
        @endforeach
    @endif
    <style>
        /* Ensure dropdown alignment for RTL */
        body[dir="rtl"] .dropdown-menu {
            text-align: right;
            right: auto;
            left: 0;
        }
    </style>
      @if (app()->getLocale() == 'ar')
        <style>
            .dropdown-menu-multi-column {
                right: -700px !important;
                left: auto !important;
            }
        </style>
    @endif

</head>


<body dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <a href="https://api.whatsapp.com/send?phone=++201098984996&text=Hello%20Mace" class="float" target="_blank">

    <i class="fab fa-whatsapp  my-float"></i>
    </a>
    <a  href="tel:+201098984996" class="float call" target="_blank">
        <i class="fa fa-phone-square"></i>
    </a>
    <?php
        $services = App\Models\Service::with('types')->get();
        $lang=app()->getLocale();
    ?>
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0 d-flex">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light "><i class="fa fa-map-marker"></i>
                        <a target="_blank" href="https://www.google.com/maps/place/%D8%A7%D9%84%D9%85%D8%B5%D9%86%D8%B9+%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF+%D9%84%D9%84%D8%A7%D8%A8%D9%88%D8%A7%D8%A8%E2%80%AD/@30.0352163,31.3473346,19.43z/data=!4m6!3m5!1s0x14583f0003e307cf:0x9ea72698b1b99e33!8m2!3d30.0353411!4d31.3463739!16s%2Fg%2F11lf73ycmv?entry=ttu&g_ep=EgoyMDI1MDYxMS4wIKXMDSoASAFQAw%3D%3D">
                         {{ __('lang.office_address') }}
                        </a>
                    </small>
                    <small class="me-3 ms-3 text-light" style="direction: ltr !important;"><i class="fa fa-phone"></i> +20222727352 - +201098984996</small>
                    <small class="text-light"><i class="fa fa-envelope-open "></i> info@macedoors.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center {{$lang == 'ar' ? 'text-lg-start' : 'text-lg-end'}}">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('user_home') }}" class="navbar-brand p-0">
                <h1 class="m-0" style="color: #0100fb"><img class="logo" src="{{ asset('user/mace-logo.jpeg') }}"> Mace Doors</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav {{ app()->getLocale() == 'en' ? 'ms-auto' : 'me-auto' }} py-0">
                    <a href="{{ route('user_home') }}" class="nav-item nav-link {{ Request::is('user_home') ? 'active' : '' }}">@lang('lang.home')</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">@lang('lang.about')</a>

                   <!-- Services Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">@lang('lang.services')</a>

                        <!-- Conditionally applying dropdown alignment based on the locale -->
                        <div class="dropdown-menu m-0 dropdown-menu-multi-column {{ app()->getLocale() == 'ar' ? 'dropdown-menu-start' : 'dropdown-menu-end' }}">
                            <div class="row">
                                @php
                                    $totalServices = $services->count();
                                    $servicesPerColumn = ceil($totalServices / 3);
                                @endphp
                                @foreach ($services->chunk($servicesPerColumn) as $serviceChunk)
                                <div class="col-md-4">
                                    @foreach ($serviceChunk as $service)
                                    <div class="dropdown-section">
                                        <a href="{{ route('service_component', ['name' => $lang== 'ar' ? $service->ar_name_service : $service->en_name_service]) }}">
                                            <strong class="dropdown-header">
                                                {{ app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service }}
                                            </strong>
                                        </a>
                                        @if ($service->types->isNotEmpty())
                                        <ul class="dropdown-list">
                                            @foreach ($service->types as $type)
                                            <li>
                                                <a href="{{ route('type_service_component', [
                                                        'name' => app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service,
                                                        'name_type' => app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type
                                                    ]) }}" class="dropdown-item">
                                                    {{ app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- <a href="{{ route('blog') }}" class="nav-item nav-link">@lang('lang.blog')</a> --}}
                    <a href="{{ route('iotservices') }}" class="nav-item nav-link {{ Request::is('iotservices') ? 'active' : '' }} ">@lang('lang.record_products')</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">@lang('lang.contact')</a>
                    <a href="{{ route('freequote') }}" class="nav-item nav-link {{ Request::is('freequote') ? 'active' : '' }}">@lang('lang.freequote')</a>

                    <!-- Language Switcher -->
                    @if (!request()->routeIs('type_service_component') &&!request()->routeIs('service_component')) <!-- Hide if on type_service_component route -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <div class="dropdown-menu {{ app()->getLocale() == 'ar' ? 'dropdown-menu-start' : 'dropdown-menu-end' }}">
                            {{-- Switch to English --}}
                            <a href="{{ LaravelLocalization::getLocalizedURL('en', request()->url()) }}" class="dropdown-item">EN</a>

                            {{-- Switch to Arabic --}}
                            <a href="{{ LaravelLocalization::getLocalizedURL('ar', request()->url()) }}" class="dropdown-item">AR</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </nav>


        {{$slot}}


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="{{ route('user_home') }}" class="navbar-brand">
                            <h1 class="m-0 text-white">Mace doors</h1>
                            <img class="logo bottom" src="{{ asset('user/mace-logo.jpeg') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">@lang('lang.get_in_touch')</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0"> <a target="_blank" href="https://www.google.com/maps/place/%D8%A7%D9%84%D9%85%D8%B5%D9%86%D8%B9+%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF+%D9%84%D9%84%D8%A7%D8%A8%D9%88%D8%A7%D8%A8%E2%80%AD/@30.0352163,31.3473346,19.43z/data=!4m6!3m5!1s0x14583f0003e307cf:0x9ea72698b1b99e33!8m2!3d30.0353411!4d31.3463739!16s%2Fg%2F11lf73ycmv?entry=ttu&g_ep=EgoyMDI1MDYxMS4wIKXMDSoASAFQAw%3D%3D">
                                    @lang('lang.location')</a>
                                </p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@macedoors.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+20222727352 - <br>+201098984996</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">@lang('lang.quick_links')</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="{{ route('user_home') }}"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('lang.home')</a>
                                <a class="text-light mb-2" href="{{ route('about') }}"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('lang.about')</a>
                                <a class="text-light mb-2" href="{{ route('services') }}"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('lang.services')</a>
                                <a class="text-light mb-2" href="{{ route('iotservices') }}"><i class="bi bi-arrow-right text-primary me-2"></i> @lang('lang.record_products') </a>
                                <a class="text-light" href="{{ route('contact') }}"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('lang.contact')</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">@lang('lang.popular_links')</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                @foreach ($services as $service )
                                <a class="text-light mb-2" href="{{ route('service_component', ['name' => $lang== 'ar' ? $service->ar_name_service : $service->en_name_service]) }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>
                                    {{ app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Mace doors</a>. @lang('lang.copyright').
                        Designed by <a class="text-white border-bottom" href="https://www.portfolio.infinitsmart.com/">Infinit Smart</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('user/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('user/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>
