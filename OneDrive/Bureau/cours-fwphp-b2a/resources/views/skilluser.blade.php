@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
  
        
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                         <div class="row justify-content-center">
                    These are all the skills of the selected user :  
                    <br><br>              
                    <?php
                    $users = Auth::user()->get()
                    ?>
        
          <table class="table">
        <thead>
            <tr>
                <td>Firstname</td>
                <td>Name</td>
                <td>Skill</td>
                <td>Skill Level</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($user->skills as $skill)
                <tr>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$skill->name}} </td>
                    <td>{{$skill->pivot->level}}</td>
                    <td>         
                        <button class="btn btn-success" type="submit">Add</button>
                    </td>
                    <td>
                      <button  class="btn btn-warning">Edit</button>
                    </td>
                    <td>         
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
        <a  class= "btn btn-secondary"  class = "btn float-right" href="/admin">Back</a>
 @endsection