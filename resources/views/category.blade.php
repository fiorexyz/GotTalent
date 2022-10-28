<x-body>
    <div class="container">
        <div class="row">
            <div class="col-2 offset-5 text-center">
                <button type="button"
                    class="btn btn-warning shadow-eb text-light fw-semibold fs-2 px-3">{{ $category->type }}</button>
            </div>
        </div>

        <div class="row mt-5">
            @foreach ($users as $user)
                <div class="col-12 offset-0 col-md-8 offset-md-2">
                    <div class="col-10 offset-1">
                        <div class="card mb-3 border-0 rounded-4 shadow-eb py-3">
                            <div class="row g-0">
                                <div class="col-sm-12 offset-sm-12 col-md-3 offset-md-1 d-flex align-items-center">
                                    <img src="{{ asset($user->image) }}" style="width: 100%" class="p-4">
                                </div>
                                <div class="col-sm-12 offset-sm-12 col-md-7 offset-md-1">
                                    <div class="card-body h-100 py-0">
                                        <div class="row h-100 d-flex align-items-center">
                                            <h4 class="card-title">{{ $user->name }}</h4>
                                            <span class="card-text">
                                                Age: {{ $user->age }} <br>
                                                Talent: {{ $user->sub_category->type }} <br>
                                                Email: {{ $user->email }} <br>
                                                Organization: {{ $user->superate }} <br>
                                            </span>
                                            <div class="col-12 d-flex justify-content-end">
                                                <a class="btn btn-primary blue-color"
                                                    href="{{ url("profile2/$user->id") }}" role="button">See more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-body>
