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
            ['user1_id' => '1', 'user2_id' => '2']);

        $friend = Friend::updateOrCreate(
            ['user1_id' => '1', 'user2_id' => '3']);

        $friend = Friend::updateOrCreate(
            ['user1_id' => '1', 'user2_id' => '4']);

        $friend = Friend::updateOrCreate(
            ['user1_id' => '2', 'user2_id' => '3']);

        $friend = Friend::updateOrCreate(
            ['user1_id' => '3', 'user2_id' => '4']);
    }
}
