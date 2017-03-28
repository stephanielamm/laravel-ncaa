<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use App\Http\Requests;

class GameController extends Controller
{
    public function foo()
    {
      return Response::json('Stephanie');
    }
}
