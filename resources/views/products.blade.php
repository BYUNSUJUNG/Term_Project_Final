
@extends('template')
@section('content')

<h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
  <span class="site-heading-lower">Business Casual</span>
</h1>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="{{route('index')}}">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="{{route('products')}}">Products</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="{{route('store')}}">Store</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ml-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Blended to Perfection</span>
            <span class="section-heading-lower">Coffees &amp; Teas</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/SpongeBobImg.png" alt="스폰지밥 직원">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex mr-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Delicious Treats, Good Eats</span>
            <span class="section-heading-lower">Bakery &amp; Kitchen</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/PatrickImg.png" alt="">
      <div class="product-item-description d-flex ml-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ml-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">From Around the World</span>
            <span class="section-heading-lower">Bulk Speciality Blends</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/SquidwardImg.png" alt="">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p>
        </div>
      </div>
    </div>
  </div>
</section>

