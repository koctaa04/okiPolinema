@extends('layouts.layouts-homepage')

@section('content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 data-aos="zoom-out" >OKI Details</h2>
              <p data-aos="fade-up" data-aos-delay="100">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>OKI Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="{{ $detailOki->kategori_oki === '1' ? 'active' : '' }}">Lembaga Tinggi</a>
              <a href="#" class="{{ $detailOki->kategori_oki === '2' ? 'active' : '' }}">Himpunan Mahasiswa Jurusan</a>
              <a href="#" class="{{ $detailOki->kategori_oki === '3' ? 'active' : '' }}">Unit Kegiatan Mahasiswa</a>
            </div>

            <h4>{{ $detailOki->nama_kategori }}</h4>
            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
          </div>

          <div class="col-lg-8">
            <!-- Gambar Struktur Organisasi -->
            <img src="/assets-homepage/img/undraw_posting_photo.svg" alt="" class="img-fluid services-img">
            <h3>{{ $detailOki->nama_oki }}</h3>
            <a class="btn btn-primary mt-2 mb-3" href="get-a-quote.html">Join Now !</a>
            <p>{{$detailOki->pengertian}}</p>
            <p>{{ $detailOki->sejarah }}</p>
            <p>{{ $detailOki->benefit }}</p>
            <ul>
              @foreach($benefits as $benefit)
                  <li><i class="bi bi-check-circle"></i> <span>{{ $benefit }}</span></li>
              @endforeach
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->

@endsection