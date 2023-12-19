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
                                    <h3>Show product</h3>
                                    @if (session('buybuy'))
                                        <div class="alert alert-success">
                                            {{ session('buy') }}
                                        </div>
                                    @endif
                                    <table class="table table-striped">
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>price</th>
                                            <th>qty</th>
                                            <th>action</th>
                                        </tr>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->qty }}</td>
                                                <td>
                                                    <a href="{{ route('update', $product->id) }}" type="submit"
                                                        class="btn btn-primary">update</a>
                                                    <a href="{{ route('sale', $product->id) }}" type="submit"
                                                        class="btn btn-info">sale</a>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
