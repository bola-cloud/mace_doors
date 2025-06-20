<div>
    <style>
        a.position-absolute.top-0.start-0.bg-primary.text-white.rounded-end.mt-5.py-2.px-4 {
            color: #06a3da !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @section('title', str_replace('-', ' ', $name))

    <br><br><br>

    <div class="container-fluid bg-primary">
        <div class="row py-5">
            <div class="col-lg-6 col-12 pt-lg-12 text-center">
                <h1 class="banner">
                    {{ __('lang.services_by_Mace', ['name' => str_replace('-', ' ', $name)]) }}
                </h1>
                <p class="banner">
                    {{ app()->getLocale() == 'ar' ? $service->ar_desc_1 : $service->en_desc_1 }}
                </p>
            </div>
            <div class="col-lg-6 col-12 pt-lg-12 text-center">
                <img src="{{ asset('user/photos/'. $service->en_desc_3) }}" class="img-fluid" alt="website design company">
            </div>
        </div>
    </div>

    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h2 class="fw-bold text-primary text-uppercase mt-5">
                    {{ __('lang.all_types', ['name' => str_replace('-', ' ', $name)]) }}
                </h2>
            </div>
            <div class="row">
                @foreach ($types as $type)
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                        <a href="{{ route('type_service_component', [
                            'name' => app()->getLocale() == 'ar' ? $type->service->ar_name_service : $type->service->en_name_service,
                            'name_type' => app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type
                        ]) }}">
                            <div class="blog-item bg-light rounded overflow-hidden" style="height: 500px; width: 100%;">
                                <div class="blog-img position-relative overflow-hidden" style="height: 300px;">
                                    <img class="img-fluid" src="{{ asset('user/photos/' . $type->photo) }}" alt="{{ app()->getLocale() == 'ar' ? $type->ar_desc_1 : $type->en_desc_1 }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                                        {{ app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type }}
                                    </a>
                                </div>
                                <div class="p-4" style="height: 220px;">
                                    <p>{{ app()->getLocale() == 'ar' ? $type->ar_desc_3 : $type->en_desc_3 }}</p>
                                    <a class="btn btn-lg btn-primary rounded" href="{{ route('type_service_component', [
                                        'name' => app()->getLocale() == 'ar' ? $type->service->ar_name_service : $type->service->en_name_service,
                                        'name_type' => app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type
                                    ]) }}">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Add a row break every 3 items for better layout on larger screens -->
                    @if ($loop->iteration % 3 == 0)
                        <div class="w-100"><br></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <br>

    <livewire:user.items.choose-component />
    <div class="container">
        <livewire:user.items.seo-pargraph />
    </div>
</div>
