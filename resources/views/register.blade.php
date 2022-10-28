<x-body>
    <div class="jumbotron vertical-center">
        <div class="container">
            <div class="row text-center mb-3">
                <h1>Registration Form</h1>
            </div>

            <div class="row">
                <div class="col-12 offset-0 col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                    <form action="{{ url('register') }}" method="POST">
                        @csrf
                        <div class="card border-0 transparent-75 shadow-eb">
                            <div class="card-body">
                                @if (session()->has('NOPOMA'))
                                <h3 class="text-danger card-title text-center mb-1">{{ session('NOPOMA') }}</h3>
                                @endif
                                <h2 class="card-title text-center mb-2">Personal Information</h2>
                                <hr>
                                <div class="col-12 offset-0 col-sm-10 offset-sm-1 pt-4 mb-4">
                                    <x-input type="text" label="Name" name="name" :required="true" />
                                    <x-input type="email" label="Email address" name="email" :required="true" />
                                    <x-input type="password" label="Password" name="password" :required="true" />
                                    <select class="form-select" aria-label="Default select example" name="age">
                                        <option selected>Select how old are you</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                    </select>
                                </div>
                                <h2 class="card-title text-center mb-2">Talent Categories</h2>
                                <hr>
                                <div class="col-12 offset-0 col-sm-10 offset-sm-1 pt-2 mb-4">
                                    <select name="sub_category_id" class="form-control" multiple required>
                                        @foreach ($sub_categories as $sub_category)
                                            <option value="{{ $sub_category->id }}">{{ $sub_category->category->type }}
                                                - {{ $sub_category->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-primary w-100 blue-color rounded-4 p-2 mt-3"
                                    value="Register">
                                <input type="reset" class="btn btn-primary w-100 grey-color rounded-4 p-2 mt-3"
                                    value="Reset form">
                                    @if($errors->any())
                                        {{ implode('', $errors->all('<div>:message</div>')) }}
                                    @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-body>
