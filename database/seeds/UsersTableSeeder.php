<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name ="user";
        $user->email = "rootadmin@local.com";
        $user->password = bcrypt("password5");
        $user->save();
        
    }
}
