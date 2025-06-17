<div>
    <style>
        p.mb-4 {
            text-align: justify;
            line-height: 1.9;
        }
        p {
            text-align: justify;
        }
        h2 {
            color: #06a3da;
        }
        h5.mb-3, h5.mb-2 {
            color: black;
        }
        .text-white {
            color: #fff !important;
        }
        /* .section-title::before{
            left:unset !important;
        } */
    </style>

    @section('title', __('lang.about_us_title') . " - Mace Doors")

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{ __('lang.about_us_title') }}</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">{{ __('lang.about_us_title') }}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5 text-center">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('lang.about_us_title') }}</h5>
                        <h1 class="mb-0">{{ __('lang.about_us_subtitle') }}</h1>
                    </div>

                    <!-- Partnership Section -->
                    <section class="contentde mb-5" id="services">
                        <div class="container">
                            <img src="https://www.record.group/Content/images/record_logo.png" alt="" class="mt-3 mb-3">
                            <h2>{{ __('lang.about_us_partnership') }}</h2>
                            <p>{{ __('lang.about_us_partnership_description') }}</p>
                        </div>
                    </section>

                    <!-- Services Section -->
                    <section class="contentde mt-3" id="services">
                        <div class="container">
                            <h2>{{ __('lang.about_us_services_title') }}</h2>

                            <p><strong>{{ __('lang.automatic_doors') }}:</strong> {{ __('lang.automatic_doors_description') }}</p>
                            <p><strong>{{ __('lang.automatic_gates') }}:</strong> {{ __('lang.automatic_gates_description') }}</p>
                            <p><strong>{{ __('lang.rolling_shutters') }}:</strong> {{ __('lang.rolling_shutters_description') }}</p>
                            <p><strong>{{ __('lang.revolving_doors') }}:</strong> {{ __('lang.revolving_doors_description') }}</p>
                            <p><strong>{{ __('lang.security_barriers') }}:</strong> {{ __('lang.security_barriers_description') }}</p>
                            <p><strong>{{ __('lang.access_control') }}:</strong> {{ __('lang.access_control_description') }}</p>
                            <p><strong>{{ __('lang.cctv_systems') }}:</strong> {{ __('lang.cctv_systems_description') }}</p>
                            <p><strong>{{ __('lang.maintenance_services') }}:</strong> {{ __('lang.maintenance_services_description') }}</p>
                        </div>
                    </section>

                    <!-- Process Section -->
                    <section class="contentde" id="process">
                        <div class="container">
                            <h2>{{ __('lang.our_process_title') }}</h2>

                            <p><strong>{{ __('lang.site_visit') }}:</strong> {{ __('lang.site_visit_description') }}</p>
                            <p><strong>{{ __('lang.custom_design') }}:</strong> {{ __('lang.custom_design_description') }}</p>
                            <p><strong>{{ __('lang.professional_installation') }}:</strong> {{ __('lang.professional_installation_description') }}</p>
                            <p><strong>{{ __('lang.testing_commissioning') }}:</strong> {{ __('lang.testing_commissioning_description') }}</p>
                            <p><strong>{{ __('lang.after_sales_support') }}:</strong> {{ __('lang.after_sales_support_description') }}</p>
                        </div>
                    </section>

                    <!-- Contact Section -->
                    <section class="contentde" id="contact">
                        <div class="container">
                            <h2>{{ __('lang.get_in_touch') }}</h2>
                            <p>{{ __('lang.get_in_touch_description') }}</p>
                            <p><strong>{{ __('lang.email_contact') }}</strong> <a href="mailto:info@macedoors.com">info@macedoors.com</a></p>
                        </div>
                    </section>

                    <!-- Other Details -->
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __('lang.award_winning') }}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __('lang.professional_staff') }}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __('lang.support') }}</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{ __('lang.fair_prices') }}</h5>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('lang.call_us') }}</h5>
                            <h4 class="text-primary mb-0"> +20222727352 - +201098984996 </h4>
                        </div>
                    </div>

                    <a href="{{ route('freequote') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">{{ __('lang.request_quote') }}</a>
                </div>

                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('user/img/about.jpg') }}" style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <livewire:user.items.seo-pargraph />
    </div>
    <livewire:user.items.horizontalslider-component />
</div>
