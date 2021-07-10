<?php

use Illuminate\Database\Seeder;
use App\Aboutus;
class AboutusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Aboutus = new Aboutus;
        $Aboutus->title = 'SnY';
        $Aboutus->author = 'Kholilul & Rizaldi';
        $Aboutus->short_description = 'Big project';
        $Aboutus->description = 'Perusahaan jasa melalui aplikasi atau platform modern dan terpercaya. 
                                Berdiri pada agustus 2019, asal mula berdirinya 
                                perusahaan JaSoBi ini karena banyaknya pengalaman bertemu dengan 
                                para marketing dilapangan yang memiliki peluang untuk mempertemukan antara pemilik 
                                bisnis dan peminat bisnis akan tetapi banyak tidak terjadinya transaksi 
                                dikarenakan hal "apapun itu" diantara pemilik dan peminat bisnis serta pembagian 
                                komisi untuk marketing, jadi dengan adanya JaSoBi tidak usah diragukan 
                                lagi untuk bisa diandalkan dan memverifikasi benar adanya bisnis tersebut, sehingga 
                                bisa membuat penghematan waktu dan biaya yang dilakukan selama ini supaya ada 
                                terjadinya transaksi hanya dengan membuka iklan digital di website atau apps JaSoBi, 
                                untuk menambahkan kelengkapan pengiklanan kita juga mengadakan iklan 
                                digital dengan target pemasaran di tempat-tempat keramaian untuk pemasangan (DOOH) 
                                Digital Out Of Home LCD screen';
        $Aboutus->icon = 'No Images';
        $Aboutus->logo = 'No Images';
        $Aboutus->logo_grayscale = 'No Images';
        $Aboutus->logo_feature = 'No Images';
        $Aboutus->save();
    }
}
