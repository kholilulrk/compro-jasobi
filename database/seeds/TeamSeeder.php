<?php

use Illuminate\Database\Seeder;
use App\Team;
class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = new Team;
        $team->nama_lengkap = 'Sandy Eduward M, S.Kom';
        $team->profesi = 'Founder';
        $team->no_telp = '0817447989';
        $team->email = 'sandyglobalnetwork@gmail.com';
        $team->img = 'No Image';
        $team->save();

        $team = new Team;
        $team->nama_lengkap = 'Moch Alfin';
        $team->profesi = 'Android Developer';
        $team->no_telp = '083830527078';
        $team->email = 'mochalfafa@gmail.com';
        $team->img = 'No Image';
        $team->save();

        $team = new Team;
        $team->nama_lengkap = 'Kholilul Rohman Kurniawan';
        $team->profesi = 'Website Developer';
        $team->no_telp = '082332811759';
        $team->email = 'kholilulrk98@gmail.com';
        $team->img = 'No Image';
        $team->save();

        $team = new Team;
        $team->nama_lengkap = 'Rizaldi Pradana';
        $team->profesi = 'Website Developer';
        $team->no_telp = '082241316527';
        $team->email = 'pradanarizaldi84@gmail.com';
        $team->img = 'No Image';
        $team->save();
    }
}
