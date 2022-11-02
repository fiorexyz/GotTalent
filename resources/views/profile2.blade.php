<x-body>
    <div class="jumbotron vertical-center">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-0 col-md-12 offset-md-0">
                    <div class="card mb-3 border-0 rounded-4 shadow-eb py-4">
                        <div class="row g-0">
                            <div
                                class="col-sm-12 offset-sm-12 col-md-5 offset-md-0 d-flex align-items-center text-center p-5">
                                <img src="{{ asset($user->image) }}" class="w-100 rounded-4">
                            </div>
                            <div class="col-sm-12 offset-sm-12 col-md-7 offset-md-0">
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
                                            @if ($user->talent_video != null)
                                            <video src="{{ url($user->talent_video) }}" class="col-12 col-md-8" style="max-height: 500px; max-width: 100%;" controls></video>
                                            @else
                                                <div
                                                    class="@if (isset($user->talent_images[1])) col-12 col-md-6 @else col-12 col-md-8 @endif mb-4 mb-md-0 text-center">
                                                    <img src="{{ asset($user->talent_images[0]) }}"
                                                        class="w-auto rounded-4"
                                                        style="max-height: 500px; max-width: 100%;">
                                                </div>
                                                @if (isset($user->talent_images[1]))
                                                    <div class="col-12 col-md-6 text-center">
                                                        <img src="{{ asset($user->talent_images[1]) }}"
                                                            class="w-auto rounded-4"
                                                            style="max-height: 500px; max-width: 100%;">
                                                    </div>
                                                @endif
                                            @endif

                                        </div>
                                        <button type="button"
                                            class="rounded-4 noRound w-auto opacity-75 btn btn-warning text-light fw-semibold fs-2 px-3 position-absolute top-0 end-0">
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
