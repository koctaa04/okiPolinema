@extends('layouts.layouts-login-homepage')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('/assets-homepage/img/page-header.jpg'); height:100px;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 data-aos="zoom-out">LOGIN</h2>
              {{-- <p data-aos="fade-up" data-aos-delay="100">Please login First with SIAKAD account</p> --}}
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-lg-5" style="background-image: url(assets-homepage/img/quote-bg.jpg); background-size: cover; height:450px"></div>

          <div class="col-lg-7">
            <form action="forms/quote.php" method="post" class="php-email-form">
              <h2>Login</h2>
              <p>Please Login with SIAKAD Account or You can login with SIAKAD Website.</p>
              <div class="row gy-2">
                <div class="col-lg-12">
                  <h4>Input Your Username</h4>
                </div>

                <div class="col-md-12">
                  <input type="text" name="username" class="form-control" placeholder="username" required>
                </div>
                <div class="col-lg-12">
                  <h4>Input Your Password</h4>
                </div>

                <div class="col-md-12">
                  <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>

                <div class="col-md-12 my-3 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Login</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

@endsection