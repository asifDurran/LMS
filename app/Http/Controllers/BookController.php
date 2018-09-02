<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book.index',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        return view('book.add_new_book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_book = new Book();
        
        $new_book->bookTitle =$request['bookTitle'];
        $project->shortSumary =$request['shortSumary'];
        $project->isban =$request['isban'];
        $project->availability =$request['avialability'];
        $project->category =$request['category'];
        $project->subject =$request['subject'];
        $project->edition =$request['edition'];
        $new_book->save();

        return redirect()->route('books.index');
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
       $book = Book::find($book->id);
       return view('book.edit',['book'=>$book]);

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
        $update_book = Book::where('id',$book->id)->update([
            'bookTitle'=>$request->input('bookTitle'),
            'shortSumary' =>$request ->input('shortSumary'),
            'isban'=>$request ->input('isban'),
            'availability' => $request->input('availability'),
            'category' =>$request ->input('category'),
            'subject' => $request ->input('subject'),
            'edition' =>$request ->input('edition')

        ]);
        if($update_book){
            return redirect()->route('books.index',['book',$book->id]);
        }
        
        return back()->withInput();
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
