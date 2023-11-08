<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $documents = Document::all()->sortBy('created_at');
        $grouped = $documents->groupBy(function($document) {
            return $document->created_at->format('Y-m');
        });
        $revenues = $grouped->map(function($documents) {
            return $documents->sum('totalttc');
        });
        
        return view('home')->with('revenues', $revenues);
    }    
}
