<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rank;


class AdminController extends Controller
{

    public function edit($id)
    {
        $user=User::find($id);
        
          return view('admins.edit', ["rank" => $user]);
    }

    public function update(Request $request, $id)
    {
          
          $rank = User::find($id);
          $rank->rank = $request->get('rank');
          $rank->save();
          
          return redirect('/adminedit');
    }
    
    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        
        return redirect( '/admin');
    }
}
