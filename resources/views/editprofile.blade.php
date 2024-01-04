@extends('layouts.layout1')
@section('container')

<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">Profile</h1>
    </div>
</div>

<section>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 border-dark">
          <div class="card-body text-center">
            <img src="{{ $user->customer_img }}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h2 class="my-5"><strong>{{ $user->customer_name }}</strong></h2>
            <!-- <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4 border-dark">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h4 class="mb-0">Email</h4>
              </div>
              <div class="col-sm-9">
                <h4 class="text-muted mb-0">: {{ $user->email }}</h4>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h4 class="mb-0">Phone</h4>
              </div>
              <div class="col-sm-9">
                <h4 class="text-muted mb-0">: {{ $user->customer_phone }}</h4>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h4 class="mb-3">Address</h4>
              </div>
              <div class="col-sm-9">
                <h4 class="text-muted mb-3">: {{ $user->customer_address }}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection