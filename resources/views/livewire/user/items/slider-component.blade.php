<div>
    <style>
        img.website_img {
            width: 100%;
            opacity: 0.3;
        }img.website_img, video {
            width: 100%;  /* Ensures media files stretch to the width of the container */
            height: auto; /* Keeps the aspect ratio intact */
            opacity: 0.3;
        }

        .fixed-size {
            width: 100%; /* Full width of the container */
            height: 650px; /* Fixed height for all carousel items */
        }

        .fixed-media {
            width: 100%;
            height: 738px;
            object-fit: scale-down;
        }

        .carousel-caption {

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1.display-1.text-white.mb-md-4.animated.zoomIn {
            font-size: 31px;
            font-family: sans-serif;
        }
        .button-container {
            display: flex;
            width: 49%;  /* Take the full width to accommodate both buttons */
            justify-content: center; /* Center the buttons horizontally */
        }

        .carousel-caption a {
            flex: 1;  /* Each button will take equal space */
            text-align: center; /* Center the text inside the buttons */
            margin: 0 5px; /* Add a small margin between the buttons */
        }
        .carousel-caption {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgb(0 0 0 / 59%);
            z-index: 1;
        }.typing-animation {
            position: relative;
            width: max-content;  /* Ensures the container fits the content width */
            white-space: nowrap; /* Keeps the text in a single line */
            overflow: hidden;    /* Hides the letters until they are animated */
            border-right: .15em solid white; /* Simulates the typing cursor */
            animation: typing 3s steps(40, end), blink-caret .75s step-end infinite;
        }
        .fixed-media {
            width: 100%;
            height: 738px;
            object-fit: contain !important;
        }

        /* Typing keyframes */
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        /* Cursor blink keyframes */
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: white }
        }

        @media (max-width: 530px) {
            .button-container {
                flex-direction: column; /* Stack buttons vertically */
            }

            .carousel-caption a {
                width: auto;  /* Allow buttons to fit content width */
                margin: 5px 0; /* Adjust margin for vertical stacking */
            }
        }
        @media (max-width:975px) {

            .fixed-size {
                height: 327px; /* Smaller fixed height for smaller screens */
            }

            .fixed-media {
                height: 327px; /* Ensures media matches the new height in smaller screens */
            }
        }
    </style>
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
            <!-- Slide 1: Sliding Door -->
            <div class="carousel-item fixed-size active">
                <img class="d-block w-100 fixed-media" src="{{ asset('user/slider/sliding-door.jpg') }}" alt="{{ __('lang.sliding_door') }}">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1 class="display-1 text-white mb-md-4 typing-animation">{{ __('lang.sliding_door') }}</h1>
                    <div class="button-container">
                        <a href="{{ route('contact') }}" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft">{{ __('lang.learn_more') }}</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{ __('lang.contact_us') }}</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Swing Door -->
            <div class="carousel-item fixed-size">
                <img class="d-block w-100 fixed-media" src="{{ asset('user/slider/swing-door.webp') }}" alt="{{ __('lang.swing_door') }}">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1 class="display-1 text-white mb-md-4 typing-animation">{{ __('lang.swing_door') }}</h1>
                    <div class="button-container">
                        <a href="{{ route('contact') }}" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft">{{ __('lang.learn_more') }}</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{ __('lang.contact_us') }}</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Gate Barrier -->
            <div class="carousel-item fixed-size">
                <img class="d-block w-100 fixed-media" src="{{ asset('user/slider/gate-barrier.webp') }}" alt="{{ __('lang.gate_barrier') }}">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1 class="display-1 text-white mb-md-4 typing-animation">{{ __('lang.gate_barrier') }}</h1>
                    <div class="button-container">
                        <a href="{{ route('contact') }}" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft">{{ __('lang.learn_more') }}</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{ __('lang.contact_us') }}</a>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Access Control -->
            <div class="carousel-item fixed-size">
                <img class="d-block w-100 fixed-media" src="{{ asset('user/slider/access_control.jpg') }}" alt="{{ __('lang.access_control') }}">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1 class="display-1 text-white mb-md-4 typing-animation">{{ __('lang.access_control') }}</h1>
                    <div class="button-container">
                        <a href="{{ route('contact') }}" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft">{{ __('lang.learn_more') }}</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{ __('lang.contact_us') }}</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</div>
