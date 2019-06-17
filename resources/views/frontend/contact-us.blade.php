@extends('frontend.layout.base')

@section('title', 'Contact Us')

@push('custom_styles')
    <link rel="stylesheet" href="{{ asset('global/css/jquery-jvectormap.css') }}">
@endpush
@section('content')
    <section style="padding-right: 5%; padding-left: 5%">
        <div>
            <div class="row">
                <div class="col-md-7">
                    <!-- Map -->
                    <div class="g-pos-rel" style="padding-top: 8rem;">
                        <div id="map" style="width: 100%; height: 500px"></div>
                    </div>
                    <!-- End -->
                </div>
                <div class="col-md-5">
                    <!-- Contact Info -->
                    <div class="text-center g-theme-bg-blue-dark-v1 g-py-80 g-mt-18" style="padding-bottom: 0 !important;">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 g-px-15 g-py-30 g-py-0--md">
                                    <i class="icon-globe d-inline-block g-font-size-15  g-mb-20"></i>
                                    <h3 class="text-uppercase g-font-size-default  g-letter-spacing-1 g-mb-5">Address</h3>
                                    <strong class="g-font-size-default">6270 NW 37 Ave. Miami, FL, USA</strong>
                                </div>

                                <div class="col-sm-6 col-md-4 g-brd-top g-brd-top-none g-brd-left--md g-brd-black-opacity-0_4 g-px-15 g-py-30 g-py-0--md">
                                    <i class="icon-call-in d-inline-block g-font-size-15  g-mb-20"></i>
                                    <h3 class="text-uppercase g-font-size-default  g-letter-spacing-1 g-mb-5">Phone number</h3>
                                    <strong class="g-font-size-default">(786) 310 0880</strong>
                                </div>

                                <div class="col-sm-6 col-md-4 g-brd-top g-brd-top-none g-brd-left--md g-brd-black-opacity-0_4 g-px-15 g-py-30 g-py-0--md">
                                    <i class="icon-envelope d-inline-block g-font-size-15  g-mb-20"></i>
                                    <h3 class="text-uppercase g-font-size-default  g-letter-spacing-1 g-mb-5">Email</h3>
                                    <a class="g-font-size-default" href="mailto:info@unify.com"><strong>info@apas1.com</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Contact Form -->
                    <section id="contact" class="u-bg-overlay g-bg-img-hero g-bg-secondary-opacity-0_85--after g-py-100">
                        <div class="container text-center u-bg-overlay__inner g-max-width-770">
                            <div class="g-brd-primary g-mb-20">
                                <h3 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-26 mb-0" style="font-weight:lighter !important;">Send Message</h3>
                            </div>
                            @if(session()->has('mail_send'))
                                <span>{{ session()->get('mail_send') }}</span>
                            @endif
                            @if(session()->has('error'))
                                <span class="text-danger">{{ session()->get('error') }}</span>
                            @endif
                            <form method="post" action="{{ route('contact_message') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group g-mb-30">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5 g-bg-white"><i class="icon-communication-128 u-line-icon-pro"></i></span>
                                            </div>
                                            <input name="name" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="text" placeholder="Name">
                                        </div>
                                        @if($errors->has('name'))
                                            <div class="text-left">
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-6 form-group g-mb-30">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5 g-bg-white"><i class="icon-hotel-restaurant-124 u-line-icon-pro u-line-icon-pro"></i></span>
                                            </div>
                                            <input name="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="email" placeholder="Email">
                                        </div>
                                        @if($errors->has('email'))
                                            <div class="text-left">
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12 form-group g-mb-30">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5 g-bg-white"><i class="icon-communication-128 u-line-icon-pro"></i></span>
                                            </div>
                                            <input name="subject" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="text" placeholder="Subject">
                                        </div>
                                        @if($errors->has('subject'))
                                            <div class="text-left">
                                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12 form-group g-mb-30">
                                        <textarea name="message" id="inputGroup1_4" class="form-control g-resize-none g-font-size-14 g-placeholder-inherit g-rounded-4 g-px-10 g-py-13 g-transition-0_2 g-transition--ease-in" rows="6" placeholder="Message"></textarea>
                                        @if($errors->has('message))
                                            <div class="text-left">
                                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn u-btn-blue btn-md btn-block text-uppercase g-font-weight-700 g-font-size-12 g-rounded-4 g-py-12 g-py-15--md g-px-20 g-px-40--md" type="submit" role="button">Send message</button>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- End -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('custom_scripts')
    <script src="{{ asset('global/js/jquery-jvectormap.js') }}"></script>
    <script src="{{ asset('global/js/jvectormap.js') }}"></script>
    <script src="{{ asset('global/js/abstract-element.js') }}"></script>
    <script src="{{ asset('global/js/abstract-canvas-element.js') }}"></script>
    <script src="{{ asset('global/js/abstract-shape-element.js') }}"></script>
    <script src="{{ asset('global/js/svg-element.js') }}"></script>
    <script src="{{ asset('global/js/svg-group-element.js') }}"></script>
    <script src="{{ asset('global/js/svg-canvas-element.js') }}"></script>
    <script src="{{ asset('global/js/svg-shape-element.js') }}"></script>
    <script src="{{ asset('global/js/svg-path-element.js') }}"></script>
    <script src="{{ asset('global/js/svg-circle-element.js') }}"></script>
    <script src="{{ asset('global/js/map-object.js') }}"></script>
    <script src="{{ asset('global/js/region.js') }}"></script>
    <script src="{{ asset('global/js/marker.js') }}"></script>
    <script src="{{ asset('global/js/vector-canvas.js') }}"></script>
    <script src="{{ asset('global/js/data-series.js') }}"></script>
    <script src="{{ asset('global/js/proj.js') }}"></script>
    <script src="{{ asset('global/js/map.js') }}"></script>
    <script src="{{ asset('global/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script>
        $(function(){
            $('#map').vectorMap({
                map: 'world_mill_en',
                panOnDrag: false,
                hoverOpacity: 0.7,
                hoverColor: false,
                zoomButtons : false,
                zoomOnScroll: false,
                regionStyle: {
                    initial: {
                        fill: '#ddd',
                        'stroke': 'none',
                        'stroke-width': 0,
                        'stroke-opacity':0
                    }
                },
                markerStyle: {
                    initial: {
                        fill: '#bd2828',
                        stroke: '#bd2828'
                    }
                },
                backgroundColor: '#ddd',
                markers: [
                    {latLng: [25.91, -80.28], name: 'Miami'},
                ],
                series: {
                    regions: [{
                        normalizeFunction: 'polynomial'
                    }]
                }
            });

        });
    </script>
@endpush
