<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @section('title', __('lang.services_title'))

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{ __('lang.services') }}</h1>
                <a href="" class="h5 text-white">{{ __('lang.home') }}</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">{{ __('lang.services') }}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __('lang.our_services') }}</h5>
                <h1 class="mb-0">{{ __('lang.custom_solutions') }}</h1>
            </div>
            <div class="row g-5">

                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="service-icon">
                                {!! $service->icon !!}
                            </div>
                            <h4 class="mb-3">{{ app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service }}</h4>
                            <p class="m-0">{{ app()->getLocale() == 'ar' ? $service->ar_small_desc : $service->en_small_desc }}</p>
                            <a class="btn btn-lg btn-primary rounded" href="{{ route('service_component', ['name' => app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service]) }}">
                                {{ __('lang.service_button') }}
                                <i class="bi bi-arrow-right"></i>
                            </a>                            
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
