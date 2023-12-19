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
                                    <h3>Update Product</h3>
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @foreach ($products as $product)
                                        
                                    
                                    <form action="{{ route('update.store') }}" method="POST">
                                        @csrf

                                        <input type="hidden" class="form-control" value="{{ $product->id }}" name="product_id">
                                        <label for="basiInput" class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{ $product->name }}" name="name" placeholder="title">

                                        <label for="basiInput" class="form-label">Price</label>
                                        <input type="number" class="form-control" value="{{ $product->price }}" name="price" placeholder="Price">

                                        <label for="basiInput" class="form-label">Quantity</label>
                                        <input type="number" class="form-control" value="{{ $product->qty }}" name="quantity" placeholder="quantity">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
