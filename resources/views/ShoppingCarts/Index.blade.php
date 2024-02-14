@extends('layouts.main')
    @section('container')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        {{--  <a href="{{ route('shoppingcarts.create') }}" class="btn btn-md btn-success mb-3">Insert shoppingcart</a>  --}}
                        <div class="table-responsive">
                                <table class="table" border="0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Menu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($ShoppingCarts as $shoppingcart)
                                        <tr>

                                            <td><img src=" {{ asset('/storage/products/'.$shoppingcart->products_image) }}" width="60" height="45"></td>
                                            <td>{!! $shoppingcart->product_name !!}</td>
                                            <td>{!! $shoppingcart->id_category !!}</td>
                                            <td>{!! $shoppingcart->amount !!}</td>
                                            <td>{!! $shoppingcart->price !!}</td>
                                            <td>{!! $shoppingcart->status !!}</td>
                                            <td class="text-left">
                                                <form onsubmit="return confirm('Are you sure ?');" action="{{ route('shoppingcarts.destroy', $shoppingcart->id) }}" method="POST">
                                                    <a href="{{ route('shoppingcarts.show', $shoppingcart->id) }}" class="btn btn-sm btn-dark">Show </a>
                                                    <a href="{{ route('shoppingcarts.edit', $shoppingcart->id) }}" class="btn btn-sm btn-primary">Proses</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data shoppingcart Not Found.
                                        </div>
                                    @endforelse
                                    </tbody>
                                </table>
                        </div>
                          {{--  {{ $shoppingcarts->links() }}  --}}
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
