<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function index()
    {
        $documentTypes = DocumentType::all();
        return view('documenttypes.index', compact('documentTypes'));
    }

    public function edit($id = null)
    {
        $documentType = $id ? DocumentType::find($id) : new DocumentType();
        return view('documenttypes.edit', compact('documentType'));
    }

    public function create()
    {
        return $this->edit();
    }

    public function update(Request $request, $id)
    {
        $documentType = DocumentType::find($id);
        $documentType->update([
            'reference' => $request->input('reference'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('documenttypes.index')->with('success', 'Type de document mis à jour avec succès.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|unique:documenttypes',
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
        DocumentType::create([
            'reference' => $request->input('reference'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('documenttypes.index')->with('success', 'Type de document ajouté avec succès.');
    }

    public function destroy($id)
    {
        $documentType = DocumentType::find($id);
        $documentType->delete();
        return redirect()->route('documenttypes.index')->with('success', 'Type de document supprimé avec succès.');
    }
}
