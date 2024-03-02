@extends('Layouts.Main')

@section('container')


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('imageproducts.update', $Image->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')



                            <div class="form-group">
                                <label class="font-weight-bold">Product</label>
                                <label class="font-weight-bold">{{ $Image->product_name}}</label>

                            </div>

                            <div class="form-group">

                                <td> <img src="{{ asset('/storage/Images/'.$Image->image) }}" class="rounded" style="width: 150px"></td>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="floatingInput" name="image" required>


                                                   <!-- error message untuk title -->
                                                   @error('image')
                                                       <div class="alert alert-danger mt-2">
                                                           {{ $message }}
                                                       </div>
                                                   @enderror
                            </div>







                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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
