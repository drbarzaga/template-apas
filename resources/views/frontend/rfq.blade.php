@extends('frontend.layout.base')

@section('title', 'RFQ')

@section('content')
    <div class="g-bg-secondary g-py-100 g-pt-170">
        <div class="container">
            <!-- Heading -->
            <div class="text-uppercase g-mb-45 text-left">
                <h3 class="u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10">RFQ</h3>
            </div>
            <!-- End Heading -->

            <!-- Divider -->
            <div class="u-divider u-divider-solid u-divider-center g-brd-gray-dark-v2 mx-auto g-mb-40" style="border-color: #50505026 !important">
                <i class="icon-diamond u-divider__icon g-bg-gray-dark-v2 g-color-white rounded-circle" style="z-index: 1 !important;background-color: #333333 !important;"></i>
            </div>
            <!-- End -->

            <div class="row">
                <div class="col-md-6">
                    <p>
                        NEED A QUOTE? Complete the following form and one of our sales representatives will get back to you shortlhy. Please make sure to add P/N, S/N, and QTY needed.
                    </p>
                </div>
                <div class="col-md-6">
                    <section id="contact" class="u-bg-overlay g-bg-img-hero g-bg-secondary-opacity-0_85--after">
                        <div class="container text-center u-bg-overlay__inner g-max-width-770">
                            <div class="g-brd-primary g-mb-20">
                                <h3 class="text-uppercase u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-26 mb-0">Need a Quote?</h3>
                            </div>
                            @if(session()->has('mail_send'))
                                <span>{{ session()->get('mail_send') }}</span>
                            @endif
                            @if(session()->has('error'))
                                <span class="text-danger">{{ session()->get('error') }}</span>
                            @endif
                            <form method="post" action="{{ route('need_quote') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-group g-mb-30">
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

                                    <div class="col-md-12 form-group g-mb-30">
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
                                        <textarea name="message" id="inputGroup1_4" class="form-control g-resize-none g-font-size-14 g-placeholder-inherit g-rounded-4 g-px-10 g-py-13 g-transition-0_2 g-transition--ease-in" rows="6" placeholder="Message"></textarea>
                                        @if($errors->has('message'))
                                            <div class="text-left">
                                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn u-btn-blue btn-md btn-block text-uppercase g-font-weight-700 g-font-size-12 g-rounded-4 g-py-12 g-py-15--md g-px-20 g-px-40--md" type="submit" role="button">Send</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
