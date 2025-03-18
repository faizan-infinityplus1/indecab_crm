<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MstMyCompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_my_companies')->delete();
        
        \DB::table('mst_my_companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin_id' => 1,
                'supplier_id' => NULL,
                'company_profile_id' => NULL,
                'name' => 'Mumbai Cab Service',
                'logo' => 'my-companies/logo/tXa2CFl4hiLxr9jIBmuPsRoVwpfHoyzYZeUdMN8V.jpg',
                'digital_sign' => 'my-companies/digital-signature/6CeEiR1SHodu9G6mEv8cA2KEWozPzVPBdcFuewnl.jpg',
                'code' => 'MC',
                'business_type' => 'proprietorship',
                'phone_no' => '9619900011',
                'address' => 'Plot No 8, Durga Sewa sang, Shivaji Nagar, ​Govandi, Mumbai - 400043',
                'alternate_phone_no' => '9167700011',
                'email' => 'mumbaicabservice76@gmail.com',
                'city' => 'mundwa',
                'state' => NULL,
                'vat' => NULL,
                'pincode' => 400043,
                'service_tax_no' => NULL,
                'cst_tin_no' => NULL,
                'cin_no' => NULL,
                'pan_no' => 'BDSPC4587J',
                'sac_hsn_code' => NULL,
                'gst_no' => '27BDSPC4587J1ZX',
                'term_condition' => NULL,
                'is_active' => 1,
                'is_inv_company' => 1,
                'created_at' => '2025-03-04 00:35:49',
                'updated_at' => '2025-03-04 00:35:49',
            ),
            1 => 
            array (
                'id' => 2,
                'admin_id' => 1,
                'supplier_id' => NULL,
                'company_profile_id' => NULL,
                'name' => 'Uqaab Graphics',
                'logo' => 'my-companies/logo/3Kgi74bDNaUswBs02BaiJcvscKFZUloYd1YCbf3t.png',
                'digital_sign' => NULL,
                'code' => 'UG',
                'business_type' => 'proprietorship',
                'phone_no' => '9167087836',
                'address' => 'Shivaji Nagar, Govandi,',
                'alternate_phone_no' => '8652081197',
                'email' => 'uqaabgraphics@gmail.com',
                'city' => 'mumbai',
                'state' => NULL,
                'vat' => NULL,
                'pincode' => 400043,
                'service_tax_no' => NULL,
                'cst_tin_no' => NULL,
                'cin_no' => NULL,
                'pan_no' => NULL,
                'sac_hsn_code' => NULL,
                'gst_no' => '27BDSPC4587J2ZW',
                'term_condition' => NULL,
                'is_active' => 1,
                'is_inv_company' => 0,
                'created_at' => '2025-03-15 15:45:01',
                'updated_at' => '2025-03-15 15:45:32',
            ),
            2 => 
            array (
                'id' => 3,
                'admin_id' => 1,
                'supplier_id' => NULL,
                'company_profile_id' => NULL,
                'name' => 'Uqaab Holidays',
                'logo' => 'my-companies/logo/ftWI0ZFRAyLpFkQsN8qLHIaJGWBusmzi4bEez6CX.jpg',
                'digital_sign' => NULL,
                'code' => 'UH',
                'business_type' => 'proprietorship',
                'phone_no' => '9167087836',
                'address' => NULL,
                'alternate_phone_no' => NULL,
                'email' => 'uqaabholidays@gmail.com',
                'city' => 'mumbai',
                'state' => NULL,
                'vat' => NULL,
                'pincode' => NULL,
                'service_tax_no' => NULL,
                'cst_tin_no' => NULL,
                'cin_no' => NULL,
                'pan_no' => NULL,
                'sac_hsn_code' => NULL,
                'gst_no' => '27BDSPC4587J1ZX',
                'term_condition' => NULL,
                'is_active' => 1,
                'is_inv_company' => 0,
                'created_at' => '2025-03-15 15:46:40',
                'updated_at' => '2025-03-15 15:47:00',
            ),
        ));
        
        
    }
}