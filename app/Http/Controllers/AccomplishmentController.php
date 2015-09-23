<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccomplishmentController extends Controller
{
    public function getIndex() {
      return \App\Accomplishment::with('user')->get();
    }

    public function postCreate() {
      $date = \Input::get('date');
      $description = \Input::get('description');
      $user_id = \Input::get('user_id');

      return Accomplishment::create([
        'description' => $description,
        'date' => $date,
        'coffees' => 0,
        'beers' => 0,
        'user_id' => $user_id
      ]);
    }
}
