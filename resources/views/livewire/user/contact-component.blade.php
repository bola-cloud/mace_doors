<div>
    <style>
        .bg-primary {
            background-color: #06a3da !important;
        }
    </style>

    @section('title', __('lang.contact_us_title'))

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{ __('lang.contact_us') }}</h1>
                <a href="" class="h5 text-white">{{ __('lang.home') }}</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">{{ __('lang.contact') }}</a>
            </div>
        </div>
    </div>

    <!-- Full Screen Search End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">{{ __('lang.contact_us') }}</h5>
                <h1 class="mb-0">{{ __('lang.have_query') }}</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('lang.call_to_ask') }}</h5>
                            <h4 class="text-primary mb-0">{{ __('lang.call_us') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('lang.email_quote') }}</h5>
                            <h4 class="text-primary mb-0">info@macedoors.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            {{-- <h5 class="mb-2">{{ __('lang.visit_us') }}</h5> --}}
                            <h4 class="text-primary mb-0">{{ __('lang.office_address') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form wire:submit="add_quote">
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="{{ __('lang.your_name') }}" style="height: 55px;" wire:model="name">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="{{ __('lang.your_email') }}" style="height: 55px;" wire:model="email">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="{{ __('lang.your_number') }}" style="height: 55px;" wire:model="mobile">
                            </div>
                            <div class="col-12">
                                <select class="form-select bg-light border-0" style="height: 55px;" wire:model="service">
                                    <option selected>{{ __('lang.select_service') }}</option>
                                    @foreach ($services as $service)
                                    <option value="{{ $service->name_service }}">{{ $service->name_service }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3" placeholder="{{ __('lang.message') }}" wire:model="message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">{{ __('lang.request_quote') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
               <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.6706090660766!2d31.344201!3d30.035341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f0003e307cf%3A0x9ea72698b1b99e33!2z2KfZhNi52Kkg2KfZhNmF2LnYqSDYp9mE2KfYt9mC2Kkg2KfZhNiy2YfYp9mK!5e0!3m2!1sen!2seg!4v1718621839000!5m2!1sen!2seg"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <livewire:user.items.horizontalslider-component />
    <div class="container">
        <livewire:user.items.seo-pargraph />
    </div>
</div>
