<?php
use App\User;
use Illuminate\Validation\Validator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create([
        'name'     => 'Christopher Vistal',
        'username' => 'tooshort06',
        'email'    => 'christophervistal24@gmail.com',
        'password' => Hash::make('longbak22cute'),
    ]);
}

}