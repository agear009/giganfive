@extends('Layouts.Main')

@section('container')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('categoryproducts.create') }}" class="btn btn-md btn-success mb-3">Insert Category Products</a>
                        <div class="table-responsive">
                                <table class="table" border="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                    @forelse ($categoryproducts as $categoryproduct)
                                        <tr>

                                            <td>{{ $categoryproduct->name }}</td>

                                            <td class="text-left">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('categoryproducts.destroy', $categoryproduct->id) }}" method="POST">

                                                    <a href="{{ route('categoryproducts.edit', $categoryproduct->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Category Product Empty.
                                        </div>
                                    @endforelse
                                    </tbody>
                                </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>
@endsection
