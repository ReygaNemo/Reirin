@extends('layouts.layout1')
@section('container')
<h1>About Page</h1>
<div class="row row-cols-1 row-cols-md-2 g-4 "style="width: 650px;">
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
</div>
@endsection