<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets-homepage/img/logo.png" alt="">
        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="{{ $title === 'Homepage' ? 'active' : '' }}">Home</a></li>
          <li><a href="/about" class="{{ $title === 'about' ? 'active' : '' }}">About</a></li>
          <li><a href="/oki" class="{{ $title === 'oki' ? 'active' : '' }}">OKI</a></li>
        </ul>
        <a class="get-a-quote" href="/login">login</a>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->