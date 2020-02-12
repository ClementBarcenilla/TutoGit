@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
<<<<<<< HEAD
        <div class="col-md-8">
=======
  
>>>>>>> Last commit
        
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD
                    These are all the skills of the users :  
=======
                         <div class="row justify-content-center">
                    These are all the skills of the selected user :  
>>>>>>> Last commit
                    <br><br>              
                    <?php
                    $users = Auth::user()->get()
                    ?>
        
          <table class="table">
        <thead>
            <tr>
<<<<<<< HEAD
                <td>Prenom Utilisateur</td>
                <td>Nom Utilisateur</td>
                <td>Nom Competence</td>
                <td>Niveau Competence</td>
=======
                <td>Firstname</td>
                <td>Name</td>
                <td>Skill</td>
                <td>Skill Level</td>
                <td>Actions</td>
>>>>>>> Last commit
            </tr>
        </thead>
        <tbody>
            @foreach($user->skills as $skill)
                <tr>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$skill->name}} </td>
                    <td>{{$skill->pivot->level}}</td>
<<<<<<< HEAD
=======
                    <td>         
                        <button class="btn btn-success" type="submit">Add</button>
                    </td>
                    <td>
                      <button  class="btn btn-warning">Edit</button>
                    </td>
                    <td>         
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </td>

>>>>>>> Last commit
                </tr>
            @endforeach
        </tbody>
    </table>
<<<<<<< HEAD
    <button type="submit" name="action" class="btn btn-secondary" value="return" onclick="history.go(-1);">Back</button>
=======
        <a  class= "btn btn-secondary"  class = "btn float-right" href="/admin">Back</a>
>>>>>>> Last commit
 @endsection