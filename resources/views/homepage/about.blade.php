@extends('layouts.layouts-homepage')

@section('content')
    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets-homepage/img/page-header.jpg');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 data-aos="zoom-out">About Us</h2>
                <p data-aos="fade-up" data-aos-delay="100">Malang State Polytechnic (Polinema) is a vocational higher education institution located in Malang. Malang is the second largest city in East Java, Indonesia, and is a great place to study because of its cool weather. At Polinema there are Organisasi Kemahasiswaan Intra (OKI), including:</p>
            </div>
            </div>
        </div>
        </div>
        <nav>
        <div class="container">
            <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
            </ol>
        </div>
        </nav>
    </div><!-- End Breadcrumbs -->
    
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
    
        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets-homepage/img/logo_polinema.png" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=8TO38KzkgaI" class="glightbox play-btn"></a>
            </div>
            <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
                Malang State Polytechnic (Polinema) is a vocational higher education institution located in Malang. Malang is the second largest city in East Java, Indonesia, and is a great place to study because of its cool weather. At Polinema there are Organisasi Kemahasiswaan Intra (OKI), including:
            </p>
            <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                    <h5>Lembaga Tinggi</h5>
                    <p>"Lembaga Tinggi" are organizations that regulate institutions and students on campus. Higher institutions adhere to the "trias politika". Lembaga Tinggi are also responsible for other organizations on campus.</p>
                </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                    <h5>Himpunan Mahasiswa Jurusan</h5>
                    <p>"Department Student Association" or commonly abbreviated to HMJ is an organization that regulates related departments which are responsible for higher institutions.</p>
                </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                    <h5>Unit Kegiatan Mahasiswa</h5>
                    <p>"Unit Kegiatan Mahasiswa" or what is usually abbreviated as UKM is an organization that accommodates the potential/advantages of students. There are many UKM organizations at POLINEMA</p>
                </div>
                </li>
            </ul>
            </div>
        </div>
    
        </div>
    </section><!-- End About Us Section -->
    
    
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
        <div class="container" data-aos="fade-up">
    
        <div class="row gy-4">
    
            <div class="col-lg-4 col-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
                <p>Lembaga Tinggi</p>
            </div>
            </div><!-- End Stats Item -->
    
            <div class="col-lg-4 col-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
                <p>Himpunan Mahasiswa Jurusan</p>
            </div>
            </div><!-- End Stats Item -->
    
            <div class="col-lg-4 col-6">
            <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1" class="purecounter"></span>
                <p>Unit Kegiatan Mahasiswa</p>
            </div>
            </div><!-- End Stats Item -->
    
        </div>
    
        </div>
    </section><!-- End Stats Counter Section -->
    
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq pt-0">
        <div class="container" data-aos="fade-up">
    
        <div class="section-header">
            <span>Frequently Asked Questions</span>
            <h2>Frequently Asked Questions</h2>
    
        </div>
    
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-10">
    
            <div class="accordion accordion-flush" id="faqlist">
    
                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Non consectetur a erat nam at lectus urna duis?
                    </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </div>
                </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                    </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                    </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </div>
                </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                    </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </div>
                </div>
                </div><!-- # Faq item-->
    
                <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                    </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </div>
                </div>
                </div><!-- # Faq item-->
    
            </div>
    
            </div>
        </div>
    
        </div>
    </section><!-- End Frequently Asked Questions Section -->
    
    </main><!-- End #main -->
    
@endsection