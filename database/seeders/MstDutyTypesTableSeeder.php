<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstDutyTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('mst_duty_types')->delete();

        DB::table('mst_duty_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'admin_id' => 1,
                'duty_type' => 'hrKmLocal',
                'duty_name' => '10Hr 80Km',
                'sub_type' => 'select_one',
                'max_hours' => 10,
                'max_km' => 80,
                'max_kmper_day' => NULL,
                'max_hours_per_day' => NULL,
                'total_km' => NULL,
                'max_days' => NULL,
                'total_hours' => NULL,
                'city_limit' => NULL,
                'apply_outside_allowance' => 0,
                'p2p' => 0,
                'g2g' => 0,
                'g_strkmtim' => 0,
                'g_endkmtim' => 0,
                'disdutroute' => 0,
                'created_at' => '2025-03-02 11:08:26',
                'updated_at' => '2025-03-02 11:08:26',
            ),
            1 =>
            array (
                'id' => 2,
                'admin_id' => 1,
                'duty_type' => 'hrKmLocal',
                'duty_name' => '10hr100km',
                'sub_type' => 'select_one',
                'max_hours' => 10,
                'max_km' => 100,
                'max_kmper_day' => NULL,
                'max_hours_per_day' => NULL,
                'total_km' => NULL,
                'max_days' => NULL,
                'total_hours' => NULL,
                'city_limit' => NULL,
                'apply_outside_allowance' => 0,
                'p2p' => 0,
                'g2g' => 0,
                'g_strkmtim' => 0,
                'g_endkmtim' => 0,
                'disdutroute' => 0,
                'created_at' => '2025-03-02 11:08:47',
                'updated_at' => '2025-03-02 11:08:47',
            ),
            2 =>
            array (
                'id' => 3,
                'admin_id' => 1,
                'duty_type' => 'hrKmLocal',
                'duty_name' => '11Hr 110Km',
                'sub_type' => 'select_one',
                'max_hours' => 11,
                'max_km' => 110,
                'max_kmper_day' => NULL,
                'max_hours_per_day' => NULL,
                'total_km' => NULL,
                'max_days' => NULL,
                'total_hours' => NULL,
                'city_limit' => NULL,
                'apply_outside_allowance' => 0,
                'p2p' => 0,
                'g2g' => 0,
                'g_strkmtim' => 0,
                'g_endkmtim' => 0,
                'disdutroute' => 0,
                'created_at' => '2025-03-02 11:09:46',
                'updated_at' => '2025-03-02 11:09:46',
            ),
            3 =>
            array (
                'id' => 4,
                'admin_id' => 1,
                'duty_type' => 'hrKmLocal',
                'duty_name' => '11Hr 80Km',
                'sub_type' => 'select_one',
                'max_hours' => 11,
                'max_km' => 80,
                'max_kmper_day' => NULL,
                'max_hours_per_day' => NULL,
                'total_km' => NULL,
                'max_days' => NULL,
                'total_hours' => NULL,
                'city_limit' => NULL,
                'apply_outside_allowance' => 0,
                'p2p' => 0,
                'g2g' => 0,
                'g_strkmtim' => 0,
                'g_endkmtim' => 0,
                'disdutroute' => 0,
                'created_at' => '2025-03-02 11:11:18',
                'updated_at' => '2025-03-02 11:11:18',
            ),
            4 =>
            array (
                'id' => 5,
                'admin_id' => 1,
                'duty_type' => 'flatRate',
                'duty_name' => '1350 Km',
                'sub_type' => 'select_one',
                'max_hours' => NULL,
                'max_km' => NULL,
                'max_kmper_day' => NULL,
                'max_hours_per_day' => NULL,
                'total_km' => NULL,
                'max_days' => NULL,
                'total_hours' => NULL,
                'city_limit' => NULL,
                'apply_outside_allowance' => 0,
                'p2p' => 0,
                'g2g' => 0,
                'g_strkmtim' => 0,
                'g_endkmtim' => 0,
                'disdutroute' => 0,
                'created_at' => '2025-03-02 11:11:35',
                'updated_at' => '2025-03-02 11:11:35',
            ),
        ));


    }
}
