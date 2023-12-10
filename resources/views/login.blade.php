@extends('layouts.layout2')
@section('container')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js\loginscript.js"></script>
    <title>Document</title>
</head>

<body>
<form method="POST" action="{{ route('login') }}">
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
    </form>

</body>
@endsection