<div>
    <style>
         .container-height {
             min-height: 60vh;
             display: flex;
             align-items: center;
             justify-content: center;
             background-color: #e5eaef;
             border-radius: 22px;
         }

         .text-panel {
             background-color: #e5eaef;
             padding: 20px;
         }

         h1 {
             color: #06a3da;
             margin-bottom: 20px;
         }

         p {
             color: #666;
         }
         .container.container-height.t {
             background-color: #e5eaef0f;
         }
         .col-md-6.text-panel.t {
             background-color: #e5eaef0f;
         }

         @media (max-width: 768px) {
             .container-height {
                 flex-direction: column;
             }
         }
    </style>

    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
         <h1 class="mb-0">{{ __('lang.smart_home_system') }}</h1>
     </div>

     <div class="container container-height">
         <div class="col-md-6 d-flex justify-content-center">
             <img src="{{asset('user/smarthome/output-onlinepngtools-18.png')}}" alt="{{ __('lang.lighting_sensor') }}" class="img-fluid">
         </div>
         <div class="col-md-6 text-panel">
             <h1>{{ __('lang.lighting_sensor') }}</h1>
             <p>{{ __('lang.lighting_sensor_paragraph') }}</p>
         </div>
     </div>
     <br>

     <div class="container container-height t">
         <div class="col-md-6 d-flex justify-content-center">
             <img src="{{asset('user/smarthome/output-onlinepngtools-9.png')}}" alt="{{ __('lang.air_conditioning_control') }}" class="img-fluid">
         </div>
         <div class="col-md-6 text-panel t">
             <h1>{{ __('lang.air_conditioning_control') }}</h1>
             <p>{{ __('lang.air_conditioning_control_paragraph') }}</p>
         </div>
     </div>
     <br>

     <div class="container container-height">
         <div class="col-md-6 d-flex justify-content-center">
             <img src="{{asset('user/smarthome/output-onlinepngtools-10-1.png')}}" alt="{{ __('lang.curtain_control') }}" class="img-fluid">
         </div>
         <div class="col-md-6 text-panel">
             <h1>{{ __('lang.curtain_control') }}</h1>
             <p>{{ __('lang.curtain_control_paragraph') }}</p>
         </div>
     </div>
     <br>

     <div class="container container-height t">
         <div class="col-md-6 d-flex justify-content-center">
             <img src="{{asset('user/smarthome/output-onlinepngtools-11.png')}}" alt="{{ __('lang.smart_doors') }}" class="img-fluid">
         </div>
         <div class="col-md-6 text-panel t">
             <h1>{{ __('lang.smart_doors') }}</h1>
             <p>{{ __('lang.smart_doors_paragraph') }}</p>
         </div>
     </div>
     <br>

     <div class="container container-height">
         <div class="col-md-6 d-flex justify-content-center">
             <img src="{{asset('user/smarthome/output-onlinepngtools-12.png')}}" alt="{{ __('lang.garage_gate') }}" class="img-fluid">
         </div>
         <div class="col-md-6 text-panel">
             <h1>{{ __('lang.garage_gate') }}</h1>
             <p>{{ __('lang.garage_gate_paragraph') }}</p>
         </div>
     </div>
     <br>

     <div class="container container-height t">
         <div class="col-md-6 d-flex justify-content-center">
             <img src="{{asset('user/smarthome/output-onlinepngtools-20.png')}}" alt="{{ __('lang.home_cinema') }}" class="img-fluid">
         </div>
         <div class="col-md-6 text-panel t">
             <h1>{{ __('lang.home_cinema') }}</h1>
             <p>{{ __('lang.home_cinema_paragraph') }}</p>
         </div>
     </div>
     <br>

     <div class="container container-height">
         <div class="col-md-6 d-flex justify-content-center">
             <img src="{{asset('user/smarthome/output-onlinepngtools-14.png')}}" alt="{{ __('lang.water_heaters') }}" class="img-fluid">
         </div>
         <div class="col-md-6 text-panel">
             <h1>{{ __('lang.water_heaters') }}</h1>
             <p>{{ __('lang.water_heaters_paragraph') }}</p>
         </div>
     </div>
     <br>

     <div class="container container-height t">
         <div class="col-md-6 d-flex justify-content-center">
             <img src="{{asset('user/smarthome/output-onlinepngtools-19.png')}}" alt="{{ __('lang.motion_sensors') }}" class="img-fluid">
         </div>
         <div class="col-md-6 text-panel t">
             <h1>{{ __('lang.motion_sensors') }}</h1>
             <p>{{ __('lang.motion_sensors_paragraph') }}</p>
         </div>
     </div>
     <br>
 </div>
