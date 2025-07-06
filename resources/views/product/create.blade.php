@extends('layout.layout')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add new product
            </div>
        </div>
        <form action="" method="POST">
            @include('product.form')
        </form>
    </div>


@endsection
