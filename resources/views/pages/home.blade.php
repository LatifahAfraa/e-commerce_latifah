@extends('layouts.base')
@section('content')

<div class="d-flex flex-column h-100">
    @include('layouts.header')

    <!-- Begin page content -->
    <div class="container-fluid" style="padding-bottom: 100px !important;">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('admin.list_user') }}">
                                <span data-feather="users"></span>
                                User List
                            </a>
                        </li>
                        <a href="#" onclick="$('#formLogout').submit()">
                            <li class="nav-item">
                                <form action="{{ route("logout") }}" method="post" id="formLogout">
                                    @csrf
                                </form>
                                <div class="nav-link">
                                    <span data-feather="log-out"></span>
                                    Logout
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <input class="form-control form-control-dark w-100" type="text" placeholder="Search"
                        aria-label="Search">
                </div>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://cottondna.com/vendor/designer/admin/assets/img/default-cover.png"
                                class="img-fluid" alt="" height="50%">
                            <div class="container">
                                <div class="carousel-caption text-start">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 mt-3 g-3">
                    <div class="col">
                        <div class="card bg-light">
                            <center><i class="fa-solid fa-gift mt-3"></i></center>
                            <p href="" class=" text-center">Material</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card bg-light">
                            <center><i class="fa-solid fa-wrench mt-3"></i></center>
                            <p href="" class=" text-center">Tools</p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card bg-light">
                            <center><i class="fa-solid fa-hill-rockslide mt-3"></i></center>
                            <p href="" class=" text-center">Fitting</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card bg-light">

                            <center><i class="fa-solid fa-images mt-3"></i>
                            </center>
                            <p href="" class=" text-center">Ceramics</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card bg-light">
                            <center><i class="fa-solid fa-layer-group mt-3"></i></center>
                            <p href="" class=" text-center">Acrylic</p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card bg-light">
                            <center><i  class="fa fa-shapes mt-3"></i></center>
                            <p href="" class=" text-center">Other</p>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>
</div>

@endsection
