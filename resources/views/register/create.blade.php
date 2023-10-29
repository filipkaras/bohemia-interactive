<x-layout>
    <section class="auth vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-3 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                <p class="text-white-50 mb-4">Create a new account!</p>

                                <form method="POST" action="/register" class="mt-10">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="email">First Name</label>
                                        <input type="first_name" name="first_name" id="first_name" class="form-control form-control-lg" value="{{ old('first_name') }}" />
                                        @error('first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="email">Last Name</label>
                                        <input type="last_name" name="last_name" id="last_name" class="form-control form-control-lg" value="{{ old('last_name') }}" />
                                        @error('last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

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

                                    <button class="btn btn-outline-light btn-lg px-5 mt-4" type="submit">Register</button>
                                </form>

                            </div>

                            <div>
                                <p class="mb-0">Already have an account? <a href="/login" class="text-white-50 fw-bold">Sign In</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
