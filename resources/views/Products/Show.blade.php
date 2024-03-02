@extends('Layouts.Main')

@section('container')
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/products/'.$product->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $product->name }}</h4>
                        <p class="tmt-3">
                            {!! $product->amount!!}
                        </p>
                        <p class="tmt-3">
                            {!! $product->price!!}
                        </p>
                        <p class="tmt-3">
                            {!! $product->category!!}
                        </p>
                        <p class="tmt-3">
                            {!! $product->description!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
