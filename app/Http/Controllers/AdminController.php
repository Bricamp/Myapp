<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin')->only(['viewUsers']);
    }

    public function viewUsers(Request $request)
    {
        $users = User::paginate(100);
        return view("viewusers")->with(['users' => $users ]);
    }
}
