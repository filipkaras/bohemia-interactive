<x-layout>
    <x-header></x-header>

    <div class="container py-5">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <main>
                    <a class="btn btn-outline-secondary mb-2" href="/users"><i class="fas fa-long-arrow-alt-left"></i> Go Back</a>
                    <div class="card mb-4 rounded-3 shadow-sm card-form">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ $user->first_name }} {{ $user->last_name }}</h4>
                        </div>
                        <div class="card-body">
                            @if (!empty($user->first_name))
                                <strong>First name:</strong> {{ $user->first_name }}<br />
                            @endif
                            @if (!empty($user->last_name))
                                <strong>Last name:</strong> {{ $user->last_name }}<br />
                            @endif
                            @if (!empty($user->email))
                                <strong>Email:</strong> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br />
                            @endif
                            @if (!empty($user->phone))
                                <strong>Phone:</strong> {{ $user->phone }}<br />
                            @endif
                            @if (!empty($user->company))
                                <strong>Company:</strong> {{ $user->company->name }}<br />
                            @endif
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-layout>
