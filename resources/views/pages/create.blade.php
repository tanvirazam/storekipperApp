@extends('layout.app')
@section('content')
    <div style="margin-top: 110px;" class="container-fluid">



        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-3 col-md-6">
                                    <h3>Add Product</h3>
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('create.store') }}" method="POST">
                                        @csrf
                                        <label for="basiInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="title">

                                        <label for="basiInput" class="form-label">Price</label>
                                        <input type="number" class="form-control" name="price" placeholder="Price">

                                        <label for="basiInput" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" name="quantity" placeholder="quantity">
                                        <button type="submit" class="btn btn-primary">create</button>
                                    </form>
                                </div>
                               

                            </div>
                            <!--end row-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
