<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        $top3posts=DB::table('posts')->join('post_types','posts.post_type_id','=','post_types.id')
            ->join('users','posts.user_id','=','users.id')
            ->select('posts.*','post_type_name','name')
            ->orderBy('view','desc')->take(3)->get();
        $posts=DB::table('posts')->join('post_types','posts.post_type_id','=','post_types.id')
            ->join('users','posts.user_id','=','users.id')
            ->select('posts.*','post_type_name','name')
            ->orderBy('created_at','desc')->paginate(10);
        $menu = DB::table('categories')->get();
        $categories = DB::table('categories')->get();
        return view('app/home',['top3posts'=>$top3posts,'posts'=>$posts,'menu'=>$menu,'categories'=>$categories]);
    }

}
