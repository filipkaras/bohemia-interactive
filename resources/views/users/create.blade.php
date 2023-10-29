<x-layout>
    <x-header></x-header>
    <div class="container py-5">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <main>
                    <a class="btn btn-outline-secondary mb-2" href="/users"><i class="fas fa-long-arrow-alt-left"></i> Go Back</a>
                    <div class="card mb-4 rounded-3 shadow-sm card-form">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal float-start">New user</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/users" enctype="multipart/form-data">
                                @csrf

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="first_name">First name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" />
                                    @error('first_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="first_name">Last name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}" />
                                    @error('last_name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
                                    @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" />
                                    @error('phone')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="company_id">Company</label>
                                    <select class="form-control" name="company_id" id="company_id">
                                        @foreach (\App\Models\Company::all() as $company)
                                            <option
                                                value="{{ $company->id }}"
                                                {{ old('company_id') == $company->id ? 'selected' : '' }}
                                            >{{ ucwords($company->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('company')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button class="btn btn-warning btn-lg px-5 mt-4" type="submit">Create</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-layout>
