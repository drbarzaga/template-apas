@extends('frontend.layout.base')

@section('title', 'Gallery')

@push('custom_styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css') }}">
@endpush

@section('content')
    <div class="container g-pt-170">
        <!-- Heading -->
        <div class="text-uppercase g-mb-45 text-left">
            <h3 class="u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10">Gallery</h3>
        </div>
        <!-- End Heading -->

        <!-- Divider -->
        <div class="u-divider u-divider-solid u-divider-center g-brd-gray-dark-v2 mx-auto g-mb-40" style="border-color: #50505026 !important">
            <i class="icon-picture u-divider__icon g-bg-gray-dark-v2 g-color-white rounded-circle" style="z-index: 1 !important;background-color: #333333 !important;"></i>
        </div>
        <!-- End -->
    </div>


    <!-- Cube Portfolio Blocks - Content -->
    <div class="container g-mb-50">
        <div class="cbp" data-controls="#filterControls" data-animation="quicksand" data-x-gap="5" data-y-gap="5" data-media-queries='[
               {"width": 1500, "cols": 4},
               {"width": 1100, "cols": 4},
               {"width": 800, "cols": 3},
               {"width": 480, "cols": 2},
               {"width": 300, "cols": 1}
             ]'>

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/2.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/2.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/3.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/3.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/4.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/4.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/5.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/5.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->


            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/6.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/6.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/7.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/7.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->
            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/8.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/8.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->
            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/9.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/9.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/10.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/10.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/11.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/11.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/12.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/12.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/13.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/13.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/14.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/14.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/15.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/15.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/16.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/16.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/17.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/17.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/18.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/18.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img/gallery/19.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--xs g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img/gallery/19.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->
        </div>
    </div>
    <!-- End Cube Portfolio Blocks - Content -->

@endsection


@push('custom_scripts')
    <script src="{{ asset('assets/vendor/appear.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/masonry/dist/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('global/js/components/hs.cubeportfolio.js') }}"></script>
    <script>
        $(window).on('load', function () {
            // initialization of masonry
            $('.masonry-grid').imagesLoaded().then(function () {
                $('.masonry-grid').masonry({
                    columnWidth: '.masonry-grid-sizer',
                    itemSelector: '.masonry-grid-item',
                    percentPosition: true
                });
            });

            // initialization of cubeportfolio
            $.HSCore.components.HSCubeportfolio.init('.cbp');
        });
    </script>
@endpush
