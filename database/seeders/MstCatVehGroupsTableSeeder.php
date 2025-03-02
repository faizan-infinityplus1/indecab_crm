<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstCatVehGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('mst_cat_veh_groups')->delete();

        DB::table('mst_cat_veh_groups')->insert(array (
            0 =>
            array (
                'id' => 1,
                'admin_id' => 1,
                'name' => '20 Seater',
                'description' => NULL,
                'image' => NULL,
                'seat_capacity' => NULL,
                'lug_count' => NULL,
                'created_at' => '2025-03-02 10:50:56',
                'updated_at' => '2025-03-02 10:50:56',
            ),
            1 =>
            array (
                'id' => 2,
                'admin_id' => 1,
                'name' => '25 Seater A/C',
                'description' => NULL,
                'image' => NULL,
                'seat_capacity' => NULL,
                'lug_count' => NULL,
                'created_at' => '2025-03-02 10:51:02',
                'updated_at' => '2025-03-02 10:51:02',
            ),
            2 =>
            array (
                'id' => 3,
                'admin_id' => 1,
                'name' => '35 Seater Bus',
                'description' => NULL,
                'image' => NULL,
                'seat_capacity' => NULL,
                'lug_count' => NULL,
                'created_at' => '2025-03-02 10:51:10',
                'updated_at' => '2025-03-02 10:51:10',
            ),
            3 =>
            array (
                'id' => 4,
                'admin_id' => 1,
                'name' => '400 Km',
                'description' => NULL,
                'image' => NULL,
                'seat_capacity' => NULL,
                'lug_count' => NULL,
                'created_at' => '2025-03-02 10:51:18',
                'updated_at' => '2025-03-02 10:51:18',
            ),
            4 =>
            array (
                'id' => 5,
                'admin_id' => 1,
                'name' => '400Km',
                'description' => NULL,
                'image' => NULL,
                'seat_capacity' => NULL,
                'lug_count' => NULL,
                'created_at' => '2025-03-02 10:51:38',
                'updated_at' => '2025-03-02 10:51:38',
            ),
            5 =>
            array (
                'id' => 6,
                'admin_id' => 1,
                'name' => '45 A C Seater Bus',
                'description' => NULL,
                'image' => NULL,
                'seat_capacity' => NULL,
                'lug_count' => NULL,
                'created_at' => '2025-03-02 10:51:49',
                'updated_at' => '2025-03-02 10:51:49',
            ),
        ));


    }
}
