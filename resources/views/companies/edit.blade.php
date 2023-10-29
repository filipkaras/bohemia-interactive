<x-layout>
    <x-header></x-header>
    <div class="container py-5 opaque">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <main>
                    <a class="btn btn-outline-secondary mb-2" href="/companies"><i class="fas fa-long-arrow-alt-left"></i> Go Back</a>
                    <div class="card mb-4 rounded-3 shadow-sm card-form">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal float-start">Edit company</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/companies/{{ $company->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $company->name) }}" />
                                    @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $company->email) }}" />
                                    @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="logo">Logo</label><br />
                                    @if (!empty($company->logo))
                                        <img src="{{ asset('storage/' . $company->logo) }}" alt="logo" width="100"><br /><br />
                                    @endif
                                    <input type="file" name="logo" id="logo" class="form-control-file" value="{{ old('logo', $company->logo) }}" />
                                    @error('logo')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="website">Website</label>
                                    <input type="text" name="website" id="website" class="form-control" value="{{ old('website', $company->website) }}" />
                                    @error('website')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button class="btn btn-warning btn-lg px-5 mt-4" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-layout>
