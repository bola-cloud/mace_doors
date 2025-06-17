<div>
    <style>
        h5 {
            color: #06a3d8;
        }
        .bg-primary {
            background-color: #06a3d8 !important;
        }
    </style>

    @section('title', __('lang.title_quote'))

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{ __('lang.free_quote') }}</h1>
                <a href="" class="h5 text-white">{{ __('lang.home') }}</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">{{ __('lang.free_quote') }}</a>
            </div>
        </div>
    </div>

    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{ __('lang.want_to_discuss') }}</h5>
                        <h1 class="mb-0">{{ __('lang.need_free_quote') }}</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>{{ __('lang.reply_24_hours') }}</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>{{ __('lang.phone_support') }}</h5>
                        </div>
                    </div>
                    <p class="mb-4">{{ __('lang.get_in_touch') }}</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('lang.call_to_ask') }}</h5>
                            <h4 class="text-primary mb-0">{{ __('lang.call_us') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form wire:submit.prevent="add_quote">
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
                                            <option value="{{ $service->en_name_service }}">{{ app()->getLocale() == 'ar' ? $service->ar_name_service : $service->ar_name_service  }}</option>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <livewire:user.items.horizontalslider-component />
    <div class="container">
        <livewire:user.items.seo-pargraph />
    </div>
</div>
