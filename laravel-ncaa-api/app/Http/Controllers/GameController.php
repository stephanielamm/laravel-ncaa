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
    $games = Game::all();
    return Response::json($games);
  }
  public function create (Request $request)
  {
    // POST /games
    // creates new game
    Game::create($request->all());
    return Response::json(['created'=>true]);
  }
  public function show ($id)
  {
    // GET /games/$id
    // shows a single game
    $game = Game::find($id);
    return Response::json($game);
  }
  public function update ($id)
  {
    // PUT /games/$id
    // updates a single game
    $game = Game::find($id);
    
  }
  public function destroy ($id)
  {
    // DELETE /games/$id
    // removes a single game
  }
}
