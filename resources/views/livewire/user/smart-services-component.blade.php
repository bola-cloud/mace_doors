<div>

    <style>
    body {
        overflow-x: hidden;
    }
    h5.card-title.mx-xl-3.fables-product-title{
        font-size: 1.2rem;
        font-weight: 600;
        color: #06a3da !important;
    }
    </style>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item fixed-size active" style="height: 367px;">
                <img class="d-block w-100 fixed-media" src="https://www.record.group/Content/images/record_logo.png" style="object-fit: scale-down !important;height: 486px;" alt="Responsive image">

                {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1 class="display-1 text-white mb-md-4 typing-animation gradient h1">
                        {{ __('lang.carousel_heading') }}
                    </h1>
                    <p class="sss">
                        {{ __('lang.carousel_subheading') }}
                    </p>
                </div> --}}
            </div>
        </div>
    </div>

    @section('title', __('lang.title'))

    <div class="container">
        <div class="row my-4 my-md-5">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h2 class="fw-bold text-primary text-uppercase mt-5">{{ __('lang.record_products') }}</h2>
            </div>
            <!-- Begin Record Product Cards with Blog Style -->
            @php
                $products = [
                    ["title" => "KIT record STA 20 compact without brake record door operator for sliding doors", "img" => "66600a4dc69b0.jpg", "url" => "KIT%20record%20STA%2020%20compact%20without%20brake%20record%20door%20operator%20for%20sliding%20doors"],
                    ["title" => "KIT record STA 21 compact without brake – record door operator for sliding doors", "img" => "66600ab083061.jpg", "url" => "KIT%20record%20STA%2021%20compact%20without%20brake%20%E2%80%93%20record%20door%20operator%20for%20sliding%20doors"],
                    ["title" => "Set record 20-200 without brake – record door operator for heavy sliding doors", "img" => "66600b114175d.jpg", "url" => "Set%20record%2020-200%20without%20brake%20%E2%80%93%20record%20door%20operator%20for%20heavy%20sliding%20doors"],
                    ["title" => "Set record STA 20 without brake record door operator for medium heavy sliding doors", "img" => "1717571208.jpg", "url" => "Set%20record%20STA%2020%20without%20brake%20record%20door%20operator%20for%20medium%20heavy%20sliding%20doors"],
                    ["title" => "Set record 22  without brake – record door operator for heavy sliding doors", "img" => "66600bda62a80.jpg", "url" => "Set%20record%2022%20%20without%20brake%20%E2%80%93%20record%20door%20operator%20for%20heavy%20sliding%20doors"],
                    ["title" => "record Retrofit Kit – Door operator for replacement and modification", "img" => "66600c3e7da1b.jpg", "url" => "record%20Retrofit%20Kit%20%E2%80%93%20Door%20operator%20for%20replacement%20and%20modification"],
                    ["title" => "record DFA 127 FULL POWER – automatic drive system for swing doors", "img" => "1717571519.jpg", "url" => "record%20DFA%20127%20FULL%20POWER%20%E2%80%93%20automatic%20drive%20system%20for%20swing%20doors"],
                    ["title" => "C 127 X – Underfloor swing door drive", "img" => "66600cd26eb2f.jpg", "url" => "C%20127%20X%20%E2%80%93%20Underfloor%20swing%20door%20drive"],
                    ["title" => "record RAD 290 – radar motion detector", "img" => "66600d1912499.jpg", "url" => "record%20RAD%20290%20%E2%80%93%20radar%20motion%20detector"],
                    ["title" => "record AIR 290 – infrared sensor", "img" => "66600d43c74c4.jpg", "url" => "record%20AIR%20290%20%E2%80%93%20infrared%20sensor"],
                    ["title" => "record AIS 290 – active infrared presence detection sensor", "img" => "66600dbf79443.jpg", "url" => "record%20AIS%20290%20%E2%80%93%20active%20infrared%20presence%20detection%20sensor"],
                    ["title" => "record RC SWING – safety sensor for swing doors", "img" => "6660102688ace.jpg", "url" => "record%20RC%20SWING%20%E2%80%93%20safety%20sensor%20for%20swing%20doors"]
                ];
            @endphp

            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-item bg-light rounded overflow-hidden" style="height: 500px;">
                    <div class="blog-img position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid" src="https://mpts-me.com/storage/services/{{ $product['img'] }}" alt="{{ $product['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                        {{-- <a href="https://mpts-me.com/serviceone/{{ $product['url'] }}" class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                            {{ __('lang.record_products') }} <i class="bi bi-arrow-right"></i>
                        </a> --}}
                        <a href="#" class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">
                            {{ __('lang.record_products') }} <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="p-4" style="height: 220px;">
                        <p>{{ $product['title'] }}</p>
                        {{-- <a class="btn btn-lg btn-primary rounded" href="https://mpts-me.com/serviceone/{{ $product['url'] }}">
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                        <a class="btn btn-lg btn-primary rounded" href="#">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



</div>
