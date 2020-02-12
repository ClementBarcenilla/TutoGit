@extends('layouts.app')

@section('title', 'Create Skill')

@section('content')
<div class="container">

  <form method="post" class="form" action="{{ route('skills.store') }}">
    @csrf
<<<<<<< HEAD

=======
>>>>>>> Last commit
      <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name"/>
        <label for="description">Description :</label>
        <input type="text" class="form-control" name="description"/>
        <label for="logo">Logo :</label>
        <input type="text" class="form-control" name="logo"/>        
      </div>
<<<<<<< HEAD
      
      <button type="submit" class="btn btn-primary">Submit</button>
      
  </form>
  <button type="submit" name="action" class="btn btn-secondary float-right" value="return" onclick="history.back()";>Back</button>
=======
    <div class="row"> 
    <div class="col-md-11">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
  </form> 
   <div class="col-md-1">
    <a  class= "btn btn-secondary"  class = "btn float-right" href="/skills">Back</a>
   </div> 

   
  </div>
>>>>>>> Last commit
</div>
@endsection