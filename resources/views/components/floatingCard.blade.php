@props(['category'])

<div class="card-div hidden" id="{{ $category->type }}" style="display: none;">
    <div class="QR-background row d-flex w-100 justify-content-center align-items-center" onclick="hide('{{ $category->type }}')">
        <div class="col-12 card-QR">
            <div class="card bg-pinky border-0">
                <img src="{{ asset("img/home/$category->type.jpg") }}" class="card-img-top" loading="lazy">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $category->type }}</h5>
                    <h6 class="card-title text-justify">{{ $category->about }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
