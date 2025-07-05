@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Product List</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($products)>0)
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>{{ $product->description }}</td>
                                </tr>
                            @endforeach
                        @else
                                <tr>
                                    <td colspan="7" class="text-center">No Data Founds!</td>
                                </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
