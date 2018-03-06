<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    public function index()
    {
        $companies = Company::all();

        return view('companies.index', ['companies' => $companies]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Company $company)
    {
        // $company = Company::where('id', $company->id)->firstOrFail();
        $company = Company::find($company->id);

        return view('companies.show', ['company' => $company]);
    }


    public function edit(Company $company)
    {
        //
    }


    public function update(Request $request, Company $company)
    {
        //
    }


    public function destroy(Company $company)
    {
        //
    }
}
