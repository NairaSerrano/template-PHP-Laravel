

@extends('template.index')

@section('contents')

     <!-- Carousel Start -->
     <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="https://c4.wallpaperflare.com/wallpaper/320/572/920/passeio-no-jardim-silver-tabby-cat-wallpaper-preview.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Bem vindo à 
                                        <strong>Página Web da Naira</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Aprofunde seus conhecimentos em PHP Laravel e em Cats </h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>class LPWEB II</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Pronto para a aula
                                        de LPWEB II Naira</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    @endsection