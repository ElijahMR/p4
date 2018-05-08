<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        DB::table('friends')->insert(
            ['user_id' => '1', 'friend_id' => '2', 'created_at' => $now, 'updated_at' => $now]);

        DB::table('friends')->insert(
            ['user_id' => '1', 'friend_id' => '3', 'created_at' => $now, 'updated_at' => $now]);

        DB::table('friends')->insert(
            ['user_id' => '1', 'friend_id' => '4', 'created_at' => $now, 'updated_at' => $now]);

        DB::table('friends')->insert(
            ['user_id' => '2', 'friend_id' => '1', 'created_at' => $now, 'updated_at' => $now]);

        DB::table('friends')->insert(
            ['user_id' => '2', 'friend_id' => '3', 'created_at' => $now, 'updated_at' => $now]);

        DB::table('friends')->insert(
            ['user_id' => '3', 'friend_id' => '1', 'created_at' => $now, 'updated_at' => $now]);

        DB::table('friends')->insert(
            ['user_id' => '3', 'friend_id' => '4', 'created_at' => $now, 'updated_at' => $now]);

        DB::table('friends')->insert(
            ['user_id' => '4', 'friend_id' => '1', 'created_at' => $now, 'updated_at' => $now]);
    }
}
