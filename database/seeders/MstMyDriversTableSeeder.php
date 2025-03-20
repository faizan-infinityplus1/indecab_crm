<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstMyDriversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('mst_my_drivers')->delete();
        
        DB::table('mst_my_drivers')->insert(array (
            0 => 
            array (
                'id' => 3,
                'admin_id' => 1,
                'name' => 'Adil Patel',
                'image' => 'mydriver-images/xE8J07zRJnbAC4NZtoRG3oOPWqgZQz469FbGBTyB.jpg',
                'mobile_no' => '7738373502',
                'alternate_mobile_no' => '8669059810',
                'pan_no' => 'CJEPP7913B',
                'aadhar_no' => '800921478297',
                'birth_date' => '2025-01-01',
                'joining_date' => '2022-02-20',
                'salary_per_month' => 16000,
                'daily_wages' => '533',
                'branches' => NULL,
                'daily_working_hours' => '10:00',
                'working_hours_start' => '08:00',
                'working_hours_end' => '18:00',
                'daily_allowance' => NULL,
                'allowance_over_time' => 50,
                'allowance_outstation_per_day' => 400,
                'allowance_outstation_overnight' => NULL,
                'sunday_allowance' => NULL,
                'early_start_allowance' => NULL,
                'night_allowance' => NULL,
                'extra_duty_second' => 300,
                'extra_duty_third' => NULL,
                'extra_duty_fourth' => NULL,
                'extra_duty_fifth' => NULL,
                'license_no' => NULL,
                'license_valid_upto' => NULL,
                'police_card_number' => NULL,
                'police_card_expiry_date' => NULL,
                'police_veri_no' => NULL,
                'police_veri_expiry_date' => NULL,
                'badge_number' => NULL,
                'badge_expiry_date' => NULL,
                'additional_info' => NULL,
                'driver_code' => NULL,
                'is_contract' => 0,
                'is_covid_vacinated' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-09 13:35:14',
                'updated_at' => '2025-03-09 13:35:14',
            ),
        ));
        
        
    }
}