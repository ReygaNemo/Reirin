@extends('layouts.layout1')
@section('container')
@php
$user = Auth::user();
@endphp

@if($user)
        {{-- User is authenticated --}}
        <!-- <p>Welcome, {{ $user->customer_name }}</p> -->
        <!-- <p>Email: {{ $user->email }}</p> -->
        <!-- <h1>Welcome back to ReiRinSalon</h1> -->
        <!-- <h4>Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ORIBEL Salon & Wellness</h4> -->
        <div class="text-center">
          <h1 class="judul display-1 mt-4 mb-5">Welcome back to ReiRinSalon, {{ $user->customer_name }}!</h1>
          <h4 class="mb-5">Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ReiRinSalon</h4>
        </div>
        {{-- Other user information --}}
@else
        {{-- User is not authenticated --}}
        <p>You are not logged in.</p>
        <!-- <h1>Welcome to ReiRinSalon</h1>
        <h4>Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ORIBEL Salon & Wellness</h4> -->
        <div class="text-center">
          <h1 class="judul display-1 mt-4 mb-5">Welcome to ReiRinSalon</h1>
          <h4 class="mb-5">Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ReiRinSalon</h4>
        </div>
@endif

<div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="pic\banner3.png" class="d-block w-90" style="height: 500px" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="pic\banner4.png" class="d-block w-100" style="height: 500px" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="pic\banner2.png" class="d-block w-100" style="height: 500px" alt="...">
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
        </button>
</div>

<div class="text-center container py-5">
<h1 class="mt-4 mb-5 judul display-1">Our Treatments</h1>
<h4 class="mb-5">Kami berdedikasi untuk memberikan standar pelayanan yang optimal dengan terus meningkatkan kualitas terapis kami. Upaya terus dilakukan guna menjamin pelayanan terbaik yang dapat kami berikan.</h4>
<div class="row row-cols-1 row-cols-md-2 g-5 mt-3">
  <div class="col">
    <div class="card border-dark align-items-center">
        <img src="pic\hair treatment.png" class="d-block w-35 mt-5" style="height: 170px" alt="...">
      <div class="card-body align-items-center">
        <h3 class="card-title text-center judul display-6">Hair Salon Treatment</h5>
        <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
        <p class="card-text mb-5" style="margin-left: 100px; margin-right: 100px;">
                Dapatkan treatment rambut yang sehat, berkilau dan lembut
        </p>
      </div>
    </div>
  </div>
  <!-- <div class="col">
    <div class="card border-dark align-items-center">
        <img src="pic\body_treatment.svg" class="d-block w-35 mt-5" style="height: 170px" alt="...">
      <div class="card-body align-items-center">
        <h3 class="card-title text-center judul display-6">Body Treatment</h3>
        <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
        <p class="card-text mb-5" style="margin-left: 100px; margin-right: 100px;">
                Perawatan badan dengan terapis yang sudah bersertifikasi dan pengalaman
        </p>
      </div>
    </div>
  </div> -->
  <div class="col">
    <div class="card border-dark align-items-center">
        <img src="pic\nail_art.png" class="d-block w-35 mt-5" style="height: 170px" alt="...">
      <div class="card-body align-items-center">
        <h3 class="card-title text-center judul display-6">Nail Art</h3>
        <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
        <p class="card-text mb-5" style="margin-left: 100px; margin-right: 100px;">
                Perawatan ini sangat baik untuk menjaga kesehatan kuku, kutikula dan kulit Anda
        </p>
      </div>
    </div>
  </div>
  <!-- <div class="col">
    <div class="card border-dark align-items-center">
        <img src="pic\face_treatment.png" class="d-block w-35 mt-5" style="height: 170px" alt="...">
      <div class="card-body align-items-center">
        <h3 class="card-title text-center judul display-6">Face Treatment</h3>
        <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
        <p class="card-text mb-5" style="margin-left: 100px; margin-right: 100px;">
                Perawatan wajah yang memiliki beragam manfaat bagi kesehatan kulit wajah
        </p>
      </div>
    </div>
  </div> -->
</div>
</div>

