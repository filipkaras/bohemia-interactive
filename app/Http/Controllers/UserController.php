<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::with('company')->paginate(5)
        ]);
    }

    public function company(Company $company)
    {
        return view('users.index', [
            'users' => User::where('company_id', $company->id)->paginate(10),
            'company' => $company
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $attributes = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt(Str::random())
        ];

        User::create($attributes);

        return redirect('/users');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(StoreUserRequest $request, $id)
    {
        $attributes = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone
        ];

        User::find($id)->update($attributes);

        return back()->with('success', 'User updated!');
    }

    public function destroy(User $user)
    {
        if ($user->id == auth()->user()->id) {
            return back()->with('success', 'You can\'t delete your own acount!');
        }

        $user->delete();

        return back()->with('success', 'User deleted!');
    }
}
