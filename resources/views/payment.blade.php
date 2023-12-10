@extends('layouts.layout1')
@section('container')
<h1>BAYAR ANJING </h1>

@forelse ($allData as $ad)
    <div>
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
    </div>
@empty
    <p>bro u did something wrong.</p>
@endforelse

@endsection