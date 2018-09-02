@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Books</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Short Summary</th>
        <th>ISBAN</th>
        <th>Category</th>
        <th>subject</th>
        <th>Edition</th>
        <th>Availability</th>
      </tr>
    </thead>
    @foreach($books as $book) {{$customers->id}}
    <tbody>
      <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->bookTitle}}</td>
        <td>{{$book->shortSumary}}</td>
        <td>{{$book->isban}}</td>
        <td>{{$book->category}}</td>
        <td>{{$book->subject}}</td>  
        <td>{{$book->edition}}</td>
        <td>{{$book->availability}}</td>
        <td><a href="{{route('book.edit',['id'=>$books->id])}}" ><button type="button" class="btn btn-primary" >Edit</button></a></td>
        <td><a href=><button type="button" class="btn btn-primary" >Delete!</td></button>
      </tr>
    </tbody>
   @endforeach
  </table>
  
  <a href="{{route('books.create')}}"><button type="button" class="btn btn-primary" >Add New Book</button></a>

    
</div>

@endsection