@extends('frontend.layout.base')

@section('title', 'Certifications')

@section('content')
    <div class="g-bg-secondary g-py-100 g-pt-170">
        <div class="container">
            <!-- Heading -->
            <div class="text-uppercase g-mb-45 text-left">
                <h3 class="u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10">Certificates</h3>
            </div>
            <!-- End Heading -->

            <!-- Divider -->
            <div class="u-divider u-divider-solid u-divider-center g-brd-gray-dark-v2 mx-auto g-mb-40" style="border-color: #50505026 !important">
                <i class="icon-badge u-divider__icon g-bg-gray-dark-v2 g-color-white rounded-circle" style="z-index: 1 !important;background-color: #333333 !important;"></i>
            </div>
            <!-- End -->

            <div class="row g-mx-minus-25 g-mb-50">
                <div class="col-lg-6 g-px-25 g-mb-50">
                    <!-- Blog Grid Modern Blocks -->
                    <article class="row align-items-stretch no-gutters u-shadow-v29 g-transition-0_3">
                        <div class="col-sm-6 g-bg-white g-rounded-left-5">
                            <div class="g-pa-35">
                                <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" target="_blank" href="{{ asset('assets/certificates/easa.pdf') }}">EASA</a>
                                </h2>
                                <ul class="list-inline g-font-size-12 mb-0 text-center">
                                    <li class="list-inline-item g-mb-10">
                                        <a class="u-tags-v1 g-color-blue g-bg-blue-opacity-0_1 g-bg-blue--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" target="_blank" href="{{ asset('assets/certificates/easa.pdf') }}">
                                            <i class="icon-cloud-download"></i>
                                            Download
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 g-bg-size-cover g-bg-pos-center g-min-height-300 g-rounded-right-5" data-bg-img-src="{{ asset('assets/img/certificates/easa.png') }}" style="background-image: url({{ asset('assets/img/certificates/easa.png') }});"></div>
                    </article>
                    <!-- End Blog Grid Modern Blocks -->
                </div>

                <div class="col-lg-6 g-px-25 g-mb-50">
                    <!-- Blog Grid Modern Blocks -->
                    <article class="row align-items-stretch no-gutters u-shadow-v29 g-transition-0_3">
                        <div class="col-sm-6 g-bg-white g-rounded-left-5">
                            <div class="g-pa-35">

                                <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="{{ asset('assets//certificates//ops.pdf') }}" target="_blank">Operations Specifications</a>
                                </h2>

                                <ul class="list-inline g-font-size-12 mb-0 text-center">
                                    <li class="list-inline-item g-mb-10">
                                        <a class="u-tags-v1 g-color-blue g-bg-blue-opacity-0_1 g-bg-blue--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="{{ asset('assets//certificates//ops.pdf') }}" target="_blank">
                                            <i class="icon-cloud-download"></i>
                                            Download
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 g-bg-size-cover g-bg-pos-center g-min-height-300 g-rounded-right-5" data-bg-img-src="{{ asset('assets/img/certificates/ops.png') }}" style="background-image: url({{ asset('assets/img/certificates/ops.png') }});"></div>
                    </article>
                    <!-- End Blog Grid Modern Blocks -->
                </div>

                <div class="w-100"></div>

                <div class="col-lg-6 g-px-25 g-mb-50">
                    <!-- Blog Grid Modern Blocks -->
                    <article class="row align-items-stretch no-gutters u-shadow-v29 g-transition-0_3">
                        <div class="col-sm-6 g-bg-white g-rounded-left-5">
                            <div class="g-pa-35">

                                <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="{{ asset('assets/certificates/TAC.pdf') }}" target="_blank">TAC-2000</a>
                                </h2>
                                <ul class="list-inline g-font-size-12 mb-0 text-center">
                                    <li class="list-inline-item g-mb-10">
                                        <a class="u-tags-v1 g-color-blue g-bg-blue-opacity-0_1 g-bg-blue--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="{{ asset('assets/certificates/TAC.pdf') }}" target="_blank">
                                            <i class="icon-cloud-download"></i>
                                            Download
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 g-bg-size-cover g-bg-pos-center g-min-height-300 g-rounded-right-5" data-bg-img-src="{{ asset('assets/img/certificates/tac-2000.png') }}" style="background-image: url({{ asset('assets/img/certificates/tac-2000.png') }});"></div>
                    </article>
                    <!-- End Blog Grid Modern Blocks -->
                </div>

                <div class="col-lg-6 g-px-25 g-mb-50">
                    <!-- Blog Grid Modern Blocks -->
                    <article class="row align-items-stretch no-gutters u-shadow-v29 g-transition-0_3">
                        <div class="col-sm-6 g-bg-white g-rounded-left-5">
                            <div class="g-pa-35">
                                <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="{{ asset('assets/certificates/apas.pdf') }}" target="_blank">APAS FAA</a>
                                </h2>

                                <ul class="list-inline g-font-size-12 mb-0 text-center">
                                    <li class="list-inline-item g-mb-10">
                                        <a class="u-tags-v1 g-color-blue g-bg-blue-opacity-0_1 g-bg-blue--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="{{ asset('assets/certificates/apas.pdf') }}" target="_blank">
                                            <i class="icon-cloud-download"></i>
                                            Download
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 g-bg-size-cover g-bg-pos-center g-min-height-300 g-rounded-right-5" data-bg-img-src="{{ asset('assets/img/certificates/aac.png') }}" style="background-image: url({{ asset('assets/img/certificates/aac.png') }});"></div>
                    </article>
                    <!-- End Blog Grid Modern Blocks -->
                </div>

                <div class="w-100"></div>

                <div class="col-lg-6 g-px-25 g-mb-50">
                    <!-- Blog Grid Modern Blocks -->
                    <article class="row align-items-stretch no-gutters u-shadow-v29 g-transition-0_3">
                        <div class="col-sm-6 g-bg-white g-rounded-left-5">
                            <div class="g-pa-35">
                                <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="{{ asset('assets/certificates/A449.pdf') }}" target="_blank">A449 Customer Letter</a>
                                </h2>
                                <ul class="list-inline g-font-size-12 mb-0 text-center">
                                    <li class="list-inline-item g-mb-10">
                                        <a class="u-tags-v1 g-color-blue g-bg-blue-opacity-0_1 g-bg-blue--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="{{ asset('assets/certificates/A449.pdf') }}" target="_blank">
                                            <i class="icon-cloud-download"></i>
                                            Download
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 g-bg-size-cover g-bg-pos-center g-min-height-300 g-rounded-right-5" data-bg-img-src="{{ asset('assets/img/certificates/A449.png') }}" style="background-image: url({{ asset('assets/img/certificates/A449.png') }});"></div>
                    </article>
                    <!-- End Blog Grid Modern Blocks -->
                </div>

                <div class="col-lg-6 g-px-25 g-mb-50">
                    <!-- Blog Grid Modern Blocks -->
                    <article class="row align-items-stretch no-gutters u-shadow-v29 g-transition-0_3">
                        <div class="col-sm-6 g-bg-white g-rounded-left-5">
                            <div class="g-pa-35">
                                <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="{{ asset('assets/certificates/APAS-2019.pdf') }}" target="_blank">2019 Florida Annual Resale Certificate for Sales Tax
                                    </a>
                                </h2>
                                <ul class="list-inline g-font-size-12 mb-0 text-center">
                                    <li class="list-inline-item g-mb-10">
                                        <a class="u-tags-v1 g-color-blue g-bg-blue-opacity-0_1 g-bg-blue--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="{{ asset('assets/certificates/APAS-2019.pdf') }}" target="_blank">
                                            <i class="icon-cloud-download"></i>
                                            Download
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 g-bg-size-cover g-bg-pos-center g-min-height-300 g-rounded-right-5" data-bg-img-src="{{ asset('assets/img/certificates/APAS-2019.png') }}" style="background-image: url({{ asset('assets/img/certificates/APAS-2019.png') }});"></div>
                    </article>
                    <!-- End Blog Grid Modern Blocks -->
                </div>
            </div>
        </div>
    </div>
@endsection
