@extends('homebase')

@section('content')
    {{-- navbar --}}


    {{-- <div class="container">
        <div class="row">
            @foreach ($cars as $car)
                <div class="col">
                    @include('shared.car_card', $car)
                </div>
            @endforeach
        </div>
    </div> --}}


    <div class="container-fluid rounded mx-auto mt-2 mb-5"
        style="width: 95%; height:650px;background-image:url({{ asset('images/banner.jpg') }}); background-size: cover;
        background-position: center;">
        <div class="mx-auto text-center pt-5" style="width: 40%;">
            <h1 class="fw-bolder display-1">Carlux Hire</h1>
            <p class="fs-6">We offer professionnal car rental & limousine services in our range of high-end vehicles</p>
            <button class="btn btn-dark btn-lg">See all cars</button>
        </div>
        {{-- <img src="{{ asset('images/banner2.jpg') }}" alt="" class="bg-img"> --}}
    </div>

    <h2 class="text-center my-5">Discover our range of Mercedes</h2>

    <div class="container">
        <div class="row">
            @foreach ($cars as $car)
                <div class="col">
                    @include('shared.car_card', $car)
                </div>
            @endforeach
        </div>
    </div>

    <div class="row  mx-auto my-5 align-items-center" style="width: 55%;">
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
                    'img' => 'images/aeoroport.jpg',
                    'title' => 'Airport Transfers',
                    'content' =>
                        'With additional wait time and flight tracking in case of delays, our service is optimized to make every airport transfer a breeze.',
                ])
            </div>
            <div class="col">
                @include('shared.card', [
                    'img' => 'images/chauffeur_ok.jpg',
                    'title' => 'Intercity Trips',
                    'content' =>
                        'Your stressfree solution for traveling between cities with drivers all over the world.',
                ])
            </div>
        </div>
        <div class="row hstack gap-4">
            <div class="col">
                @include('shared.card', [
                    'img' => 'images/mariee.jpg',
                    'title' => 'Wedding Events',
                    'content' =>
                        'Our friendly and attentive service combined with attention to detail answer you can truly relax and enjoy your special day.',
                ])
            </div>
            <div class="col">
                @include('shared.card', [
                    'img' => 'images/business.jpg',
                    'title' => 'Business Meeting',
                    'content' =>
                        'Focus on your meeting with your partners, forget about the road and the car , wich will distract your thoughts.',
                ])
            </div>
        </div>
    </div>

    <div class="row  mx-auto my-5 align-items-center" style="width: 60%">
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
            <div class="color rounded d-flex align-items-center" style="width: 200px;height:200px">
                <img src="{{ asset('images/online-advertising.png') }}" class="w-50 h-50 d-flex mx-auto" alt="">
            </div>
            <h5 class="my-3">Easy Online Booking</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illo dicta</p>
        </div>
        <div style="width: 200px" class="col-sm-4">
            <div class="black rounded d-flex align-items-center" style="width: 200px;height:200px">
                <img src="{{ asset('images/chauffeur.png') }}" class="w-50 h-50 d-flex mx-auto" alt="">
            </div>
            <h5 class="my-3">Professional Drivers</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illo dicta</p>
        </div>
        <div style="width: 200px" class="col-sm-4">
            <div class="color rounded d-flex align-items-center" style="width: 200px;height:200px">
                <img src="{{ asset('images/auto.png') }}" class="w-50 h-50 d-flex mx-auto" alt="">
            </div>
            <h5 class="my-3">Variety of Cars</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illo dicta</p>
        </div>
        <div style="width: 200px" class="col-sm-4">
            <div class="black rounded d-flex align-items-center" style="width: 200px;height:200px">
                <img src="{{ asset('images/paiement-securise.png') }}" class="w-50 h-50 d-flex mx-auto" alt="">
            </div>
            <h5 class="my-3">Online Payment</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illo dicta</p>
        </div>
    </div>

    <div class="container text-center mx-auto my-5 w-50">
        <h1 class="fw-bolder display-3">Only today 100€/day</h1>
        <p class="w-75 mx-auto">Take advantage of our hot offers saving a significant amount when renting a limousine</p>
    </div>

    <div class="container row black mx-auto rounded-3 mb-5">
        <div class="col pl-4">
            <h1 class="my-4">Cadillac Escalade</h1>
            <div class="d-flex">
                <ul class="vstack gap-2">
                    <li>For upto & Passengers</li>
                    <li>Incredible Sound System</li>
                    <li>Fiber Optic Light</li>
                    <li>Bar Area With Fridge</li>
                </ul>
                <ul class="vstack gap-2">
                    <li>Tinted Windows</li>
                    <li>Divider With Premium Style</li>
                    <li>Multipurpose Designed Limo</li>
                    <li>Chill Air Conditioning</li>
                </ul>
            </div>
            <div class="btn btn-dark w-25 my-4">Reserve Now</div>
        </div>
        <div class="col">
            <img src="{{ asset('images/cadillac__.png') }}" class="w-100" alt="">
        </div>
    </div>

    <div class="container-fluid rounded-5 footer px-5 pt-5 pb-3 mb-5" style="width: 95%;font-size:13px">
        <div class="row mb-4">
            <div class="col w-50">
                <div class="row">
                    <div class="col w-50">
                        <img src="{{ asset('images/banner.jpg') }}" alt="" class="mb-4"
                            style="width: 80px;height:30px"><br>
                        <label for="email my-2">Suscribe to the newsletter</label>
                        <div class="input-group mt-2 w-75">
                            <input type="text" class="form-control" placeholder="Email adress"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Send</button>
                        </div>
                        {{-- <span class="material-symbols-outlined">
                            arrow_forward
                        </span>
                        </input> --}}
                    </div>
                    <div class="col w-50 justify-content-center">
                        <h5>Top cities</h5>
                        <div class="">
                            <span>New York</span><br>
                            <span>London</span><br>
                            <span>Berlin</span><br>
                            <span>Los Angeles</span><br>
                            <span>Paris</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col w-50">
                <div class="row">
                    <div class="col w-50 justify-content-center">
                        <h5>Explore</h5>
                        <div class="">
                            <span>Intercity rides</span><br>
                            <span>Limousine service</span><br>
                            <span>Driver service</span><br>
                            <span>Private car service</span><br>
                            <span>Airport transfer</span>
                        </div>
                    </div>
                    <div class="col w-50 justify-content-center">
                        <h5>Intercity rides</h5>
                        <div class="">
                            <span>East Hampton - New York</span><br>
                            <span>New York - Washington</span><br>
                            <span>New York - Philadelphia</span><br>
                            <span>Abu Dhabi - Dubai</span><br>
                            <span>London - Birmingham</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="font-size:10px">
            <div class="col" style="width: 20%">
                <span>2023 Carlux</span>
            </div>
            <div class="col w-50 hstack gap-2" style="width: 40%">
                <span><a href="#" class="text-light text-decoration-none">Term</a></span>
                <span><a href="#" class="text-light text-decoration-none">Privacy policy</a></span>
                <span><a href="#" class="text-light text-decoration-none">Legal notice</a></span>
                <span><a href="#" class="text-light text-decoration-none">Accessibility</a></span>
            </div>
            <div class="col d-flex justify-content-end" style="width: 60%">
                <div class="d-flex gap-2">
                    <div class="rounded-circle bg-light" style="width: 20px;height:20px"></div>
                    <div class="rounded-circle bg-light" style="width: 20px;height:20px"></div>
                    <div class="rounded-circle bg-light" style="width: 20px;height:20px"></div>
                    <div class="rounded-circle bg-light" style="width: 20px;height:20px"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
