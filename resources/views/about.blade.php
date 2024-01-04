@extends('layouts.layout1')
@section('container')

<div class="text-center">
  <h1 class="mt-4 mb-5 judul display-1">Get to Know About Us</h1>
  <h5 class="mb-5">ReiRinSalon didirikan pada September 2023. Bermula dari pelayanan untuk perawatan rambut dan tubuh seperti hair salon, body spa, face treatment, hand & foot treatment. Saat ini, kami telah memperluas pelayanan hingga eyelash extension, nail art dan brow treatment. Kami berharap agar ReiRinSalon dapat menjadi tempat tujuan utama Anda untuk merawat dan memanjakan diri. Para therapist, hairstylist dan staff kami lainnya siap memberikan perawatan terbaik untuk Anda.</h5>
</div>
<hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="pic\about2.jpg" alt="About 1">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="mb-3 judul display-1">About ReiRinSalon</h2>
            <!-- <p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p> -->
            <h5 class="mb-5">ReiRinSalon adalah destinasi kecantikan yang menawarkan beragam layanan terbaik, mulai dari potong rambut yang trendy hingga perawatan creambath yang menyegarkan. Dengan staf profesional dan berpengalaman, salon ini memberikan pengalaman menyenangkan serta hasil yang memuaskan bagi para pelanggannya. Tidak hanya itu, ReiRinSalon juga menonjolkan pelayanan manicure dan pedicure untuk memanjakan pelanggan dengan tata kuku yang rapi dan indah. Dengan kombinasi layanan berkualitas dan suasana yang ramah, ReiRinSalon menjadi pilihan yang sempurna untuk merawat dan mempercantik tampilan Anda.</h5>
            <div class="row gy-4 gy-md-0 gx-xxl-5X">
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Maintain</h2>
                    <p class="text-secondary mb-0">Menjaga kualitas service agar pelayanan yang akan diberikan untuk para pelanggan selalu optimal</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Inspire</h2>
                    <p class="text-secondary mb-0">Selalu memberikan inspirasi bagi pelanggan, baik inspirasi gaya, warna ataupun treatment terbaik</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container py-5">
    <h1 class="text mb-5 judul display-1 mt-0">Gallery</h1>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_1.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_2.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_3.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_4.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_5.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_6.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_7.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_8.png"
            class="w-100" />
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image">
          <img src="pic\gallery_9.png"
            class="w-100" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- fill="currentColor" -->
<!-- <div class="row row-cols-1 row-cols-md-2 g-4 "style="width: 650px;">
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;">
                        <div class="card-body">
                                <h5 class="card-title">Irene Liana</h5>
                                <p class="card-text">The founder of Reirin Salon, Irene Liana dedicated her hardwork in establishing a safe working enviournment</p>
                        </div>
                </div>
        </div>
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;" alt="...">
                        <div class="card-body">
                                <h5 class="card-title">Rinianti</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                </div>
        </div>
</div> -->
@endsection