<x-layout>
    <x-header></x-header>

    <div class="container py-5 opaque">
        <main>
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal float-left">Companies</h4>
                    <a href="/companies/create" class="btn btn-sm btn-outline-primary float-right">Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <th scope="row">{{ $company->id }}</th>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>
                                    <a class="btn py-0" href="/companies/{{ $company->slug }}"><i class="fas fa-search"></i></a>
                                    <a class="btn py-0" href="/users/company/{{ $company->slug }}"><i class="fas fa-users"></i></a>
                                    <a class="btn py-0" href="/companies/{{ $company->id }}/edit"><i class="far fa-edit"></i></a>
                                    <form class="d-inline" method="POST" action="/companies/{{ $company->id }}" onsubmit="return confirm('Are you sure you want to delete this company?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn py-0"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $companies->links() }}
                </div>
            </div>
        </main>
    </div>
</x-layout>
