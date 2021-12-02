@extends('admin/layout')
@section("container")
<div class="col-md-6 offset-md-3 mt-4">
    <form id="" action="post_submit" method ="post" class="jumbotron">
      <h4 class="text-center">Add Post</h4> 
      @csrf
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title">
      </div>
      <div class="form-group">
        <label>Sort Desc</label>
        <input type="text" class="form-control" name="short_desc">
      </div>
      <div class="form-group">
        <label>Long Desc</label>
        <input type="text" class="form-control" name="long_desc">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="text" class="form-control" name="image">
      </div>
      <div class="form-group">
        <label>Added On</label>
        <input type="date" class="form-control" name="added_on">
      </div>
      <input type="submit" name="login" class="btn btn-primary" value="Submit"/>
         
       
    </form>
  </div>

  @endsection