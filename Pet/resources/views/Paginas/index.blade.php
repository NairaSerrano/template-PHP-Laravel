
@extends('template.index')

@section('contents')


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">O melhor Pet Serviços</h3>
                            <h1 class="display-3 text-white mb-3">Deixe seu Pet Feliz</h1>
                            <a href='/reservas' class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Agende Agora</a>
                            <a href='/precos' class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">O melhor Pet Serviços</h3>
                            <h1 class="display-3 text-white mb-3">Pet Spa & Cuidados</h1>

                            <a href='/reservas' class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Agende Agora</a>
                            <a href='/precos' class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


@endsection