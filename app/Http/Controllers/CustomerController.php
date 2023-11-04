<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function edit($id = null)
    {
        $customer = $id ? Customer::find($id) : new Customer();
        return view('customers.edit', compact('customer'));
    }

    public function create()
    {
        return $this->edit();
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update([
            'reference' => $request->input('reference'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'website' => $request->input('website'),
            'vat_number' => $request->input('vat_number'),
            'description' => $request->input('description'),
            'comment' => $request->input('comment'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('customers.index')->with('success', 'Client mis à jour avec succès.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|unique:customers',
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'website' => 'nullable',
            'vat_number' => 'nullable',
            'description' => 'nullable',
            'comment' => 'nullable',
            'status' => 'required|boolean',
        ]);

        $customer = Customer::create([
            'reference' => $request->input('reference'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'website' => $request->input('website'),
            'vat_number' => $request->input('vat_number'),
            'description' => $request->input('description'),
            'comment' => $request->input('comment'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('customers.index')->with('success', 'Client ajouté avec succès.');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Client supprimé avec succès.');
    }
}
