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

      return \App\Accomplishment::create([
        'description' => $description,
        'date' => $date,
        'coffees' => 0,
        'beers' => 0,
        'user_id' => $user_id
      ]);
    }

    public function postType($id) {
      $type = \Input::get('type') . 's';

      $acc = \App\Accomplishment::find($id);

      if($acc) {
        $acc->{$type} = $acc->{$type} + 1;
        $acc->save();
        return $acc; 
      }

    }
}
