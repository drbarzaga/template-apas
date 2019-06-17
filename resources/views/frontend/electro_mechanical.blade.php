@extends('frontend.layout.base')

@section('title', 'Electro Mechanical')

@section('content')
    <div class="g-bg-secondary g-py-100 g-pt-170">
        <div class="container">
            <!-- Heading -->
            <div class="text-uppercase g-mb-45 text-left">
                <h3 class="u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10">Electro Mechanical</h3>
            </div>
            <!-- End Heading -->

            <!-- Divider -->
            <div class="u-divider u-divider-solid u-divider-center g-brd-gray-dark-v2 mx-auto g-mb-40" style="border-color: #50505026 !important">
                <i class="icon-wrench u-divider__icon g-bg-gray-dark-v2 g-color-white rounded-circle" style="z-index: 1 !important;background-color: #333333 !important;"></i>
            </div>
            <!-- End -->

            <!-- CONTENT -->
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/mro/electromechanical.jpg') }}" alt="Electro Mechanical" style="max-width: 270px;" title="Electro Mechanical">
                </div>
                <div class="col-md-9">
                    <p></p>
                </div>
            </div>
            <!-- END -->
        </div>
    </div>
@endsection
