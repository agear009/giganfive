@extends('Layouts.Main')

@section('container')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('imageproducts.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf


                            <div class="form-group">
                                <label class="font-weight-bold">Product</label>
                                <select type="text" class="form-control @error('Product') is-invalid @enderror" name="id_Product" placeholder="Insert Product">
                                @forelse($Products as $Product)
                                <option name="id_Product" value="{{ $Product->id }}">{{ $Product->name }}</option>


                                @empty
                                <div class="alert alert-danger">
                                   Empty Data.
                                </div>
                                @endforelse
                            </select>
                                <!-- error message untuk title -->
                                @error('id_Product')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="floatingInput" name="image" required>
                                 <label for="floatingInput">Image Product</label>

                                                    <!-- error message untuk title -->
                                                    @error('image')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                               </div>



                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
