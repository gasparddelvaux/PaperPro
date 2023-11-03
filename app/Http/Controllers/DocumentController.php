<?php

namespace App\Http\Controllers;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::with('customer', 'documentType')->get();
        return view('documents.index', compact('documents'));
    }
}