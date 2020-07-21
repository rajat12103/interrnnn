@extends('admin.layouts.master')
@section('title','View Books')
@section('content')

<!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-eye"></i>
               </div>
               <div class="header-title">
                  <h1>View Books</h1>
                  <small>Books List</small>
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

            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>View Books</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="{{url('/add-books')}}"> <i class="fa fa-plus"></i> Add Books
                                 </a>  
                              </div>
                              
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="table_id" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>ID</th>
                                       <th>User ID</th>
                                       <th>Book Name</th>
                                       <th>Book Author</th>
                                       <th>Book Price</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@foreach($books as $book)
                                    <tr>
                                       <td>{{$book->id}}</td>
                                       <td>{{$book->user_id}}</td>
                                       <td>{{$book->book_name}}</td>
                                       <td>{{$book->book_author}}</td>
                                       <td>{{$book->book_price}}</td>
                                      
                                       <td> 
                                          <a href="{{url('/edit-Books/'. $book->id)}}" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></button>
                                          <a href="{{url('/delete-Books/'. $book->id)}}" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </button>
                                       </td>
                                    </tr>
                                    @endforeach
                                   
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

@endsection