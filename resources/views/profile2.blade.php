<x-body>
    <div class="jumbotron vertical-center">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-0 col-md-12 offset-md-0">
                    <div class="card mb-3 border-0 rounded-4 shadow-eb py-4">
                        <div class="row g-0">
                            <div class="col-sm-12 offset-sm-12 col-md-3 offset-md-1 d-flex align-items-center">
                                <img src="{{ asset($user->image) }}" style="width: 100%" class="p-2 rounded-4">
                            </div>
                            <div class="col-sm-12 offset-sm-12 col-md-7 offset-md-1">
                                <div class="card-body h-100 py-0">
                                    <div class="row h-100 d-flex align-items-center">
                                        <h4 class="card-title">{{ $user->name }}</h4>
                                        <span class="card-text">
                                            Age: {{ $user->age }} <br>
                                            Talent: {{ $user->sub_category->type }} <br>
                                            Time practicing: {{ $user->timePracticing }} years<br>
                                            Email: {{ $user->email }} <br>
                                            Organization: {{ $user->superate }} <br><br>
                                            <h5>More about my talent:</h5>
                                            {{ $user->about }}
                                            <br><br>
                                        </span>
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <img src="{{ asset($user->talent_images[0]) }}" class="w-100 rounded-4">
                                            </div>
                                            @if (isset($user->talent_images[1]))
                                                <div class="col-6">
                                                    <img src="{{ asset($user->talent_images[1]) }}" class="w-100 rounded-4">
                                                </div>
                                            @endif
                                        </div>
                                        <button type="button" class="rounded-4 noRound w-auto opacity-75 btn btn-warning text-light fw-semibold fs-2 px-3 position-absolute top-0 end-0">
                                            {{ $user->sub_category->category->type }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-body>
