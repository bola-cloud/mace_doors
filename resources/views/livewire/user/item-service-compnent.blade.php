<div>
<style>
    img.img-fluid {
    width: 100%;
    height: 100%;
    object-fit: cover;
}p {
    font-weight: 300;
    text-align: justify;
}.bg-primary {
    background-color: #06a3da !important;
}
</style>

  <br>
  <br>
  <br>

@section('title', $type ? (app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type) : __('Type Not Found'))
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="mb-5">
                        @if($type)
                            <img class="img-fluid w-100 rounded mb-5" src="{{ asset('user/photos/' . $type->photo) }}" alt="">
                            <h1 class="mb-4">{{ app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type }}</h1>
                            <p>{{ app()->getLocale() == 'ar' ? $type->ar_small_desc : $type->en_small_desc }}</p>
                            <h2 class="mb-4">{{ app()->getLocale() == 'ar' ? $type->ar_desc_1 : $type->en_desc_1 }}</h2>
                            <p>{{ app()->getLocale() == 'ar' ? $type->ar_desc_2 : $type->en_desc_2 }}</p>
                        @else
                            <h1>{{ __('Type Not Found') }}</h1>
                            <p>{{ __('The requested type could not be found.') }}</p>
                        @endif
                    </div>

                    <div class="row">

                        @if($type->name_type=="Smart Home")
                        <livewire:user.items.smart-home-component />
                        @endif
                        @foreach ($types as $type)
                        <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                            <a href="{{ route('type_service_component', [
                                'name' => app()->getLocale() == 'ar' ? $type->service->ar_name_service : $type->service->en_name_service,
                                'name_type' => app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type
                            ]) }}" class="card-link">
                                <div class="blog-item bg-light rounded overflow-hidden" style="height: 450px; width: 100%;">
                                    <div class="blog-img position-relative overflow-hidden" style="height: 300px;">
                                        <img class="img-fluid" src="{{ asset('user/photos/' . $type->photo) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                        <div class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                                            <h5>{{ app()->getLocale() == 'ar' ? $type->ar_name_type : $type->en_name_type }}</h5>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <p>{{ app()->getLocale() == 'ar' ? $type->ar_desc_3 : $type->en_desc_3 }}</p>
                                        <span class="text-uppercase">{{ __('Read More') }} <i class="bi bi-arrow-right"></i></span>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <!-- Check if the current iteration number is divisible by 3 -->
                        @if ($loop->iteration % 3 == 0)
                            <div class="w-100"><br></div> <!-- Bootstrap 4+ responsive utility class for full width -->
                        @endif
                    @endforeach

                    </div>


                </div>

                <div class="col-lg-4">

                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach ($services as $service )
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{ route('service_component', [
                                    'name' => app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service
                                ]) }}">
                                    <i class="bi bi-arrow-right me-2"></i>
                                    {{ app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service }}
                                </a>
                            @endforeach


                        </div>
                    </div>


                    {{-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">APPS</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                            <a href="" class="btn btn-light m-1">IOS APPS</a>
                            <a href="" class="btn btn-light m-1">ANDRIOD APPS</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">E-COMMERCE WEBSITE</a>
                            <a href="" class="btn btn-light m-1">SMART HOME</a>
                            <a href="" class="btn btn-light m-1">Website</a>
                        </div>
                    </div> --}}


                </div>
                <div class="col-lg-12">

                    <livewire:user.items.seo-pargraph />
                </div>


            </div>
        </div>
    </div>

</div>
