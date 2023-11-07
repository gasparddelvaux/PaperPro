<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function edit($id = null)
    {
        $user = $id ? User::find($id) : new User();
        return view('users.edit', compact('user'));
    }

    public function create()
    {
        return $this->edit();
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('users.index')->with('success', 'Utilisateur ajouté avec succès');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id . '|max:255',
            'password' => 'nullable|min:8',
        ]);
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
    
        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }
    
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }
}
