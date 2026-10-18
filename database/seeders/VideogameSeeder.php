<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Seeder;

class VideogameSeeder extends Seeder
{
    public function run(): void
    {
        Videogame::create(['title' => 'Minecraft', 'developer' => 'Mojang Studios', 'genre' => 'Sandbox', 'year' => 2011]);
        Videogame::create(['title' => 'Valorant', 'developer' => 'Riot Games', 'genre' => 'Shooter', 'year' => 2020]);
        Videogame::create(['title' => 'Genshin Impact', 'developer' => 'HoYoverse', 'genre' => 'RPG', 'year' => 2020]);
        Videogame::create(['title' => 'Mobile Legends: Bang Bang', 'developer' => 'Moonton', 'genre' => 'MOBA', 'year' => 2016]);
        Videogame::create(['title' => 'Stardew Valley', 'developer' => 'ConcernedApe', 'genre' => 'Simulation', 'year' => 2016]);
        
    }
}