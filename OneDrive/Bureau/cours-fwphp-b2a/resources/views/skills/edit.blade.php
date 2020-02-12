@extends('layouts.app')

@section('title', 'Update Skill')

@section('content')

<div class="container">
  <div class="row justify-content-center">
            Complete all the required fileds to edit the skill :  
            <br><br>              
            <?php
            $users = Auth::user()->get()
            ?>
  </div>
</div>

  <form method="post" class="form" action="{{ route('skills.update', $skill->id) }}">
  @method('PATCH')
    @csrf
    <div class="container">
      <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name"/>
        <label for="description">Description :</label>
        <input type="text" class="form-control" name="description"/>
        <label for="logo">Logo :</label>
        <input type="text" class="form-control" name="logo"/>
      </div>
      <div class="row"> 
        <div class="col-md-11">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
     <div class="col-md-1">
       <a  class= "btn btn-secondary"  class = "btn float-right" href="/skills">Back</a>
     </div> 
  
@endsection