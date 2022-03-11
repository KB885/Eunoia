<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Comment;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory(10)
            ->has(Comment::factory()->count(5))
            ->create();

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => bcrypt('test'),
        ]);

        $this->call([
            TagSeeder::class,
        ]);
    }
}
