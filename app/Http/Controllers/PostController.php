<?php

namespace App\Http\Controllers;

use App\Tag;
use Auth;

use App\Post;
use Session;
use App\category;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= category::all();

        $tags = Tag::all();
        if ($categories->count()==0 || $tags->count() == 0)
        {
            Session::flash('info', 'you must have some categories and tags before attempting to creat a post.');
            return redirect()->back();
        }


       return view('admin.posts.create')->with('categories', $categories)
           ->with('tags', $tags);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'featured' => 'required|image',
            'body' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
            
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts', $featured_new_name);

        $post = Post::create([
            'title' => $request-> title,
            'body'=>$request->body,
            'featured' =>'uploads/posts/' .$featured_new_name,
            'category_id' =>$request->category_id,
            'slug' => str_slug($request->title),
            'user_id' =>Auth::id()
        ]);

        $post->tags()->attach($request->tags);


        Session::flash('success' ,'Post created successfully.');

       return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =Post::find($id);

        return view('admin.posts.edit')->with('post', $post)->with('categories', category::all())
            ->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $this->validate($request,[
        'title' => 'required',
        'body' => 'required',
         'category_id' => 'required'
     ]);
        $post =Post::find($id);


        if($request->hasFile('featured')){

            $featured = $request ->featured;

            $featured_new_name = time(). $featured->getClientOriginalName();

            $featured ->move('uploads/posts' , $featured_new_name);

            $post ->featured =  'uploads/posts/' . $featured_new_name;
     }

    $post ->title = $request->title;
        $post->body = $request->body;
        $post->category_id =$request->category_id;

        $post->save();

        $post->tags()->sync($request->tags);

        Session::flash('success' , 'post updated successfully');

        return redirect()-> route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::withTrashed()->where('id',$id)->first();

        $post->forceDelete();

        Session::flash('success', 'Post deleted premlitly');

        return redirect()->back();



    }



    public  function kill($id){
        $post = Post::withTrashed()->where('id',$id)->first();

        $post->delete();

        Session::flash('success', 'Post treahed premlitly');

        return redirect()->back();



    }
    public function trashed(){
        $posts = Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('posts', $posts);

    }
    public function restore($id){
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();
        Session::flash('success', 'post restore successfully');

        return redirect()->route('posts');

    }

}
