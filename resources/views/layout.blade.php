<html>

<head>
 <title>
  Mealson - Laravel
 </title>
 <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
  crossorigin="anonymous">
 <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
 <link rel="stylesheet" href="./styles/global.css">
 <link rel="stylesheet" href="./styles/homepage.css">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
 <script
  src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
  crossorigin="anonymous"></script>
 <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
  integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
  crossorigin="anonymous"></script>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-datk bg-dark">
  <a class="navbar-brand" href="/">
   <img src="./images/brand.png" width="30" height="30" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
   data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
   aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse flex-btw" id="navbarNav">
   <ul class="navbar-nav">
    <li class="nav-item mr-2">
     <div class="nav__items-wrap flexed">
      <i class="bi bi-geo-alt-fill nav__icon"></i>
      <a class="nav-link" href="/">Lagos</a>
     </div>
    </li>
    <li class="nav-item mr-2">
     <div class="nav__items-wrap flexed">

      <i class="bi bi-house-fill nav__icon"></i>
      <a class="nav-link" href="/">Home</a>
     </div>
    </li>
    <li class="nav-item mr-2">
     <div class="nav__items-wrap flexed">

      <i class="mr-0 bi bi-hurricane nav__icon"></i>
      <a class="nav-link" href="/">Cuisine</a>
     </div>
    </li>
    <li class="nav-item mr-2">
     <div class="nav__items-wrap flexed">

      <i class="bi bi-cart-plus-fill nav__icon"></i>
      <a class="nav-link" href="/">Orders</a>
     </div>
    </li>
    <li class="nav-item mr-2">
     <div class="nav__items-wrap flexed">

      <i class="bi bi-question-circle-fill nav__icon"></i>
      <a class="nav-link" href="/">Learn More</a>
     </div>
    </li>


   </ul>

   <div class="nav__items-right flex-btw pr-2">
    <i class="bi bi-search nav__icon-right"></i>
    <i class="bi bi-person-fill nav__icon-right"></i>

   </div>
  </div>
 </nav>

 <div class="container">
  @yield('content')
 </div>


 {{-- <footer>
  Copyrights by Restaurant App.
 </footer> --}}
</body>

</html>
