<x-body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="blade1carousel" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="{{ url('category/2') }}">
                                <img src="{{ asset('img/first/1.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ url('category/1') }}">
                                <img src="{{ asset('img/first/2.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ url('category/3') }}">
                                <img src="{{ asset('img/first/3.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ url('category/4') }}">
                                <img src="{{ asset('img/first/4.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#blade1carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#blade1carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <h4 class="fw-semibold">If you want to know more information about the categories, click on the image of the categorie you want to see.<h4>
            </div>
        </div>
    </div>
</x-body>
