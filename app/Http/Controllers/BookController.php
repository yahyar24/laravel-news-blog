<?php

namespace App\Http\Controllers;
use App\Book;
use Session;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.index')->with('books', Book::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('single');
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
            'name' => 'required|max:255',
            'last_name' => 'required',
            'phone' => 'required',
            'cheak_one' => 'required',
            'cheak_last' => 'required',
            'number_man' => 'required',
            'date_one'  => 'required',
            'date_last'  => 'required'
            
        ]);

        Book::create([
            'name' => $request->name,
            'last_name'=>$request->last_name,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'cheak_one' =>$request->cheak_one,
            'cheak_last' =>$request->cheak_last,
            'number_man' =>$request->number_man,
            'number_ch' =>$request->number_ch,
            'date_one' =>$request->date_one,
            'date_last' =>$request->date_last,
            'message' =>$request->message,
        ]);

        
        Session::flash('success' ,'تم الحجز بنجاح');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

     
        $book->delete();
   
           Session::flash('success', 'You successfully deleted the message.');
   
        return redirect()->back();
       }
    }

