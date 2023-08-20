<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;

class AdminController extends Controller
{
    public function editUser($id)
{
    $user = User::findOrFail($id);
    return view('admin.edit_user', compact('user'));
}

public function updateUser(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->all());
    return redirect()->route('admin.users.edit', $id)->with('success', 'User updated successfully');
}
}
