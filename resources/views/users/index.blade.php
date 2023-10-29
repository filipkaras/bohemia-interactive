<x-layout>
    <x-header></x-header>

    <div class="container py-5">
        <main>
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal float-left">Users
                        @if (isset($company))
                            in company <strong>{{ $company->name }}</strong>
                        @endif
                    </h4>
                    <a href="/users/create" class="btn btn-sm btn-outline-primary float-right">Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->company->name ?? '' }}</td>
                                <td>
                                    <a class="btn py-0" href="/users/{{ $user->id }}"><i class="fas fa-search"></i></a>
                                    <a class="btn py-0" href="/users/{{ $user->id }}/edit"><i class="far fa-edit"></i></a>
                                    @if ($user->id != auth()->user()->id)
                                        <form class="d-inline" method="POST" action="/users/{{ $user->id }}" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn py-0"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </main>
    </div>
</x-layout>
