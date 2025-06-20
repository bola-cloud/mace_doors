<div>
    <style>
        .carousel-caption {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgb(0 0 0 / 59%) !important;
            z-index: 1;
        }
    </style>

    @section('title', __('lang.title_home'))
    <?php  $lang=app()->getLocale(); ?>

    <livewire:user.items.slider-component />

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="{{ __('lang.search_placeholder') }}">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Facts Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h2 class="mb-0">{{ __('lang.best_software_company') }}.</h2>
                <h2 class="fw-bold text-primary text-uppercase mt-5">{{ __('lang.our_services') }}</h2>
            </div>
            <div class="row g-5">
                @foreach ($services->sortByDesc('id') as $service)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <a class="card-link" href="{{ route('service_component', ['name' => $lang == 'ar' ? $service->ar_name_service : $service->en_name_service]) }}">
                            <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                    {!! $service->icon !!}
                                </div>
                                <h4 class="mb-3">{{ $lang == 'ar' ? $service->ar_name_service : $service->en_name_service }}</h4>
                                <p class="m-0">{{ $service->small_desc }}</p>
                                <div class="btn btn-lg btn-primary rounded">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Services Section -->
    @foreach ($services->sortByDesc('id') as $service)
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">{{ $lang == 'ar' ? $service->ar_name_service : $service->en_name_service }}</h5>
                </div>
                <div class="row">
                    @foreach ($service->types->shuffle()->take(3) as $type)
                        <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                            <a href="{{ route('type_service_component', [
                                'name' => $lang == 'ar' ? ($service->ar_name_service ?? $service->en_name_service) : ($service->en_name_service ?? $service->ar_name_service),
                                'name_type' => $lang == 'ar' ? ($type->ar_name_type ?? $type->en_name_type) : ($type->en_name_type ?? $type->ar_name_type)
                            ]) }}">
                                <div class="blog-item bg-light rounded overflow-hidden" style="height: 500px;">
                                    <div class="blog-img position-relative overflow-hidden" style="height: 300px;">
                                        <img class="img-fluid" src="{{ asset('user/photos/' . $type->photo) }}" alt="{{ $lang == 'ar' ? $type->ar_desc_1 : $type->en_desc_1 }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                                            {{ $lang == 'ar' ? $type->ar_name_type : $type->en_name_type }}
                                        </a>
                                    </div>
                                    <div class="p-4 card-height" style="height: 220px;">
                                        <p>{{ $lang == 'ar' ? $type->ar_desc_3 : $type->en_desc_3 }}</p>
                                        <a class="btn btn-lg btn-primary rounded" href="{{ route('type_service_component', ['name' => $lang == 'ar' ? $service->ar_name_service : $service->en_name_service, 'name_type' => $lang == 'ar' ? $type->ar_name_type : $type->en_name_type]) }}">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach

    {{-- <livewire:user.items.smart-home-component /> --}}
    <livewire:user.items.horizontalslider-component />

    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5" style="direction:ltr;">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h2 class="mb-0">{{ __('lang.what_clients_say') }}</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">John Varghese</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        {{ __('lang.client_1_feedback') }}
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Steve Haron</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        {{ __('lang.client_2_feedback') }}
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Nancy George</h4>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        {{ __('lang.client_3_feedback') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Why Choose Us Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __('lang.why_choose_us') }}</h5>
                <h2 class="mb-0">{{ __('lang.grow_business') }}</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>{{ __('lang.best_in_industry') }}</h4>
                            <p class="mb-0">{{ __('lang.best_in_industry_desc') }}</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>{{ __('lang.award_winning') }}</h4>
                            <p class="mb-0">{{ __('lang.award_winning_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('user/img/feature.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>{{ __('lang.professional_staff') }}</h4>
                            <p class="mb-0">{{ __('lang.professional_staff_desc') }}</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>{{ __('lang.support_24_7') }}</h4>
                            <p class="mb-0">{{ __('lang.support_24_7_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:user.items.seo-pargraph />
        </div>
    </div>
    <!-- Why Choose Us End -->

</div>
