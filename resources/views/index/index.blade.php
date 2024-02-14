@extends('Layouts.MainIndex')
@section('Container')




  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><span>PT. GIGANFIVE CORPS UNIVERSAL</span></h2>
              <p class="animate__animated animate__fadeInUp">PT Gigan Five Corps Universal is an export company that provides agricultural products, products and mines originating from Indonesia.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Delivery</h2>
              <p class="animate__animated animate__fadeInUp">We will provide what you need by prioritizing the quality of the products we have so that we don't disappoint you, we will send the product well so as not to damage your order.</p>
              <a href="#Product" class="btn-get-started animate__animated animate__fadeInUp scrollto">Product</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Register and Contact</h2>
              <p class="animate__animated animate__fadeInUp">Ordering at our company is very simple, you just need to register and fill in all the data we ask for and if you have any questions, the customer department will immediately serve you..</p>
              <a href="#method" class="btn-get-started animate__animated animate__fadeInUp scrollto">Method</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>.</p>
        </div>
        @forelse ($Abouts as $About)
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{ asset('/storage/Abouts/'.$About->image) }}"  alt="" width="100%" height="80%" class="center">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h4>{{ $About->title }}</h4>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

            <p >
                {!! $About->content !!}
            </p>
          </div>
        </div>
         @empty
         <div class="alert alert-danger">
             Data About Empty.
         </div>
        @endforelse

      </div>
    </section><!-- End About Us Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="Product" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Product</h2>
          <p>We have Original Indonesian Products which have good quality including agricultural products, processed handicraft products, processed foods, marine and mining products.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @forelse ($Categoryproducts as $categoryproduct)
              <li data-filter=".filter-{{$categoryproduct->name}}">{{ $categoryproduct->name }}</li>
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
                <div class="portfolio-links">
                    <a href="{{ asset('/storage/products/'.$product->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="View {{ $product->name }}"><i class="bi bi-images"></i></a>
                    {{--  <a href="{{ route('index.show', $product->id) }}" title="More Details"><i class="bi bi-eye"></i></a>  --}}

                    {{--  <a href="{{ route('dashboardindexs.show', $product->id) }}" title="add Cart"><i class="bi bi-bag-check"></i></a>  --}}
                </div>
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

    <!-- ======= Post Section ======= -->
    <section id="Post" class="about">
    <div class="container">
            @forelse ($Posts as $post)

                <div class="container">

                    <div class="section-title container">

                    <h2>{{ $post->title }}</h2>
                    </div>


                        <div class="col-lg-6 order-1 order-lg-2">

                        <img src="{{ asset('/storage/Posts/'.$post->image) }}" width="95%" height="80%" align="Center">
                        </div>

                        <div class="container">

                            <p style="text-indent: 45px;">

                                {!! $post->content !!}

                            </p>
                        </div>



                     </div>
                </section>
                    @empty
                        <div class="alert alert-danger">
                            Data Post Empty.
                        </div>
                        @endforelse

    </div>
    <!-- End Post Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="method" class="why-us">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>01</span>
            <h4>Selecting Products</h4>
            <p>Please choose the product you want then you can contact us via Whatsapp</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>02</span>
            <h4>Product Delivery</h4>
            <p>After placing an order, you must pay for the product before the product is sent to your city or country. After payment is complete, we will immediately send proof of delivery.</p>
          </div>


          <div class="col-lg-4 col-md-6 content-item">
            <span>03</span>
            <h4>Payment</h4>
            <p>After placing an order, you must pay for the product before the product is sent to your city or country. After payment is complete, we will immediately send proof of delivery</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->





    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p>If you have any questions, please contact us via WhatsApp.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Product Departments</h2>
          <p>.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.png" alt="">
              <h4>Noviar</h4>
              <span>Please contact if there is anything you want to ask or order</span>
              <p>
                <a href="https://api.whatsapp.com/send?phone=6281214948782" class="linkedin" target="blank"><i class="bi bi-whatsapp"></i></i></i></a>
              </p>
              <div class="social">

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Aziz</h4>
              <span>Please contact if there is anything you want to ask or order</span>
              <p>
                <a href="https://api.whatsapp.com/send?phone=6282317774631" class="linkedin" target="blank"><i class="bi bi-whatsapp"></i></i></i></a>
              </p>
              <div class="social">

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.png" alt="">
              <h4>M Ginanjar</h4>
              <span>Please contact if there is anything you want to ask or order</span>
              <p>
                <a href="https://api.whatsapp.com/send?phone=6281323127500" class="linkedin" target="blank"><i class="bi bi-whatsapp"></i></i></i></a>
              </p>
              <div class="social">

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>CONTACT</h2>
          <p>Please fill out the registration to start all product transactions.</p>
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

          {{--  <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
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
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="insert name" required>
                  <!-- error message untuk title -->
                  @error('name')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="insert email" required>

                  <!-- error message untuk title -->
                  @error('email')
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
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Phone</label>

                  <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="insert phone" required>

                  <!-- error message untuk phone -->
                  @error('phone')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror

                </div>


                <div class="form-group mt-3">
                    <label for="name">Your Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="insert address" required>

                    <!-- error message untuk title -->
                    @error('address')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

              <div class="form-group mt-3">
                <label for="name">Your Username</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="insert username" required>

                <!-- error message untuk phone -->
                @error('username')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <label for="name">Your Password</label>
                <input type="password" class="form-control @error('phone') is-invalid @enderror" name="password" placeholder="insert password" required>

                <!-- error message untuk phone -->
                @error('password')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>



              <div class="my-3">


              </div>
              <div class="text-center"><button type="submit">Register</button></div>
            </form>  --}}
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->




@endsection
