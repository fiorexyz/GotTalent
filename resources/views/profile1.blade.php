<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/perfil1.css') }}">
</head>

<body>

    <div class="jumbotron text-center">

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p class="bg-light text-dark"></p>
                <p class="bg-light text-dark"></p>
                <p class="bg-light text-dark"></p>
                <p class="bg-light text-dark"></p>
                <div class="jumbotron">
                    <form class="form-horizontal" method="POST" action="{{ url('profile') }}" enctype="multipart/form-data">
                        @csrf
                        <p>Photo
                            <input type="file" name="image" accept="image/png, .jpeg, .jpg, image/gif">
                        </p>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="bg-light text-dark"></p>
                <p class="bg-light text-dark"></p>
                <p class="bg-light text-dark"></p>
                <p class="bg-light text-dark"></p>
                <div class="form-group">

                    <p class="bg-light text-dark"></p>
                    <label class="col-xs-2 control-label">
                        <p>Full name</p>
                        <div class="col-sm-14">
                            <input type="text" class="form-control" id="inputName" value="{{ $user->name }}"
                                disabled>
                        </div>
                </div>
                <label class="col-xs-2 control-label">
                    <p>Email</p>
                    <div class="col-sm-14">
                        <input type="email" class="form-control" id="inputEmail"
                            placeholder="Example: ... 202#@poma.superate.org.sv" value="{{ $user->email }}" disabled>
                    </div>
                    <label class="col-xs-2 control-label">
                        <p>Age</p>
                        <div class="col-sm-14">
                            <input type="number" class="form-control" id="inputEmail" placeholder="Example: 17"
                                value="{{ $user->age }}" disabled>
                        </div>
                        <label class="col-xs-2 control-label">
                            <p>Phone number </p>
                            <div class="col-sm-14">
                                <input type="number" class="form-control" id="inputEmail"
                                    placeholder="Example: 45989867" name="phone" value="{{ $user->phone }}">
                            </div>
                            <label class="col-xs-2 control-label">
                                <p>Center ¡Supérate! you are in</p>
                                <div class="col-sm-14">
                                    <input type="text" class="form-control" id="inputEmail"
                                        placeholder="Example: Centro Superate! Fundacion Poma" name="superate"
                                        value="{{ $user->superate }}">
                                </div>
                            </label>

                            <label class="col-xs-2 control-label">
                                <p>Time practicing (years)</p>
                                <div class="col-sm-14">
                                    <input type="number" class="form-control" id="inputEmail" placeholder="Example: 1"
                                        name="timePracticing" value="{{ $user->timePracticing }}">
                                </div>
                            </label>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-4">
                    <p class="bg-light text-dark"></p>
                    <p class="bg-light text-dark"></p>
                    <p class="bg-light text-dark"></p>
                    <p class="bg-light text-dark"></p>

                    <div class="form-group">
                        <p>More about your talent:</p>
                        <textarea name="about" cols="35" rows="7">{{ $user->about }}</textarea>
                        <label class="col-xs-2 control-label">
                            <p>Multimedia of you talent</p>
                            <div class="col-xs-3">
                                <input type="file" name="talentIMG[]" size="80" />
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 has-feedback">
                                    <p class="bg-light text-dark"></p>

                                    <label for="" class="control-label">Categories</label>
                                    <select name="sub_category_id" class="form-control" multiple>
                                        @foreach ($sub_categories as $sub_category)
                                            <option value="{{ $sub_category->id }}"
                                                @if ($user->sub_category_id == $sub_category->id) selected @endif>
                                                {{ $sub_category->category->type }} - {{ $sub_category->type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="col-sm-4">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>

</body>

</html>
