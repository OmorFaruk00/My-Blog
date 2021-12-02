@extends('admin/layout')
@section("container")
<div class="d-flex justify-content-between mt-3 mb-3">
  <h2>All Post</h2>
  <a class="btn btn-primary" href="{{url('add_post')}}">Add Post</a>  
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Short Desc</th>
        <th>Post Date</th>        
        <th>Image</th>
        <th>Action</th>        
      </tr>
    </thead>
    <tbody>
      @foreach($data as $list)
      <tr>
        <td>{{$list->id}}</td>
        <td>{{$list->title}}</td>
        <td>{{$list->short_desc}}</td>
        <td>{{$list->added_on}}</td>
        <td>{{$list->image}}</td> 
        <td>
          <a href="{{route('post_update',['id'=>$list->id])}}" class="btn btn-primary">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
        </td>  
        
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection