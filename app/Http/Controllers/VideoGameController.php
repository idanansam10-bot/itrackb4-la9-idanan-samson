<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;

class VideoGameController extends Controller
{
    public function index(Request $request)
    {
        $games = Videogame::all();

        $genre = $request->query('genre', 'all');
        $developer = $request->query('developer', 'all');

        return view('games.index', compact('games', 'genre', 'developer'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'developer' => 'required|in:Mojang Studios,Riot Games,HoYoverse,Moonton,ConcernedApe,Rockstar Games',
            'genre' => 'required|in:Sandbox,Shooter,RPG,MOBA,Simulation,Action',
            'year' => 'required|numeric|min:1900|max:2026'
        ]);

        Videogame::create($data);

        return redirect()->route('games.index')
            ->with('success', 'Video game added successfully.');
    }

    public function show(string $id)
    {
        $game = Videogame::findOrFail($id);

        return view('games.show', ['item' => $game]);
    }

    public function featured()
    {
        $item = Videogame::findOrFail(3);

        return view('games.featured', ['item' => $item]);
    }
}