<?php
// app/database/seeds/UserTableSeeder.php
class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('admins')->delete();
    User::create(array(
        
        'user_name' =>'ashly',
        'password' => Hash::make('ashly'),
    ));
}

}