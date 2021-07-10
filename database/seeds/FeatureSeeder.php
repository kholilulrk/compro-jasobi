<?php

use Illuminate\Database\Seeder;
use App\Feature;
class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feature = new feature;
        $feature->title = 'Advertising';
        $feature->description = 'ACCOMODATES BUSINESS OWNERS IN PROMOTING AND REFERRING THEIR PRODUCTS.';
        // $Aboutus->icon = 'No Images';
        $feature->save();
        
        $feature = new feature;
        $feature->title = 'Services';
        $feature->description = 'ACCOMODATES BUSINESS TO FULFIL THEIR NEEDS.';
        // $Aboutus->icon = 'No Images';
        $feature->save();
        
        $feature = new feature;
        $feature->title = 'Bizz Opp';
        $feature->description = 'ACCOMODATES BUSINESS IN EXPANDING THEIR BUSINESS WITH A VERY SPECIFIC AGREEMENT OF CAPITAL.';
        // $Aboutus->icon = 'No Images';
        $feature->save();
        
        $feature = new feature;
        $feature->title = 'Investor';
        $feature->description = 'ACCOMODATES BUSINESS PEOPLE WHO NEEDS ADDITIONAL VENTURE CAPITAL.';
        // $Aboutus->icon = 'No Images';
        $feature->save();
        
        $feature = new feature;
        $feature->title = 'Lelang';
        $feature->description = '...';
        // $Aboutus->icon = 'No Images';
        $feature->save();
    }
}
