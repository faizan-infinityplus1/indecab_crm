<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingBookedBiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('booking_booked_bies')->delete();
        
        \DB::table('booking_booked_bies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin_id' => 1,
                'booking_id' => 15,
                'name' => 'Farhan Mirza',
                'email' => 'farhan.pixolo@gmail.com',
                'phone_no' => '9876543210',
                'type' => 'bookedBy',
                'created_at' => '2025-03-10 01:48:55',
                'updated_at' => '2025-03-10 01:48:55',
            ),
            1 => 
            array (
                'id' => 2,
                'admin_id' => 1,
                'booking_id' => 15,
                'name' => 'Farhan Mirza',
                'email' => 'farhan.pixolo@gmail.com',
                'phone_no' => NULL,
                'type' => 'contact',
                'created_at' => '2025-03-10 01:48:55',
                'updated_at' => '2025-03-10 01:48:55',
            ),
            2 => 
            array (
                'id' => 3,
                'admin_id' => 1,
                'booking_id' => 15,
                'name' => 'Farhan Mirza',
                'email' => 'farhan.pixolo@gmail.com',
                'phone_no' => NULL,
                'type' => 'passenger',
                'created_at' => '2025-03-10 01:48:55',
                'updated_at' => '2025-03-10 01:48:55',
            ),
        ));
        
        
    }
}