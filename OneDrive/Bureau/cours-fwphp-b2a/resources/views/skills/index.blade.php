@extends('layouts.app')

@section('title', 'Skill Table')

@section('content')
 <div class="container">
     <div class="row justify-content-center">
     These are all the skills available :  
     <br><br>  
  <table class="table">
    <thead>
      <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Logo</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tbody>
      @foreach($skills as $skill)
        <tr>
          <td>{{$skill->id}}</td>
          <td>{{$skill->name}}</td>
          <td>{{$skill->description}}</td>
          <td>{{$skill->logo}}</td>
          <td><a class="btn btn-warning" href="{{ route('skills.edit', $skill->id) }}">Edit</a></td>
          <td>
              <form action="{{ route('skills.destroy', $skill->id) }}"method="post">
                @csrf
                @method('DELETE')          
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
          </td>       
        </tr>
      @endforeach
    </tbody>
  </table>
  <div>
  <button class="btn btn-primary float-left" onclick="window.location.href = 'http://barcenilla-laravel.local/skills/create';">Create Skill</a>
  </div>
  
@endsection