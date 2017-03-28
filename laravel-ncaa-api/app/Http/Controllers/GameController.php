<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use App\Http\Requests;

class GameController extends Controller
{
  public function index ()
  {
    // GET /games
    // lists all games
  }
  public function create ()
  {
    // POST /games
    // creates new game
  }
  public function show ($id)
  {
    // GET /games/$id
    // shows a single game
  }
  public function update ($id)
  {
    // PUT /games/$id
    // updates a single game
  }
  public function destroy ($id)
  {
    // DELETE /games/$id
    // removes a single game
  }
}
