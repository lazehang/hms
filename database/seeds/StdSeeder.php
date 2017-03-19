<?php

use Illuminate\Database\Seeder;
use App\StdUser;
class StdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('std_users')->insert([
            'std_id' => 1,
            'username' => 'student',
            'password' => bcrypt('secret'),
        ]);
    }
}
