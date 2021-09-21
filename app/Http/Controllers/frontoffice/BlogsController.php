<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = DB::table('blogs')->get();

        return view('frontoffice.blogs', ['blogs' => $blogs]);
    }

    public function addBlog(Request $req){

        if($req->isMethod('post')){

            $user_id=$req->input('id');
            $title=$req->input('title');
            $content=$req->input('content');

            $data=Array(
                'title' =>  $title, 
                'content' => $content,
                'user_id' => $user_id
            );

            DB::table('blogs')->insert($data);

            return redirect('blogs');

        }
        else{
            return view('frontoffice.add_blog');
        }
            
            
    }
}
