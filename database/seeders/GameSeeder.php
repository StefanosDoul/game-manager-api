<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\User;

class GameSeeder extends Seeder {
    public function run() {
        $user = User::firstOrCreate([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        Game::create([
            'user_id' => $user->id,
            'title' => 'Cyberpunk 2077',
            'description' => 'Open-world RPG',
            'release_date' => '2020-12-10',
            'genre' => 'RPG',
        ]);
    }
}
