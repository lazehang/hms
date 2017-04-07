<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Student;
class StdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->user_id = '12';
        $user->email ='admin@admin.com';
        $user->password = bcrypt('admin');

        $student = new Student;
        $student->name = 'Laze';
        $student->contact = '989829332';
        $student->address = 'dharan';
        $student->school = 'Islington';
        $student->father_name = 'John';
        $student->father_contact = '87364';
         $student->profile_pic = 'img.jpg';


        $user->student()->save($student);
    
    }
}
