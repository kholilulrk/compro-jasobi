<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->nama = 'yanto';
        $admin->email = 'pradana@gmail.com';
        $admin->username = 'mawang';
        $admin->password = bcrypt('123');
        $admin->save();

        $admin = new Admin;
        $admin->nama = 'biksu';
        $admin->email = 'pradana@gmail.com';
        $admin->username = 'ilul';
        $admin->password = bcrypt('321');
        $admin->save();
    }
}
