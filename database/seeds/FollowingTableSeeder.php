<?php

use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Int_;

class FollowingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('following_users')->insert([
            'user1' => Int_::value(1),
            'user2' => Int_::value(2),
        ]);
    }
}
