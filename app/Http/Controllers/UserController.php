<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        $query = DB::select("select get_user_count()");
        $userCount = $query[0]->get_user_count;

        return view('users.index', compact('users','userCount'));
    }
}
