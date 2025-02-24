<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstLabelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('mst_labels')->delete();

        DB::table('mst_labels')->insert(array (
            0 =>
            array (
                'id' => 1,
                'admin_id' => 1,
                'label_name' => 'Cash Duty',
                'label_color' => 'bg-success text-white',
                'not_display_in_duties' => 0,
                'created_at' => '2025-02-23 13:22:21',
                'updated_at' => '2025-02-23 13:22:21',
            ),
            1 =>
            array (
                'id' => 2,
                'admin_id' => 1,
                'label_name' => 'Cash Paid By Company',
                'label_color' => 'bg-danger-subtle',
                'not_display_in_duties' => 0,
                'created_at' => '2025-02-23 13:25:28',
                'updated_at' => '2025-02-23 13:25:28',
            ),
            2 =>
            array (
                'id' => 3,
                'admin_id' => 1,
                'label_name' => 'Corporate',
                'label_color' => 'bg-warning',
                'not_display_in_duties' => 0,
                'created_at' => '2025-02-23 13:25:41',
                'updated_at' => '2025-02-23 13:25:41',
            ),
            3 =>
            array (
                'id' => 4,
                'admin_id' => 1,
                'label_name' => 'Corporate  VIP Guest',
                'label_color' => 'bg-danger-subtle',
                'not_display_in_duties' => 0,
                'created_at' => '2025-02-23 13:26:23',
                'updated_at' => '2025-02-23 13:26:23',
            ),
            4 =>
            array (
                'id' => 5,
                'admin_id' => 1,
                'label_name' => 'Singh Duty',
                'label_color' => 'bg-primary text-white',
                'not_display_in_duties' => 0,
                'created_at' => '2025-02-23 13:26:36',
                'updated_at' => '2025-02-23 13:26:36',
            ),
            5 =>
            array (
                'id' => 6,
                'admin_id' => 1,
                'label_name' => 'VIP Guest',
                'label_color' => 'bg-danger-subtle',
                'not_display_in_duties' => 0,
                'created_at' => '2025-02-23 13:26:45',
                'updated_at' => '2025-02-23 13:26:45',
            ),
        ));


    }
}
