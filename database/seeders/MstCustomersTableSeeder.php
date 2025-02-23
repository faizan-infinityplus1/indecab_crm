<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstCustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('mst_customers')->delete();

        DB::table('mst_customers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'admin_id' => 1,
                'customer_id' => NULL,
                'cust_groups_id' => NULL,
                'feedback_id' => NULL,
                'company_id' => NULL,
                'name' => 'Farhan Mirza',
                'address' => 'Plot No 25/N/2, Shivaji Nagar Govandi',
                'pincode' => 400043,
                'state' => NULL,
                'phone_no' => NULL,
                'email_id' => NULL,
                'pan_no' => NULL,
                'gst_no' => '12345678912345',
                'tds_perc' => NULL,
                'inv_def' => NULL,
                'def_disc' => NULL,
                'base_city_fuel' => NULL,
                'sales_comis_perc' => NULL,
                'country' => NULL,
                'def_tax_classif' => NULL,
                'altern_phone_no' => NULL,
                'altern_email_id' => NULL,
                'serv_tax_no' => NULL,
                'gst_name' => NULL,
                'gst_addr' => NULL,
                'gst_state' => NULL,
                'gst_type' => NULL,
                'revrse_chrg' => NULL,
                'surcharg_perc' => NULL,
                'def_car_chrg_disc' => NULL,
                'force_fuel_type' => NULL,
                'branch' => NULL,
                'notes' => NULL,
                'inv_term_cond' => NULL,
                'cust_code' => NULL,
                'is_inv_og_hide' => 0,
                'is_gst_primary' => 0,
                'is_gst_tally' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-23 09:21:40',
                'updated_at' => '2025-02-23 11:51:18',
            ),
        ));


    }
}
