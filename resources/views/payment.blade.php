@extends('layouts.layout1')
@section('container')

<div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">Booking</h1>
    </div>
</div>

@forelse ($allData as $ad)
<div class="card border-dark">
        <div class="card-body">
            <div class="col-12 col-lg-2 col-xl-5">
                <img src="{{$ad['service']->service_img}}" class="card-img-top" style="width: 200px;" alt="">
            </div>
            <div class="row justify-content-xl-center">
                <div class="col-12 col-xl-11">
                    <h3 class="text-body">{{ $ad['service']->service_name }}</h4>
                    <h5 class="text-body-secondary">Employee: {{ $ad['employee']->employee_name }}</h4>
                    <h5 class="text-body-secondary">Date: {{ $ad['date'] }}</h4>
                    <h5 class="text-body-secondary">Time: {{ $ad['time'] }}</h4>
                </div>
            </div>
        </div>

        <div class="card-body ms-4">
            <div class="card-footer card-header d-flex justify-content-between mb-4">
                <h4>Total Pembayaran: </h4>
                <h4 class="text-danger">Rp. {{ $ad['service']->service_price }}</h4>
            </div>
            <div class="d-flex mb-2">
            <div class="font-size: 2rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                </svg>
                Metode Pembayaran
            </div>
            </div>

            @foreach($ad['payment_types'] as $pt)
            <div>
            <!-- <li> -->
                <form action="{{ route('paymentFinal') }}" method="post">
                    @csrf
                    <input type="hidden" name="paymentId" value="{{ $pt->payment_type_id }}">
                    <button type="submit" class="btn btn-outline-primary border-primary my-3">
                        {{ $pt->payment_type_name }}
                    </button>
                </form>
            <!-- </li> -->
            </div>
            @endforeach
        </div>
</div>

    <!-- <div>
        <h2>Service: {{ $ad['service']->service_name }}</h2>
        <p>Employee: {{ $ad['employee']->employee_name }}</p>
        <p>Date: {{ $ad['date'] }}</p>
        <p>Time: {{ $ad['time'] }}</p>

        @foreach($ad['payment_types'] as $pt)
            <li>
                <form action="{{ route('paymentFinal') }}" method="post">
                    @csrf
                    <input type="hidden" name="paymentId" value="{{ $pt->payment_type_id }}">
                    <button type="submit" style="border: none; background-color: transparent; cursor: pointer;">
                        {{ $pt->payment_type_name }}
                    </button>
                </form>
            </li>
        @endforeach
    </div> -->
@empty
    <p>bro u did something wrong.</p>
@endforelse

@endsection