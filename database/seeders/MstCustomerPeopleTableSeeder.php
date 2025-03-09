<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MstCustomerPeopleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_customer_people')->delete();
        
        \DB::table('mst_customer_people')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin_id' => 1,
                'customer_id' => 1,
                'name' => 'Farhan Mirza',
                'phone_no' => '9876543210',
                'email' => 'farhan.pixolo@gmail.com',
                'alternate_phone_no' => '98765406547',
                'alternate_email' => 'dan89faran@gmail.com',
                'notes' => 'Test',
                'labels' => '1,2',
                'isPassenger' => 1,
                'isBookedBy' => 1,
                'isAdditionalContact' => 1,
                'isEmergencyContact' => 1,
                'created_at' => '2025-03-07 15:30:29',
                'updated_at' => '2025-03-07 15:30:29',
            ),
        ));
        
        
    }
}