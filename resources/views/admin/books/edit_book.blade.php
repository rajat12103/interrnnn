@extends('admin.layouts.master')
@section('title','Add Book')
@section('content')

<!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-pencil"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Book</h1>
                  <small>Edit Book</small>
               </div>
            </section>
             @if(Session::has('flash_message_error'))
                <div class="alert alert-sm alert-danger alert-block" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{!! session('flash_message_error') !!}</strong>
                </div>
                @endif

                 @if(Session::has('flash_message_success'))
                <div class="alert alert-sm alert-success alert-block" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div>
                @endif
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="{{url('/view-books')}}"> 
                              <i class="fa fa-eye"></i> View Books </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" action="{{url('/edit-Books/'.$BookDetails->id)}}" method="post">
                              {{csrf_field()}}
                              <div class="form-group">
                                 <label>Book Name</label>
                                 <input type="text" class="form-control" value="{{$BookDetails->book_name}}" name="book_name" id="book_name" required>
                              </div>
                              <div class="form-group">
                                 <label>Book Author</label>
                                 <input type="text" class="form-control" value="{{$BookDetails->book_author}}" name="book_author" id="book_author" required>
                              </div>
                              <div class="form-group">
                                 <label>Book Price</label>
                                 <input type="text" class="form-control" value="{{$BookDetails->book_price}}" name="book_price" id="book_price" required>
                              </div>
                              
                              <div class="reset-button">
                                 <input type="submit" class="btn btn-success" value="Edit Book" name="">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>

@endsection