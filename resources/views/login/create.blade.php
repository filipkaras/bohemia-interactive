<x-layout>
    <section class="auth vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-4">Please enter your login and password!</p>

                                <form method="POST" action="/login" class="mt-10">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" value="{{ old('email') }}" />
                                        @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" />
                                        @error('password')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5 mt-4" type="submit">Login</button>
                                </form>

                                <div class="social d-flex justify-content-center text-center mt-4 pt-1">
                                    <a target="_blank" href="https://www.facebook.com/BohemiaInteractive" class="text-white px-4"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a target="_blank" href="https://twitter.com/bohemiainteract" class="text-white px-4"><i class="fab fa-twitter fa-lg"></i></a>
                                    <a target="_blank" href="https://www.bohemia.net/" class="text-white px-4"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="/register" class="text-white-50 fw-bold">Sign Up</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
