<x-body>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 offset-0 col-sm-8 offset-sm-2 col-md-6 offset-md-3 text-justify fs-5">
                <div class="col-12 offset-0 col-md-10 offset-md-1">
                    <h1 class="text-center">Why?</h1>
                    <p>
                        To help and support these talented students, we created a web page where we intend to make their
                        talents known. We have included their general information, what they do, and how to contact
                        them.
                    </p>

                    <h1 class="text-center">For what?</h1>
                    <p>
                        The main purpose of the web page is to show the student's information, to make use of their
                        talents
                        through the ¡Supérate! program.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="fw-semibold">SHOW YOUR TALENT!</h1>
                <h4>If you have any type of talent and you want to demostrate it, Log in to share it with others.</h4>
                <h4>Categories included in our website:</h4>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 g-3 mb-4">
            @foreach ($categories as $category)
                <div class="col">
                    <div class="card shadow-eb transition" style="height: 100%;" onclick="show('{{ $category->type }}')">
                        <img src="{{ asset("img/home/$category->type.jpg") }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">{{ $category->type }}</h5>
                        </div>
                    </div>
                </div>
                <x-floatingCard :category="$category"/>
            @endforeach
        </div>
    </div>
</x-body>