<!-- <div style="color: #000; background-color: #f3f2f2;"> -->
<!-- <section style="color: #000; background-color: #f3f2f2;"> -->
  <div class="container py-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h1 class="mb-5 judul display-1">Testimonials</h1>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h4 class="font-weight-bold"><strong>Putri Kusuma</strong></h4>
            <h6 class="font-weight-bold my-3">Mahasiswi</h6>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>"Saya sangat puas dengan potong rambut dan creambath di Salon Reirin. Para ahli potong rambutnya sangat berbakat, dan creambath membuat rambut saya lembut dan sehat."
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h4 class="font-weight-bold"><strong>Adinda Saraswati</strong></h4>
            <h6 class="font-weight-bold my-3">Guru</h6>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>"Layanan meni-pedi di Salon Reirin membuat saya merasa seperti seorang ratu. Pelayanan teliti dan pijatan kaki yang menyegarkan. Saya akan merekomendasikan kepada teman-teman saya!"
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h4 class="font-weight-bold"><strong>Rara Fitria</strong></h4>
            <h6 class="font-weight-bold my-3">Perawat</h5>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>"Pelayanan potong rambut dan creambath di Salon Reirin luar biasa. Ahli potong rambut mendengarkan keinginan saya, dan creambath membuat rambut saya berkilau. Sangat direkomendasikan!"
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </section>
</div> -->



<div class="container py-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h1 class="judul display-1 mb-5">Our Employee</h1>
      </div>
    </div>

    <div class="row text-center" style="display:inline-blok;">
      @foreach ($employee as $emp)
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
                <img src="{{$emp->employee_img}}" class="rounded-circle shadow-1-strong" width="100" height="100" alt="...">
            </div>
            <h4 class="font-weight-bold"><strong>{{ $emp->employee_name }}</strong></h4>
            <h5 class="font-weight-bold my-3">{{ $emp->employee_role }}</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

<div class="container py-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h1 class="judul display-1 mb-5">Promotions</h1>
      </div>
    </div>

    <div class="row text-center" style="display:inline-blok;">
      <ul>
      @foreach ($promo as $pr)
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
                <img src="{{$pr->promo_img}}" class="card-img-top" alt="...">
            </div>
            <h4 class="font-weight-bold"><strong>{{ $pr->promo_name }}</strong></h5>
            <h5 class="font-weight-bold my-3">{{ $pr->promo_desc}}</h5>
          </div>
        </div>
      </div>
      @endforeach
      </ul>
    </div>
  </div>


<div class="row d-flex justify-content-center">
  <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">Articles</h1>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card border-dark h-100">
      <a href="https://www.sunsilk.co.id/kisah/ciri-ciri-rambut-rusak.html"><img src="pic\artikel2.webp" class="card-img-top"
        alt="..." /></a>
      <div class="card-body">
        <p class="text-muted">Selasa, 19 Desember 2023</p>
        <a href="https://www.sunsilk.co.id/kisah/ciri-ciri-rambut-rusak.html"><h4 class="card-title">Penyebab & Rekomendasi Shampo untuk Rambut Rusak jadi Sehat Berkilau!</h4></a>
        <p class="card-text">
        Sejak lahir, rambut muncul dengan kekuatan alaminya. Kemudian tumbuh menjadi remaja hingga dewasa, keberadaan rambut ini tergantung dari...
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 1 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark h-100">
      <a href="https://www.rudyhadisuwarno.id/post/blow-dry-rambut"><img src="pic\artikel1.webp" class="card-img-top"
        alt="..." /></a>
      <div class="card-body">
        <p class="text-muted">Selasa, 19 Desember 2023</p>
        <a href="https://www.rudyhadisuwarno.id/post/blow-dry-rambut"><h4 class="card-title font-weight-bold">Apa itu Blow Dry? Ini dia segala hal yang Perlu Kamu Ketahui</h4></a>
        <p class="card-text">Apa Itu Blow Dry? Apa itu blow dry adalah sesuatu pertanyaan yang kurang lebih sering ditanyakan dalam dunia tata rambut. Blow dry adalah...
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 2 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark h-100">
      <a href="<h4 class="card-title"><img src="pic\artikel3.webp" class="card-img-top"
        alt="..." /></a>
      <div class="card-body">
        <p class="text-muted">Selasa, 19 Desember 2023</p>
        <a href="https://www.rudyhadisuwarno.id/post/keuntungan-kursus-potong-rambut"><h4 class="card-title">Kursus Gunting Rambut: 5 Keuntungan yang Wajib Kamu Tahu!</h4></a>
        <p class="card-text">
        Kursus gunting rambut adalah salah satu kursus yang sedang ngetren belakangan ini. Selain harganya yang bervariasi, pengajar kursus...
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

@endsection