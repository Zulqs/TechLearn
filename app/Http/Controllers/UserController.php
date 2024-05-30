<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}