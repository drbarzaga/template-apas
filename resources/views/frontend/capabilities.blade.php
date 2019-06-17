@extends('frontend.layout.base')

@section('title', 'Hydraulic')

@section('content')
    <div class="g-bg-secondary g-py-100 g-pt-170">
        <div class="container">
            <!-- Heading -->
            <div class="text-uppercase g-mb-45 text-left">
                <h3 class="u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-mb-minus-10">Capabilities</h3>
            </div>
            <!-- End Heading -->

            <!-- Divider -->
            <div class="u-divider u-divider-solid u-divider-center g-brd-gray-dark-v2 mx-auto g-mb-40" style="border-color: #50505026 !important">
                <i class="icon-settings u-divider__icon g-bg-gray-dark-v2 g-color-white rounded-circle" style="z-index: 1 !important;background-color: #333333 !important;"></i>
            </div>
            <!-- End -->

            <!-- CONTENT -->
            <div class="row">
                <div class="col-md-4 text-left">
                    <form action="" class="form form-horizontal">
                        <div class="from-group">
                            <label for="">Search P/N:</label>
                            <input type="text" id="search_criteria" class="form-control" placeholder="Example: 37A226 - 089">
                            <a href="#!" id="btn_search" class="btn btn-success btn-block" style="margin-top: 5px;text-transform: uppercase;"><i class="fa fa-search"></i> Search</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <label for="">Results</label>
                    <div id="results"></div>
                    <div id="not_results" style="display: none">
                        <h3 class="text-danger">We don't have capability for that part number</h3>
                    </div>
                </div>
            </div>
            <!-- END -->
        </div>
    </div>
@endsection

@push('custom_scripts')
    <script>
        $(document).ready(function(){
            $(document).on('keyup', '#search_criteria', function(){
                if($(this).val() != "" && $(this).val() != null)
                    $(this).removeClass('error');
                else{
                    $(this).addClass('error');
                }
            });

            $(document).on('click','#btn_search', function(){
                let searchText = $('#search_criteria').val();
                $('#not_results').hide();
                if(searchText != null && searchText != ""){
                    $.ajax({
                        url: 'search/capabilities',
                        type: 'GET',
                        dataType: 'json',
                        data: {
                            value: searchText
                        }
                    })
                        .success(function(result){
                            let data = JSON.parse(JSON.stringify(result));
                            if(data.length){
                                buildView(data)
                            }else{
                                $('#not_results').show();
                            }
                        }).fail(function(error){
                        $('#not_results').show();
                    });
                }else{
                    $('#search_criteria').addClass('error');
                }
            });

            function buildView(data){
                let columns  = ``;
                for(let i=0; i < data.length; i++){
                    columns += `
                 <div class="col-md-4 match-height">
                    <div style="background-color: #ddd; border-radius: 5px;padding-bottom:10px;margin-bottom: 10px;padding-left: 5px;padding-top: 3px;padding-right: 5px;">
                       <div class="match-height-element">
                         <p style="margin-bottom: 0 !important">
                            <span><strong>P/N:</strong></span> ${data[i].part_number}
                         </p>
                         <p style="margin-bottom: 0 !important">
                            <span><strong>Alternate P/N:</strong></span> ${data[i].alternate_pn != null ? data[i].alternate_pn : '--'}
                         </p>
                         <p style="padding-top: 5px; border-top: 1px solid #fff;margin-bottom: 0 !important">
                           <span><strong>Description:</strong></span> ${data[i].description}
                         </p>
                         <p style="padding-top: 5px;margin-bottom: 0 !important">
                           <span><strong>Manufacturer:</strong></span>${data[i].manufacturer != null  ? data[i].manufacturer : '--' }
                         </p>
                         <p style="padding-top: 5px;margin-bottom: 0 !important">
                           <span><strong>Boeing Spec:</strong></span>${data[i].boeing_spec != null  ? data[i].boeing_spec : '--' }
                         </p>
                         <p style="padding-top: 5px;margin-bottom: 0 !important">
                           <span><strong>ATA:</strong></span> ${data[i].ata != null ? data[i].ata : '--'}
                         </p>
                       </div>
                    </div>
                 </div>
              `;
                }

                let html = `
                <div class="row">
                    ${columns}
                </div>
           `;


                $('#results').html(html);

                $('.macth-height').matchHeight();
                $('.macth-height-element').matchHeight();
            }
        });
    </script>
@endpush
