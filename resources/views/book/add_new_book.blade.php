@extends('layouts.app')

@section('content')
<div class="container">
 <div class= "row justify-content-center">
  <div class="col-md-8">
    <div calss="card">
    <h3>Add New Book</h3>
    
  <form action="/action_page.php">
    <div class="form-group">
      <label for="Book Title">Book Title</label>
      <input type="text" class="form-control" id="bookTitle" placeholder="Book Title" name="bookTitle">
    </div>
    <div class="form-group">
      <label for="Short Summary">Short Summary:</label>
      <textarea cols = "91" rows="10" name="shortSumary" placeholder ="Short Summary"></textarea>
    </div>
    <div class="form-group">
      <label for="ISBAN">ISBAN</label>
      <input type="number" class="form-control" id="isban" placeholder="ISBAN " name="isban">
    </div>
    <div class="form-group">
      <label for="Availability">Availability</label>
      <select name="availability" id="availability">
      <option value="0">1
      </option>
      <option value="1">0</option>
      </select>
    </div>
    <div class="form-group">
      <label for="Category">Category</label>
      <input type="text" class="form-control" id="category" placeholder="Category " name="category">
    </div>
    <div class="form-group">
      <label for="Subject">Subject</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject " name="subject">
    </div>
    <div class="form-group">
      <label for="edition">Edition</label>
      <input type="text" class="form-control" id="edition" placeholder="Edition " name="edition">
    </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
  </form>

 </div>
  </div>  
  </div>
</div>

@endsection