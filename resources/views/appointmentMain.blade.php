@extends('layouts.layout1')
@section('container')
@php
$user = Auth::user();
@endphp

@if($user)
{{-- User is authenticated --}}

<div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
                <h1 class="judul display-1 mb-5">Reserve now and choose one of our service!</h1>
        </div>
</div>

<!-- <h1 class="text-center">Reserve now and choose one of our Service!</h1> -->
<div card border-dark>
<div class="card-group justify-content-center">

        @foreach($services as $service)
        <form action="{{ route('select-service') }}" method="post">
                @csrf
                <input type="hidden" name="service_id" value="{{ $service->service_id }}">
                <div class="card">
                        <!-- <img src="pic\gallery6.jpg" class="card-img-top" style="width: 350px;" alt="..."> -->
                        <img src="{{$service->service_img}}" class="card-img-top" style="width: 350px;" alt="">
                        <!-- <div class="col-lg-4 col-md-12 mb-4">
                                <div class="bg-image">
                                <img src="pic\gallery_6.png"
                                style="width: 300px;" />
                                </div>
                        </div> -->
                        <div class="card-body">
                                <div class="d-flex justify-content-between">
                                        <!-- <span class="card-title ms-4 mt-4">{{ $service->service_name }}</span><span>{{ $service->service_price }}</span> -->
                                        <h3 class="ms-3 mt-4 judul display-7">{{ $service->service_name }}</h3>
                                        <h5 class="text-danger mb-0 me-3 mt-4">Rp. {{ $service->service_price }}</h5>
                                </div>
                                <!-- <h3 class="card-title">{{ $service->service_name }}</h3> -->
                                <p class="card-text mx-3 mb-4 d-inline-block text-truncate" style="max-width: 300px;">{{ $service->service_desc }}</p>
                        </div>
                        <!-- <div class="card-footer">
                                <small class="text-body-secondary">{{ $service->service_price }}</small>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Select</button>
                </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        @endforeach

        <!-- @foreach($services as $service)
<a>
        <div class="card">
                <img src="pic\banner2.png" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">{{ $service->service_name }}</h5>
                        <p class="card-text">{{ $service->service_desc }}</p>
                </div>
                <div class="card-footer">
                        <small class="text-body-secondary">{{ $service->service_price }}</small>
                </div>
        </div>     
</a>
@endforeach -->

        <!-- <div class="card">
                <img src="pic\banner2.png" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
        </div>
        <div class="card">
                <img src="pic\banner2.png" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
        </div> -->
</div>
</div>

<!-- <section>
  <div class="container py-5">
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
        @foreach($services as $service)
        <form action="{{ route('select-service') }}" method="post">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->service_id }}">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5>{{ $service->service_name }}</h5>
                <div class="mt-1 mb-0 text-muted small">
                  <span>{{ $service->service_desc }}</span>
                </div>
                 <p class="text-truncate mb-4 mb-md-0">
                  There are many variations of passages of Lorem Ipsum available, but the
                  majority have suffered alteration in some form, by injected humour, or
                  randomised words which don't look even slightly believable.
                </p> -->
              <!-- </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1">{{ $service->service_price }}</h4> -->
                  <!-- <span class="text-danger"><s>$20.99</s></span> -->
                <!-- </div>
                <h6 class="text-success">(60 Min)</h6>
                <div class="d-flex flex-column mt-4">
                <button type="submit" class="btn btn-primary">Select</button>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</section> -->

@else
{{-- User is not authenticated --}}
<p>You are not logged in.</p>
@endif



@endsection