<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>
<body>
    <header>
        <!-- Add your header content here -->
        <nav>
                <div id="logo">
      <h1><a>Logo</a></h1>
    </div>
    <div>
      <button class="nav-btn"><a href="{{ route('about') }}">Acerca de</a></button>
      <button class="nav-btn"><a href="/pages/shop.html">Tienda</a></button>
      <button class="nav-btn"><a href="/pages/news.html">Blog</a></button>
      <button class="nav-btn"><a href="/pages/learn.html">Aprender</a></button>
      <button class="nav-btn"><a href="/pages/contact.html">Contacto</a></button>
    </div>
    <div class="switch-container">
        <label class="switch">
            <input type="checkbox" id="mode-toggle">
            <span class="slider round"></span>
        </label>
    </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        

  <!-- Social media buttons -->
  <div class="social__container">
    <div>
      <button class="social__media">
        <img src="" />
      </button>
    </div>
    <div>
      <button class="social__media">
        <img src="" />
      </button>
    </div>
    <div>
      <button class="social__media">
        <img src="" />
      </button>
    </div>
    <div>
      <button class="social__media">
        <img src="" />
      </button>
    </div>
     
  </div>
  
  

  <!-- Website footer with company info, terms and conditions and privacy statement -->
  
  <footer>
    <div class="footer-content">
        <div class="footer-logo">
            <img src="logo.png" alt="Company Logo">
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <p>Contact Us:</p>
            <p>Email: contact@company.com</p>
            <p>Phone: +123-456-7890</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>2023 Company Name. All Rights Reserved.</p>
    </div>
  

    </footer>
</body>
</html>