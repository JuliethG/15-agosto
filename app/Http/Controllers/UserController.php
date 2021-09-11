<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
       $users = User::paginate(10);
       // select * from users
       return view('users.index',compact('users'));
   }

   public function create()
   {
       return view('users.create');
   }
   // Detalles por ID
   public function show($id)
   {
       $users = User::find($id);
       //select * from users where id = ?
       return view('users.show',compact('users'));
   }

   public function store(Request $request)
   {
       $users = User::create([
           'name'=> $request->input('name'),
           'lastname'=> $request->input('lastname'),
           'email'=> $request->input('email')
       ]);
       return redirect('users');
   }

   public function destroy($id)
   {
       $users = User::find($id)->delete();
       //Delete from users where id = ?
       return redirect('users');
   }

   public function edit($id)
   {
       $users = User::find($id);
       return view('users.edit', compact('users'));
   }

   public function update(Request $request, $id)
   {
       $users = User::find($id)->update([
          'name'=>$request->input('name'),
          'lastname'=>$request->input('lastname'),
           'email'=>$request->input('email')
       ]);
       Return redirect('users')->with('status', 'Se ha actualizado correctamente');
   }
}
