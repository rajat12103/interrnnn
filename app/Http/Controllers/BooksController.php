<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use Auth;

class BooksController extends Controller
{
     public function addbooks(Request $request){

    	if($request->ismethod('post')){
    		$data= $request->all();
    		$book= new Books;
    		$book->user_id= Auth::user()->id;
    		$book->book_name= $data['book_name'];
    		$book->book_author= $data['book_author'];
    		$book->book_price= $data['book_price'];
    		$book->save();
    		return redirect('/view-books')->with('flash_message_success','Book Added Successfully');
    	}
    	
    	return view('admin.books.add_book');
    }

    public function viewbooks(){
        $books= Books::where('user_id', Auth::user()->id)->get();;
        return view('admin.books.view_book')->with(compact('books'));
    }

    public function editBooks(Request $request, $id=null){
        if($request->ismethod('post')){
            $data= $request->all();
            Books::where(['id'=>$id])->update(['book_name'=>$data['book_name'], 'book_author'=>$data['book_author'], 'book_price'=>$data['book_price'] ]);
            return redirect('/view-books')->with('flash_message_success','Books Updated Successfully!!');
        }
       
        $BookDetails= Books::where(['id'=>$id ])->first();
        return view('admin.books.edit_book')->with(compact('BookDetails'));
    }

    public function deletebooks($id=null){
        Books::where(['id'=>$id])->delete();
        
        return redirect()->back()->with('flash_message_success', 'Book Deleted Successfully!!');
    }
}
