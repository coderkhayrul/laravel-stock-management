@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <span class="text-muted text-uppercase fs-12 fw-bold">Today Revenue</span>
                            <h3 class="mb-0">$2100</h3>
                        </div>
                        <div class="align-self-center flex-shrink-0">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                            <span class="text-success fw-bold fs-13">
                                <i class='uil uil-arrow-up'></i> 10.21%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <span class="text-muted text-uppercase fs-12 fw-bold">Product Sold</span>
                            <h3 class="mb-0">558</h3>
                        </div>
                        <div class="align-self-center flex-shrink-0">
                            <div id="today-product-sold-chart" class="apex-charts"></div>
                            <span class="text-danger fw-bold fs-13">
                                <i class='uil uil-arrow-down'></i> 5.05%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <span class="text-muted text-uppercase fs-12 fw-bold">New Customers</span>
                            <h3 class="mb-0">65</h3>
                        </div>
                        <div class="align-self-center flex-shrink-0">
                            <div id="today-new-customer-chart" class="apex-charts"></div>
                            <span class="text-success fw-bold fs-13">
                                <i class='uil uil-arrow-up'></i> 25.16%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <span class="text-muted text-uppercase fs-12 fw-bold">NewVisitors</span>
                            <h3 class="mb-0">958</h3>
                        </div>
                        <div class="align-self-center flex-shrink-0">
                            <div id="today-new-visitors-chart" class="apex-charts"></div>
                            <span class="text-danger fw-bold fs-13">
                                <i class='uil uil-arrow-down'></i> 5.05%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
