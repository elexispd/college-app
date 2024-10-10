@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-xl-4 col-md-6">
        <x-card title="Active Students" >
            <div class="widget-chart-1">
                <div class="widget-chart-box-1 float-start" dir="ltr">
                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#127010"
                    data-bgColor="#CDEABD" value="58"
                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                           data-thickness=".15"/>
                </div>

                <div class="widget-detail-1 text-end">
                    <h2 class="fw-normal pt-2 mb-1"> 256 </h2>
                    <p class="text-muted mb-1"></p>
                </div>
            </div>
        </x-card>

    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
        <x-card title="Lecturers" >
            <div class="widget-box-2">
                <div class="widget-chart-box-1 float-start" dir="ltr">
                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#127010"
                           data-bgColor="#CDEABD" value="58"
                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                           data-thickness=".15"/>
                </div>
                <div class="widget-detail-2 text-end">
                    <h2 class="fw-normal mb-1"> 8451 </h2>
                    <p class="text-muted mb-3">Lecturers</p>
                </div>

            </div>
        </x-card>
    </div><!-- end col -->

    <div class="col-xl-4 col-md-6">
        <x-card title="Courses" >
            <div class="widget-box-2">
                <div class="widget-chart-box-1 float-start" dir="ltr">
                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#2B59C5"
                           data-bgColor="#B8C5E5" value="58"
                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                           data-thickness=".15"/>
                </div>
                <div class="widget-detail-2 text-end">
                    <h2 class="fw-normal mb-1"> 8451 </h2>
                    <p class="text-muted mb-3">Courses</p>
                </div>

            </div>
        </x-card>
    </div><!-- end col -->

</div>
<!-- end row -->

<div class="row">

    <div class="col-xl-6">
        <x-card title="Report Statistics" >
            <div class="card-body">
                <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
            </div>
        </x-card>
    </div><!-- end col -->

    <div class="col-xl-6">
        <x-card title="Latest Arrivals" >
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>F/Ap Number</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Adminto Admin v1</td>
                                <td>342342</td>
                                <td>26/04/2017</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adminto Frontend v1</td>
                                <td>49085434</td>
                                <td>26/04/2017</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </x-card>
    </div><!-- end col -->

</div>
<!-- end row -->

@endsection

