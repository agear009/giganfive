@extends('layouts.MainMembers')

@section('Container')


<!-- ======= Portfolio Section ======= -->
<section id="product" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Product</h2>
      <p>Please select the product you need. You can see the item details in the product store</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          @forelse ($Categoryproducts as $categoryproduct)
          <li data-filter=".filter-{{ $categoryproduct->name }}">{{ $categoryproduct->name }}</li>
          @empty
          <div class="alert alert-danger">
              Category Product Empty.
          </div>
      @endforelse
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">
        @forelse ($Products as $product)
      <div class="col-lg-4 col-md-6 portfolio-item filter-{{$product->category}}">
        <div class="portfolio-wrap">
          <img src="{{ asset('/storage/products/'.$product->image) }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{ $product->name }}</h4>
            <p>{{ $product->category }}</p>

            <form class="portfolio-links" onsubmit="return confirm('Are you sure ?');" action="{{ route('dashboardindexs.store') }}" method="POST">
                @csrf

            <div class="portfolio-links">
              <a href="{{ asset('/storage/products/'.$product->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="View {{ $product->name }}"><i class="bi bi-images"></i></a>
              <a href="{{ route('dashboardindexs.show', $product->id) }}" title="More Details"><i class="bi bi-eye"></i></a>



                <input type="hidden" name="id_product" value="{{ $product->id }}" required>
                <input type="hidden" name="id_category" value="{{ $product->category }}" required>
                <input type="hidden" name="id_member" value="{{ $User->id }}" required>
                <input type="hidden" name="amount" value="{{ $product->stock }}" required>
                <input type="hidden" name="price" value="{{ $product->price }}" required>
                <input type="hidden" name="status" value="List Cart" required>

                <button type="submit" class="btn-sm btn-success" title="add Cart"><i class="bi bi-bag-check"></i></button>

            </div>
        </form>
          </div>
        </div>
      </div>
      @empty
      <div class="alert alert-danger">
          Data product Empty.
      </div>
    @endforelse


    </div>

  </div>
</section><!-- End Portfolio Section -->



<!-- ======= Shopping Cart Section ======= -->
<section id="myorder" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Shopping Cart</h2>
      <p>list your orders</p>
    </div>

    <table class="table" border="0">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Price</th>
            <th scope="col">Menu</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($ShoppingCarts as $shoppingcart)
            <tr>
                <td><img src=" {{ asset('/storage/products/'.$shoppingcart->products_image) }}" width="60" height="45"></td>
                <td>{!! $shoppingcart->id_category !!}</td>
                <td>{!! $shoppingcart->amount !!}</td>
                <td>{!! $shoppingcart->price !!}</td>
                <td class="">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('dashboardindexs.destroy', $shoppingcart->id) }}" method="POST">

                        <a href="{{ route('dashboardindexs.edit', $shoppingcart->id) }}" class="btn btn-sm btn-primary">Order</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
          @empty
              <div class="alert alert-danger">
                You haven't ordered anything yet.
              </div>
          @endforelse
        </tbody>
      </table>

  </div>
</section><!-- End ShoppingCart Section -->

<!-- ======= Transaction Section ======= -->
<section id="transactions" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Transaction</h2>
      <p>list your orders</p>
    </div>

    <table class="table" border="0">
        <thead>
          <tr>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Shipping Cost</th>
            <th scope="col">Total</th>
            <th scope="col">Order</th>
            <th scope="col">Status</th>

            <th scope="col">Menu</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($Transactions as $Transaction)
            <tr>

                <td>{{ $Transaction->id_product }}</td>
                <td>{!! $Transaction->allprice !!}</td>
                <td>{!! $Transaction->shippingcost !!}</td>
                <td>{!! $Transaction->totalcost !!}</td>
                <td>{!! $Transaction->transactionmonth !!}</td>
                <td>{!! $Transaction->status !!}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('shoppingcarts.destroy', $shoppingcart->id) }}" method="POST">
                        <a href="{{ route('shoppingcarts.show', $shoppingcart->id) }}" class="btn btn-sm btn-dark">Show </a>
                        <a href="{{ route('shoppingcarts.edit', $shoppingcart->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
          @empty
              <div class="alert alert-danger">
                You haven't ordered anything yet.
              </div>
          @endforelse
        </tbody>
      </table>

  </div>
</section><!-- End Transaction Section -->


<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Profile</h2>
          <p>Please complete your personal data with the current situation</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Harian Bangga No. 11 RT. 001 / RW. 003 Kel. Ciamis, West Java, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>giganfivecropsuniversal@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62821-2824-8883</p>
              </div>


            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                        <form action="{{ route('visitor.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label for="name">Your Foto</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="photo" required>

                            <!-- error message untuk title -->
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">GENDER</label>
                                <select type="text" class="form-control @error('contry') is-invalid @enderror" name="gender" value="{{ old('gender') }}" placeholder="insert gender" required>
                                <option name="gender" value="">-- Select Gender --</option>
                                <option name="gender" value="male">Male</option>
                                <option name="gender" value="female">Female</option>
                                </select>
                                <!-- error message untuk title -->
                                @error('gender')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $User->name }}" placeholder="insert name" required>
                            <!-- error message untuk title -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Your Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $User->email }}"  placeholder="insert email" required>

                            <!-- error message untuk title -->
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>

                            <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Your Phone</label>

                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value=""  placeholder="insert phone" required>

                            <!-- error message untuk phone -->
                            @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror

                            </div>


                            <div class="form-group mt-3">
                                <label for="name">Your Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value=""  placeholder="insert address" required>

                                <!-- error message untuk title -->
                                @error('address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        <div class="form-group mt-3">
                            <label for="name">Your Username</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="username" value=""  placeholder="insert username" required>

                            <!-- error message untuk phone -->
                            @error('username')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Your Password</label>
                            <input type="password" class="form-control @error('phone') is-invalid @enderror" value=""  placeholder="insert password" required>

                            <!-- error message untuk phone -->
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                   <div class="form-group col-md-6 mt-3 mt-md-0">
                    <label for="name">Your country</label>
                    <select type="text" class="form-control @error('contry') is-invalid @enderror" name="country_id" value="{{ old('contry_id') }}" placeholder="insert contry" required>
                        <option name="country_id" value="">-- Select contry --</option>
                        @forelse($Countries as $country)
                        <option name="country_id" value="{{ $country->id }}">{{ $country->country }}</option>
                        @empty
                        <div class="alert alert-danger">
                            Data Post belum Tersedia.
                        </div>
                        @endforelse

                        </select>
                        <!-- error message untuk title -->
                        @error('contry')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>



                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Register</button></div>
                </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->




@endsection
