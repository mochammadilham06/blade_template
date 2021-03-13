@extends('layouts.app')
@section('title', 'HOME')
@section('content')

<section id="about">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2>About</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <img src="http://images.unsplash.com/photo-1583944000409-00dd0ba1a873?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9" height="500" width="700" alt="">
            </div>
            <div class="card col-md-3" style="width: 18rem;">
                <img src="https://cdn1.iconfinder.com/data/icons/avatars-55/100/avatar_profile_user_music_headphones_shirt_cool-512.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portofolio" class="portofolio bg-light pb-5">
    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2>Team</h2>
            </div>
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-md">
                <div class="card">
                    <img src="https://www.wallpaperup.com/uploads/wallpapers/2012/09/28/16804/55ef95f4ebe4747a7f520655c0cbba7e-700.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://www.wallpaperup.com/uploads/wallpapers/2012/09/28/16804/55ef95f4ebe4747a7f520655c0cbba7e-700.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://www.wallpaperup.com/uploads/wallpapers/2012/09/28/16804/55ef95f4ebe4747a7f520655c0cbba7e-700.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md">
                <div class="card">
                    <img src="https://www.wallpaperup.com/uploads/wallpapers/2012/09/28/16804/55ef95f4ebe4747a7f520655c0cbba7e-700.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://www.wallpaperup.com/uploads/wallpapers/2012/09/28/16804/55ef95f4ebe4747a7f520655c0cbba7e-700.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://www.wallpaperup.com/uploads/wallpapers/2012/09/28/16804/55ef95f4ebe4747a7f520655c0cbba7e-700.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ini adalah isi dari Halaman Home <br>
Hello, {!!$name[0]!!}



<x-alert theme="warning">
    Ini adalah alert
</x-alert>
<x-alert theme="warning" closeable="true">
    Ini adalah alert dengan penambahan closeable
</x-alert>

<br>

@foreach($fruits as $fruit)
@if($loop->first)
ini adalah pengulangan pertama <br>
@endif
{{$fruit}}<br>
@if($loop->last)
Ini adalah pengulangan terakhir <br>
@endif
@endforeach

@stop

@section('js')
<script src="">
    console.log('ok');
</script> -->

@stop