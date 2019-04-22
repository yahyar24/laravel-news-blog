<?php

namespace App\Http\Controllers;
use App\Category;
use App\Setting;
use App\Post;


use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact')
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
}
