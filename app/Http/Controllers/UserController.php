<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {
  
  public function postLogin() {
    $token = '1kcna4n93-mc29023hfhfb3497cb3287s';
    $username = \Input::get('username');
    $password = \Input::get('password');

    if(\Auth::validate(['username' => $username, 'password' => $password])) {
      $user = \App\User::where('username', $username)->first();
      if($user) {
        $userArray = $user->toArray();
        $userArray['api_key'] = $token;
        return $userArray;
      } else {
        return response()->json(['error' => 'Incorrect credentials']);
      }
    }
  }
}
