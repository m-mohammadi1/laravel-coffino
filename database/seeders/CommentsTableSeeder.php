<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create();

        $comments = Comment::factory()->count(100)->create([
            'user_id' => $user->id
        ]);

        foreach ($comments as $comment) {
            $user->comments()->save($comment);
        }

    }
}
