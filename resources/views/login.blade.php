<x-body>
    <div class="login"></div>
    <div class="jumbotron vertical-center login-content">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 offset-0 col-sm-10 offset-sm-1 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="card border-0 transparent-75 shadow-eb">
                            <div class="card-body">
                                <h1 class="card-title text-center mb-2">Log in</h1>
                                <hr>
                                <div class="col-12 offset-0 col-sm-10 offset-sm-1 pt-4 mb-4">
                                    <x-input type="email" label="Email" name="email" :required="true"/>
                                    <x-input type="password" label="Password" name="password" :required="true"/>
                                    <input type="submit" class="btn btn-primary w-100 purple-color rounded-4 p-2 mt-3" value="Submit">
                                </div>
                                <div class="text-center mb-3">
                                    I want to <a href="{{ url('register') }}" class="card-link">Register</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-body>
