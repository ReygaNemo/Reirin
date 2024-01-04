@extends('layouts.layout2')
@section('container')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js\loginscript.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->

</head>

<body>
<!-- <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>{{__('form.judul')}}</h2>

        @forelse($errors as $e)
            Your Input is Invalid!
            @empty
            {{__('form.cred')}}
        @endforelse

        <div>
            <label for="email">{{__('form.email')}}:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password">{{__('form.pass')}}:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form> -->


    <section class="vh-100" style="background-color: #EADEDC;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-85">
        <div class="col col-xl-12">
        <div class="card" style="border-radius: 1rem; background-color: #FCFAF9;">
        <div class="row g-0 my-5">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://www.salonanata.com/home/wp-content/uploads/2017/03/bg17c.png"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <!-- <p class="lead fw-normal mb-0 me-3">Login</p> -->
                    <h1 class="judul display-3">{{__('form.judul')}}</h1>
                </div>

                <div class="divider d-flex align-items-center my-3">
                    @forelse($errors as $e)
                        Your Input is Invalid!
                        @empty
                        {{__('form.cred')}}
                    @endforelse
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <!-- <label class="form-label" for="form3Example3">Input Email</label> -->
                    <label for="email" class="form-label" for="form3Example3">{{__('form.email')}}:</label>
                    <input type="email" id="form3Example3" class="form-control form-control-lg" name="email" id="email" placeholder="Enter a valid email address" required/>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label for="password" class="form-label" for="form3Example4">{{__('form.pass')}}:</label>
                    <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" id="password" placeholder="Enter password" required/>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('registerpage') }}"
                        class="link-danger">Register</a></p>
                </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    </div>
</body>
<style>
    body{
        background-color: #EADEDC;
    }
</style>
@endsection