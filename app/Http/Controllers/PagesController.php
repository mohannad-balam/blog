<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $recentsPosts = Post::orderBy('created_at', "DESC")->paginate(5);
        return view('index', compact('recentsPosts'));
    }
}
