@extends('layouts.layouts-homepage')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets-homepage/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 data-aos="zoom-out">Organisasi Kemahasiswaan Intra (OKI)</h2>
              <p data-aos="fade-up" data-aos-delay="100">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>OKI</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-building-columns"></i></div>
            <div>
              <h4 class="title">Lembaga Tinggi</h4>
              <p class="description">Organizations that regulate institutions and students on campus</p>
              <a href="#LembagaTinggi" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-graduation-cap"></i></div>
            <div>
              <h4 class="title">Himpunan Mahasiswa Jurusan</h4>
              <p class="description">Commonly abbreviated to HMJ is an organization that regulates related departments</p>
              <a href="#HimpunanMahasiswaJurusan" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-feather"></i></div>
            <div>
              <h4 class="title">Unit Kegiatan Mahasiswa</h4>
              <p class="description">Usually abbreviated as UKM is an organization that accommodates the potential/advantages of students</p>
              <a href="#UnitKegiatanMahasiswa" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="pt-0 services">
      <div class="container" id="ltCardItems" data-aos="fade-up">

        <div class="section-header">
          <span>Lembaga Tinggi</span>
          <h2>Lembaga Tinggi</h2>

        </div>

        <div class="row gy-4 d-flex justify-content-around">

          @foreach ($dataLt as $lt)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="/assets-homepage/img/lembaga_tinggi.png" alt="" class="img-fluid">
              <h3><a href="/detailOki/{{ $lt->slug }}" class="stretched-link">{{ $lt->nama_oki }}</a></h3>
              <p>{{ $lt->pengertian }}</p>
            </div>
          </div><!-- End Card Item -->
          @endforeach

        </div>

        <div class="mt-5 section-header" id="hmjCardItems">
          <span>Himpunan Mahasiswa Jurusan</span>
          <h2>Himpunan Mahasiswa Jurusan</h2>

        </div>

        <div class="row gy-4">

          @foreach ($dataHmj as $hmj)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
                <img src="/assets-homepage/img/hmj.png" alt="" class="img-fluid">
              <h3><a href="/detailOki/{{ $hmj->slug }}" class="stretched-link">{{ $hmj->nama_oki }}</a></h3>
              <p>{{ $hmj->pengertian }}</p>
            </div>
          </div><!-- End Card Item -->
          @endforeach

        </div>
        <div class="mt-5 section-header" id="ukmCardItems">
          <span>Unit Kegiatan Mahasiswa</span>
          <h2>Unit Kegiatan Mahasiswa</h2>

        </div>

        <div class="row gy-4">

          @foreach ($dataUkm as $ukm)
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
                <img src="assets-homepage/img/ukm.png" alt="" class="img-fluid">
              <h3><a href="/detailOki/{{ $ukm->slug }}" class="stretched-link">{{ $ukm->nama_oki }}</a></h3>
              <p>{{ $ukm->pengertian }}</p>
            </div>
          </div><!-- End Card Item -->
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" id="LembagaTinggi">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

          <div class="col-md-5">
            <img src="assets-homepage/img/lembaga_tinggi.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Lembaga Tinggi</h3>
            <p class="fst-italic">
              "Lembaga Tinggi" are organizations that regulate institutions and students on campus. Higher institutions adhere to the "trias politika". Lembaga Tinggi are also responsible for other organizations on campus.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li id="HimpunanMahasiswaJurusan"><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item"  data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets-homepage/img/hmj.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Himpunan Mahasiswa Jurusan</h3>
            <p class="fst-italic">
              "Department Student Association" or commonly abbreviated to HMJ is an organization that regulates related departments which are responsible for higher institutions.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li id="UnitKegiatanMahasiswa"><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item"  data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets-homepage/img/ukm.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Unit Kegiatan Mahasiswa</h3>
            <p>"Unit Kegiatan Mahasiswa" or what is usually abbreviated as UKM is an organization that accommodates the potential/advantages of students. There are many UKM organizations at POLINEMA.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
@endsection