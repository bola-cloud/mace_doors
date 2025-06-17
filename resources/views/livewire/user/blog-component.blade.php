<div>

    @section('title', __('lang.blogs_title'))
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{ __('lang.blogs') }}</h1>
                <a href="" class="h5 text-white">{{ __('lang.home') }}</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">{{ __('lang.blogs') }}</a>
            </div>
        </div>
    </div>
    
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($blogs as $blog)
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{asset('user/photos/'.$blog->photo)}}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small><i class="far fa-calendar-alt text-primary me-2"></i>{{$blog->created_at}}</small>
                                        </div>
                                        <h4 class="mb-3">
                                            {{ app()->getLocale() == 'ar' ? $blog->ar_question : $blog->en_question }}
                                        </h4>
                                        <p class="text-truncate">
                                            {{ app()->getLocale() == 'ar' ? $blog->ar_answer : $blog->en_answer }}
                                        </p>
                                        <a class="text-uppercase" href="{{route("id_blog",['id_blog'=>$blog->id])}}">
                                            {{ __('lang.read_more') }} <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg m-0">
                                    {{ $blogs->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4 text-center">
                            <h3 class="mb-0 text-center">{{ __('lang.categories') }}</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach ($services as $service)
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" 
                                href="{{ route('service_component', [
                                    'name' => app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service
                                ]) }}">
                                    <i class="bi bi-arrow-right me-2"></i>
                                    {{ app()->getLocale() == 'ar' ? $service->ar_name_service : $service->en_name_service }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4 text-center">
                            <h3 class="mb-0 text-center">{{ __('lang.recent_post') }}</h3>
                        </div>
                        @foreach ($blogs_recent as $blog_recent )
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{asset('user/photos/'.$blog_recent->photo)}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="{{route("id_blog",['id_blog'=>$blog_recent->id])}}"class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                               {{$blog_recent->question}}
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{asset('user/img/blog-1.jpg')}}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->

                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp text-center" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4 text-center">
                            <h3 class="mb-0 text-center">{{ __('lang.tag_cloud') }}</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">{{ __('lang.design') }}</a>
                            <a href="" class="btn btn-light m-1">{{ __('lang.development') }}</a>
                            <a href="" class="btn btn-light m-1">{{ __('lang.marketing') }}</a>
                            <a href="" class="btn btn-light m-1">{{ __('lang.seo') }}</a>
                            <a href="" class="btn btn-light m-1">{{ __('lang.writing') }}</a>
                            <a href="" class="btn btn-light m-1">{{ __('lang.consulting') }}</a>
                        </div>
                    </div>
                    <!-- Tags End -->

                </div>
            </div>
        </div>
    </div>
</div>
