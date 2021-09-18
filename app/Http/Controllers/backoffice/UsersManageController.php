<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = DB::table('users')->get();

        return view('backoffice.users_manage', ['users' => $users]);
    }
    public function deleteUser($id)
    {
        
    }
    public function updateUser(Request $request,$id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('backoffice.user_update', ['user' => $user]);
        if($request->isMethod('post')){
            $affected = DB::table('users')
              ->where('id', $id)
              ->update(['name' => $request->input('name'),
                        'email' => $request->input('email')]);
        }
    }
}
