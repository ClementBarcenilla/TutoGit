@extends('layouts.app')

@section('title', 'Update Rank')

@section('content')

<div class="container">
  <div class="row justify-content-center">
            Select the rank you want the user to have :  
            <br><br>              
            <?php
            $users = Auth::user()->get() AND $rankuser = Auth::user() -> where('rank', '=', 'admin');
            ?>
  </div>
</div>
<div class="container">
  <form method="post" class="form" action="{{ route('admins.update', $rank->id) }}">
  @method('PATCH')
    @csrf
    <div class="container">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="1" value="admin" checked>
        <label class="form-check-label" for="1">Admin</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="2" value="user">
        <label class="form-check-label" for="2">User</label>
      </div>
        <br>
        <div class="row"> 
    <div class="col-md-11">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
     <div class="col-md-1">
    <a style="text-decoration:none;" class = "btn  btn-secondary float-right" href="/admin">Back</a>
     </div> 
  
  
  

@endsection