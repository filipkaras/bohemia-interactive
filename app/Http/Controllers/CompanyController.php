<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies.index', [
            'companies' => Company::with('users')->paginate(10)
        ]);
    }

    public function show(Company $company)
    {
        return view('companies.show', [
            'company' => $company
        ]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        $attributes = [
            'name' => $request->name,
            'logo' => $request->logo,
            'email' => $request->email,
            'website' => $request->website,
            'slug' => Str::slug($request->name)
        ];

        if (isset($request->logo)) {
            $attributes['logo'] = $request->file('logo')->store('logo');
        }

        Company::create($attributes);

        return redirect('/companies')->with('success', 'Company created!');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', ['company' => $company]);
    }

    public function update(StoreCompanyRequest $request, $id)
    {
        $attributes = [
            'name' => $request->name,
            'logo' => $request->logo,
            'email' => $request->email,
            'website' => $request->website,
            'slug' => Str::slug($request->name)
        ];

        if (isset($request->logo)) {
            $attributes['logo'] = $request->file('logo')->store('logo');
        }

        Company::find($id)->update($attributes);

        return back()->with('success', 'Company updated!');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return back()->with('success', 'Company deleted!');
    }
}
