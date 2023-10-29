<x-layout>
    <x-header></x-header>

    <div class="container py-5">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <main>
                    <a class="btn btn-outline-secondary mb-2" href="/companies"><i class="fas fa-long-arrow-alt-left"></i> Go Back</a>
                    <div class="card mb-4 rounded-3 shadow-sm card-form">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ $company->name }}</h4>
                        </div>
                        <div class="card-body">
                            @if ($company->logo)
                                <img class="w-100" src="/storage/{{ $company->logo }}" alt="logo" />
                                <br /><br />
                            @endif
                            @if (!empty($company->email))
                                <strong>Email:</strong> <a href="mailto:{{ $company->email }}">{{ $company->email }}</a><br />
                            @endif
                            @if (!empty($company->website))
                                <strong>Website:</strong> <a href="{{ $company->website }}">{{ $company->website }}</a>
                            @endif
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-layout>
