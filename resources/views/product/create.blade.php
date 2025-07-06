@extends('layout.layout')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add new product
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('product.form')
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route("product.index") }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>


@endsection
