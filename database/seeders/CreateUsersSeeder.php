<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'fname'=>'user',
               'lname'=>'Admin',
               'phone'=>'639754144214',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'email_verified_at'=>'2022-09-11 04:54:07',
               'password'=> bcrypt('123456'),
            ],
            [
                'fname'=>'user',
                'lname'=>'Doctor',
                'phone'=>'639754144214',
               'email'=>'doctor@gmail.com',
               'type'=> 2,
               'email_verified_at'=>'2022-09-11 04:54:08',
               'password'=> bcrypt('123456'),
            ],
            [
                'fname'=>'user',
               'lname'=>'Secretary',
               'phone'=>'639754144214',
                'email'=>'secretary@gmail.com',
                'type'=> 3,
                'email_verified_at'=>'2022-09-11 04:54:09',
                'password'=> bcrypt('123456'),
             ],
            [
                'fname'=>'user',
                'lname'=>'Patient',
                'phone'=>'639754144214',
               'email'=>'patient@gmail.com',
               'type'=>0,
               'email_verified_at'=>'2022-09-11 04:55:07',
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}