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
        $company = Company::find($company->id);

        return view('companies.edit', ['company' => $company]);
    }


    public function update(Request $request, Company $company)
    {
        $companyUpdate = Company::where('id', $company->id)->update([
            'name'        => $request->input('name'),
            'description' => $request->input('description')
        ]);

        if($companyUpdate){
            return redirect()->route('companies.show', ['company' => $company->id])
                ->with('success', 'Company updated successfuly');
        }

        return back()->withInput();
    }


    public function destroy(Company $company)
    {
        $companyDelete = Company::find($company->id);

        if($companyDelete->delete()){
            return redirect()->route('companies.index')
                ->with('success', 'Company deleted successfully');
        }

        return back()->withInput()->with('error', 'Company could not be deleted');
    }
}
