<x-body>
    <div class="jumbotron vertical-center">
        <div class="container">
            <div class="row text-center mb-3">
                <h1>Profile Form</h1>
            </div>
            <form action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 card border-0 transparent-75 shadow-eb mb-4 py-3">
                    <div class="row mb-3">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div style="width: 300px; height: 300px;">
                                <div class="image-modify d-flex align-items-end justify-content-end position-absolute"
                                    onclick="clickImageInput()">✎</div>
                                <div style="width: 300px; height: 300px;"
                                    class="image-preview d-flex align-items-center justify-content-center rounded-3">
                                    <img id="image-preview" class="avatar position-absolute"
                                        src="{{ $user->image }}" />
                                </div>
                            </div>
                        </div>
                        <input class="visually-hidden" type="file" id="avatar" name="image"
                            accept="image/png, image/jpeg" onchange="loadImage(event)">
                    </div>
                    <div class="row">
                        <x-input2 type="text" name="name" label="Full name" placeholder="John Doe"
                            value="{{ $user->name }}" :disabled="true" />
                        <x-input2 type="email" name="email" label="Email" placeholder="example@domain.com"
                            value="{{ $user->email }}" :disabled="true" />
                        <x-input2 type="number" name="age" label="Age" placeholder="15"
                            value="{{ $user->age }}" :disabled="true" />
                        <x-input2 type="text" name="phone" label="Phone number" placeholder="12345678"
                            value="{{ $user->phone }}" :required="true" />
                        <x-input2 type="text" name="superate" label="¡Supérate! center you are in"
                            placeholder="Fundacion Poma" value="{{ $user->superate }}" :required="true" />
                        <x-input2 type="number" name="timePracticing" label="Time practicing (years)" placeholder="2"
                            value="{{ $user->timePracticing }}" :required="true" />
                        <div class="col-12 offset-0 col-sm-10 offset-sm-1 pt-2 mb-4 h-auto">
                            <div class="input-group px-2 h-auto">
                                <span class="input-group-text col-12 col-md-auto">More about your talent</span>
                                <textarea class="form-control" style="height: 100px;" aria-label="With textarea" name="about" required>{{ $user->about }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 offset-0 col-sm-10 offset-sm-1 pt-2 mb-4 h-auto">
                            <div class="form-check form-switch d-flex justify-content-center mb-2">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault" onclick="changeTalentInput()">
                                <label class="form-check-label ms-2" for="flexSwitchCheckDefault">Upload video instead
                                    of images</label>
                            </div>

                            <div class="input-group" id="talentIMG">
                                <label class="input-group-text" for="inputGroupFile01">Images about your talent (Max 2
                                    images)</label>
                                <input type="file" class="form-control" id="inputGroupFile01"
                                    accept="image/png, image/jpeg" name="talentIMG[]" multiple>
                            </div>

                            <div class="input-group" id="talentVIDEO" style="display: none;">
                                <label class="input-group-text" for="inputGroupFile01">Video about your talent (Only MP4
                                    videos)</label>
                                <input type="file" class="form-control" id="inputGroupFile01" accept="video/mp4"
                                    name="talentVIDEO">
                            </div>
                        </div>
                        <div class="col-12 offset-0 col-sm-10 offset-sm-1 pt-2 mb-4">
                            <h4 class="card-title text-center mb-2">Category</h4>
                            <select name="sub_category_id" class="form-control" required>
                                @foreach ($sub_categories as $sub_category)
                                    <option value="{{ $sub_category->id }}"
                                        @if ($user->sub_category_id == $sub_category->id) selected @endif>
                                        {{ $sub_category->category->type }}
                                        - {{ $sub_category->type }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 offset-0 col-sm-10 offset-sm-1 pt-2 mb-4">
                            @if ($errors->any())
                                {{ implode('', $errors->all('<div>:message</div>')) }}
                            @endif
                            <input type="submit" class="btn btn-primary w-100 purple-color rounded-4 p-2 mt-3"
                                value="Update profile">
                        </div>
                    </div>
                </div>
            </form>
            @if ($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
        </div>

        <script>
            var loadImage = function(event) {
                var output = document.getElementById('image-preview');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src)
                }
            };

            function clickImageInput() {
                document.getElementById('avatar').click();
            }
        </script>
</x-body>
