@extends('homebase')

@section('content')
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-outline-primary">Primary</button>
            </div>
        </div>
    </nav>


    <div class="container-fluid rounded mx-auto bg-primary mt-2" style="width: 95%; height:650px">
        <div class="mx-auto text-center pt-5" style="width: 40%;">
            <h1 class="fw-bolder display-2">Carlux Hire</h1>
            <p class="fs-6">We offer professionnal car rental & limousine services in our range of high-end vehicles</p>
            <button class="btn btn-dark">See all cars</button>
        </div>
    </div>

    <div class="row  mx-auto my-4 align-items-center" style="width: 55%;">
        <div class="col text-end">
            <h1 class="fw-bolder display-4">Services</h1>
        </div>
        <div class="col">
            <p>We invite you to try our services and we personnally guarantee that you will be completely satisfied</p>
        </div>
    </div>

    <div class="container vstack gap-3">
        <div class="row hstack gap-4">
            <div class="col">
                @include('shared.card', [
                    'title' => 'Title',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quaerat pariatur repudiandae ipsa ipsum
                                                                                                                                                                                                                                                                                                                                                                                                    porro? Quasi ea corrupti aperiam ab.',
                ])
            </div>
            <div class="col">
                @include('shared.card', [
                    'title' => 'Title',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quaerat pariatur repudiandae ipsa ipsum
                                                                                                                                                                                                                                                                                                                                                                                                    porro? Quasi ea corrupti aperiam ab.',
                ])
            </div>
        </div>
        <div class="row hstack gap-4">
            <div class="col">
                @include('shared.card', [
                    'title' => 'Title',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quaerat pariatur repudiandae ipsa ipsum
                                                                                                                                                                                                                                                                                                                                                                                                    porro? Quasi ea corrupti aperiam ab.',
                ])
            </div>
            <div class="col">
                @include('shared.card', [
                    'title' => 'Title',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quaerat pariatur repudiandae ipsa ipsum
                                                                                                                                                                                                                                                                                                                                                                                                    porro? Quasi ea corrupti aperiam ab.',
                ])
            </div>
        </div>
    </div>

    <div class="row  mx-auto my-4 align-items-center" style="width: 60%">
        <div class="col text-end">
            <h1 class="fw-bolder display-4">Why choose us</h1>
        </div>
        <div class="col">
            <p>At Carlux we pride ourselves in delivering extensive services to all of your needs with first rate customer
                care</p>
        </div>
    </div>

    <div class="container px-10 d-flex justify-content-between">
        <div style="width: 200px" class="col-sm-4">
            <div class="bg-primary rounded" style="width: 200px;height:200px"></div>
            <h3>Titre</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illo dicta</p>
        </div>
        <div style="width: 200px" class="col-sm-4">
            <div class="bg-primary rounded" style="width: 200px;height:200px"></div>
            <h3>Titre</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illo dicta</p>
        </div>
        <div style="width: 200px" class="col-sm-4">
            <div class="bg-primary rounded" style="width: 200px;height:200px"></div>
            <h3>Titre</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illo dicta</p>
        </div>
        <div style="width: 200px" class="col-sm-4">
            <div class="bg-primary rounded" style="width: 200px;height:200px"></div>
            <h3>Titre</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illo dicta</p>
        </div>
    </div>

    <div class="container text-center mx-auto w-50">
        <h1 class="fw-bolder display-3">Only today 100€/day</h1>
        <p class="w-75 mx-auto">Take advantage of our hot offers saving a significant amount when renting a limousine</p>
    </div>
@endsection
