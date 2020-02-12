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
                    These are all the registered users :  
                    <br><br>              
                    <?php
                    $users = Auth::user()->get()
                    ?>
        
          <table class="table">
        <thead>
            <tr>
<<<<<<< HEAD
                <td>Nom</td>
                <td>Prenom</td>
                <td>Nom</td>
                <td>Permission</td>
=======
                <td>User Name</td>
                <td>Firstname</td>
                <td>Name</td>
                <td>Rank</td>
>>>>>>> Last commit
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td><a href="{{ route('skills.show', $user->id) }}">{{$user->name}}</a></td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->rank}}</td>
<<<<<<< HEAD
                    <td><a href="{{ route('rank.edit', $user->id) }}">Edit</a></td>
=======
                    <td><a  class="btn btn-warning" href="{{ route('admins.edit', $user->id) }}">Edit</a></td>  
                    <td>
                      <form action="{{ route('admins.destroy', $user->id) }}"method="post">
                        @csrf
                        @method('DELETE')          
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                    </td>        
                    
>>>>>>> Last commit
                </tr>
            @endforeach
        </tbody>
    </table>

 @endsection