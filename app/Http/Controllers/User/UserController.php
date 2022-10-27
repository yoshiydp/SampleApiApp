<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function index() {
    return "コントローラからこんにちは";
  }

  public function fetch() {
    $user = User::all();
    return $user;
  }

  // public function post(Request $request){
  //   $user = new User();
  //   $user->user = $request->user;
  //   $user->id = Auth::id();
  //   $user->save();
  //   return response("OK", 200);
  // }

  // public function delete($id){
  //   User::find($id)->delete();
  //   return response("OK", 200);;
  // }

  // public function update(Request $request, $id){
  //   $user = User::find($id);
  //   $user->user = $request->user;
  //   $user->save();
  //   return response("OK", 200);
  // }
}
