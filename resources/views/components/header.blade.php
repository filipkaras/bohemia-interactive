<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Bohemia Interactive</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a href="/" class="p-2 text-dark">Home</a>
        <a href="/companies" class="p-2 text-dark">Companies</a>
        <a href="/users" class="p-2 text-dark">Users</a>
    </nav>
    <form id="logout-form" method="POST" action="/logout">
        @csrf
        <input class="btn btn-outline-primary" type="submit" value="Logout" />
    </form>
</div>

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
