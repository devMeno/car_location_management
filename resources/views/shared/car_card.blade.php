<div class="card border border-0" style="width: 18rem;">
    <img src="/storage/{{ $car->image1_path }}" class="card-img-top rounded bg-colorg" alt="...">
    <div class="card-body">
        <h5 class="card-title"> <a class="text-decoration-none text-dark"
                href="{{ route('car.show', ['slug' => $car->getSlug(), 'car' => $car]) }}">{{ $car->brand }}
                {{ $car->model }}</a> </h5>
        <p class="card-text fw-bolder">{{ $car->price }}€/day</p>
        <div class="d-flex justify-content-between">
            <a href="/" class="btn btn-green px-4">Rent now</a>
            <a href="{{ route('car.show', ['slug' => $car->getSlug(), 'car' => $car]) }}"
                class="btn btn-outline-dark">View details</a>
        </div>
    </div>
</div>
