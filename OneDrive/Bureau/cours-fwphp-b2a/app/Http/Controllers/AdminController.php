<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rank;

<<<<<<< HEAD
class AdminController extends Controller
{


    public function edit($id)
    {
        $admin = User::all();
        $user=User::find($id);
        
        return view('admin', compact('admin'));
=======

class AdminController extends Controller
{

    public function edit($id)
    {
        $user=User::find($id);
        
          return view('admins.edit', ["rank" => $user]);
>>>>>>> Last commit
    }

    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $request->validate([
          'rank'=>'required',
          ]);
=======
>>>>>>> Last commit
          
          $rank = User::find($id);
          $rank->rank = $request->get('rank');
          $rank->save();
          
          return redirect('/adminedit');
    }
<<<<<<< HEAD
=======
    
    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        
        return redirect( '/admin');
    }
>>>>>>> Last commit
}
