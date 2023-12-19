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
                                    @foreach ($sale_id as $sale)
                                        <form action="{{ route('sale.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $sale->id }}" name="sale_id">
                                            <input type="hidden" value="{{ $sale->name }}" name="sale_name">
                                            <input type="hidden" value="{{ $sale->price }}" name="sale_price">

                                            <h2>How many product do you want to buy</h2>
                                            <label for="basiInput" class="form-label">Quantity</label>
                                            <input type="number" class="form-control" name="quantity"
                                                placeholder="quantity">
                                            <button type="submit" class="btn btn-primary">confirm</button>
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
