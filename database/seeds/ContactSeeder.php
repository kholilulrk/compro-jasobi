<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new contact;
        $contact->email = 'sandyglobalnetwork@gmail.com';
        $contact->phone = '+62 817447989';
        $contact->address = 'Wisma Bii, Jl. Pemuda No.60-70, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271, Indonesia';
        $contact->g_map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7844678646125!2d112.74480231477489!3d-7.265351994755773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f96297b733af%3A0xa888362446c769c3!2sMaybank%20Cabang%20Surabaya%20Pemuda!5e0!3m2!1sid!2sid!4v1581857358734!5m2!1sid!2sid" width="100%+" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';
        $contact->save();
    }
}
