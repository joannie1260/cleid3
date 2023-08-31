<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;



class AdminController extends Controller
{


    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.admin-edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.users', $id)->with('success', 'User updated successfully');
    }


    public function listUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function updateAllUsers(Request $request)
    {
        foreach ($request->input('users') as $userData) {
            $user = User::findOrFail($userData['id']);
            $user->update($userData);
        }

        return redirect()->route('admin.users')
            ->with('success', 'Utilisateurs mis à jour avec succès.');
    }
}
