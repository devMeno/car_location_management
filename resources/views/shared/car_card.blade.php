<div class="card" style="width: 18rem;">
    <img src="/storage/{{ $car->image1_path }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $car->brand }} {{ $car->model }}</h5>
        <p class="card-text text-primary">{{ $car->price }}€/day</p>
        <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-primary">Rent now</a>
            <a href="#" class="btn btn-outline-dark">Read more</a>
        </div>
    </div>
</div>
