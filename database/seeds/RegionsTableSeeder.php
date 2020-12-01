<?php

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         Region::create(
              ['psgsCode' => '020000000', 'regDesc' => 'REGION II (CAGAYAN VALLEY)', 'regCode' => '02']
         );

         Region::create(
              ['psgsCode' => '030000000', 'regDesc' => 'REGION III (CENTRAL LUZON)', 'regCode' => '03']
         );

         Region::create(
              ['psgsCode' => '040000000', 'regDesc' => 'REGION IV-A (CALABARZON)', 'regCode' => '04']
         );

         Region::create(
              ['psgsCode' => '170000000', 'regDesc' => 'REGION IV-B (MIMAROPA)', 'regCode' => '17']
         );

         Region::create(
              ['psgsCode' => '050000000', 'regDesc' => 'REGION V (BICOL REGION)', 'regCode' => '05']
         );

         Region::create(
              ['psgsCode' => '060000000', 'regDesc' => 'REGION VI (WESTERN VISAYAS)', 'regCode' => '06']
         );

         Region::create(
              ['psgsCode' => '070000000', 'regDesc' => 'REGION VII (CENTRAL VISAYAS)', 'regCode' => '07']
         );

         Region::create(
              ['psgsCode' => '080000000', 'regDesc' => 'REGION VIII (EASTERN VISAYAS)', 'regCode' => '08']
         );

         Region::create(
              ['psgsCode' => '090000000', 'regDesc' => 'REGION IX (ZAMBOANGA PENINSULA)', 'regCode' => '09']
         );

         Region::create(
              ['psgsCode' => '100000000', 'regDesc' => 'REGION X (NORTHERN MINDANAO)', 'regCode' => '10']
         );

         Region::create(
              ['psgsCode' => '110000000', 'regDesc' => 'REGION XI (DAVAO REGION)', 'regCode' => '11']
         );

         Region::create(
              ['psgsCode' => '120000000', 'regDesc' => 'REGION XII (SOCCSKSARGEN)', 'regCode' => '12']
         );

         Region::create(
              ['psgsCode' => '130000000', 'regDesc' => 'NATIONAL CAPITAL REGION (NCR)', 'regCode' => '13']
         );

         Region::create(
              ['psgsCode' => '140000000', 'regDesc' => 'CORDILLERA ADMINISTRATIVE REGION (CAR)', 'regCode' => '14']
         );

         Region::create(
              ['psgsCode' => '150000000', 'regDesc' => 'AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)', 'regCode' => '15']
         );

         Region::create(
              ['psgsCode' => '160000000', 'regDesc' => 'REGION XIII (Caraga)', 'regCode' => '16']
         );
     }
}
