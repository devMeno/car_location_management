<div style="height: 240px;">
    <div class="row p-2 h-100 bg-colorg rounded">
        <div class="col rounded"
            style="background-image:url({{ asset($img) }}); background-size: cover;background-position: center;">
            {{-- <img src="{{ asset('images/chauffeur_ok.jpg') }}" alt="" class="img-fluid">
            <img src="{{ asset('images/business.jpg') }}" alt="">
            <img src="{{ asset('images/mariee.jpg') }}" alt="">
            <img src="{{ asset('images/aeoroport.jpg') }}" alt=""> --}}
        </div>
        <div class="col">
            <h3> {{ $title }} </h3>
            <p>{{ $content }}</p>
            <div class="btn btn-dark align-items-end">
                Read more
            </div>
        </div>
    </div>
</div>
