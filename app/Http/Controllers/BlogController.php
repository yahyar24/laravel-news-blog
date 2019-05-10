<?php

namespace App\Http\Controllers;
use App\category;
use App\Setting;
use App\Post;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      return view('blogpost')
      ->with('title', Setting::first()->site_name)
      ->with('categories' , Category::take(5)->get())
      ->with('first_post' , Post::orderBy('created_at','desc')->first())
        ->with('second_post' , Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
        ->with('third_post' , Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
        ->with('fourth_post' , Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
        ->with('five_post' , Post::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
        ->with('sexes_post' , Post::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first())
        ->with('settings', Setting::first())
        ->with('career', Category::find(2))
        ->with('tutoirals',Category::find(3));
        
    }

    public function singlePost($slug)

    {
        $post = Post::where('slug', $slug)->first();
        
        $next_id = Post::where('id' , '>' , $post->id)->min('id');
        
        $prev_id = Post::where('id' , '<' , $post->id)->max('id');

        return view('single')->with('post' , $post)
        ->with('title', $post->title)
        ->with('settings', Setting::first())
        ->with('categories' , Category::take(5)->get() )
        ->with('next', Post::find($next_id))
         ->with('prev' , Post::find($prev_id))
        ->with('tags', Tag::all());
    }
}
