<?php

namespace App\Http\Controllers;
use App\Post;
use App\Setting;
use App\Category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
      return view('gallery')
      ->with('title', Setting::first()->site_name)
      ->with('categories' , Category::take(5)->get())
      ->with('first_post' , Post::orderBy('created_at','desc')->first())
        ->with('second_post' , Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
        ->with('third_post' , Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
        ->with('fourth_post' , Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
        ->with('five_post' , Post::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
        ->with('sexes_post' , Post::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first())
        ->with('settings', Setting::first())
        ->with('gallery', Category::find(4))
        ->with('tutoirals',Category::find(5));
        ;
    }

}
