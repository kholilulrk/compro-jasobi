<?php

use Illuminate\Database\Seeder;

use App\UserClient;

class UserClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new UserClient;
        $user->username = 'mawang';
        $user->password = bcrypt('bucin');
        $user->nama = 'yanto';
        $user->email = 'vio@example.com';
        $user->telp = '0878';
        $user->alamat = 'Ronggowarsito Tengah 12';
        $user->save();
    }
}
