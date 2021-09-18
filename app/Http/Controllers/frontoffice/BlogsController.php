<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function addBlog(){
        return view('frontoffice.add_blog');
    }
}
