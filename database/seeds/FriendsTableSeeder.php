<?php

use Illuminate\Database\Seeder;
use App\Friend;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $friend = Friend::updateOrCreate(
            ['user_id' => '1', 'friend_id' => '2']);

        $friend = Friend::updateOrCreate(
            ['user_id' => '1', 'friend_id' => '3']);

        $friend = Friend::updateOrCreate(
            ['user_id' => '1', 'friend_id' => '4']);

        $friend = Friend::updateOrCreate(
            ['user_id' => '2', 'friend_id' => '1']);

        $friend = Friend::updateOrCreate(
            ['user_id' => '2', 'friend_id' => '3']);

        $friend = Friend::updateOrCreate(
            ['user_id' => '3', 'friend_id' => '1']);

        $friend = Friend::updateOrCreate(
            ['user_id' => '3', 'friend_id' => '4']);

        $friend = Friend::updateOrCreate(
            ['user_id' => '4', 'friend_id' => '1']);
    }
}
