@extends('layout.app')
@section('content')
    <div style="margin-top: 110px;" class="container-fluid">



        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                                        <h5 class="mb-0 pb-1 text-decoration-underline  text-primary">Today History</h5>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                                        @foreach ($today as $todayes)
                                            <div class="col">
                                                <div class="card card-body">
                                                    <div class="d-flex mb-4 align-items-center">

                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">Today History</h5>

                                                        </div>
                                                    </div>
                                                    <h5>Name::{{ $todayes->name }} </h5>
                                                    <h6 class="mb-1">Price:: {{ $todayes->price }} </h6>
                                                    <p class="card-text text-muted">Quantity:: {{ $todayes->qty }}</p>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                                        <h5 class="mb-0 pb-1 text-decoration-underline text-danger">Yesterday History</h5>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                                        @foreach ($yesterday as $yesterdays)
                                            <div class="col">
                                                <div class="card card-body">
                                                    <div class="d-flex mb-4 align-items-center">

                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">Yesterday History</h5>

                                                        </div>
                                                    </div>
                                                    <h5>Name::{{ $yesterdays->name }} </h5>
                                                    <h6 class="mb-1">Price:: {{ $yesterdays->price }} </h6>
                                                    <p class="card-text text-muted">Quantity:: {{ $yesterdays->qty }}</p>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                                        <h5 class="mb-0 pb-1 text-decoration-underline text-info">This Month History</h5>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                                        @foreach ($thismonth as $thismonts)
                                            <div class="col">
                                                <div class="card card-body">
                                                    <div class="d-flex mb-4 align-items-center">

                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">This Month History</h5>

                                                        </div>
                                                    </div>
                                                    <h5>Name::{{ $thismonts->name }} </h5>
                                                    <h6 class="mb-1">Price:: {{ $thismonts->price }} </h6>
                                                    <p class="card-text text-muted">Quantity:: {{ $thismonts->qty }}</p>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                                        <h5 class="mb-0 pb-1 text-decoration-underline text-success">Last Month History</h5>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                                        @foreach ($lastmonth as $lastmonths)
                                            <div class="col">
                                                <div class="card card-body">
                                                    <div class="d-flex mb-4 align-items-center">

                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">Last Month History</h5>

                                                        </div>
                                                    </div>
                                                    <h5>Name::{{ $lastmonths->name }} </h5>
                                                    <h6 class="mb-1">Price:: {{ $lastmonths->price }} </h6>
                                                    <p class="card-text text-muted">Quantity:: {{ $lastmonths->qty }}</p>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
