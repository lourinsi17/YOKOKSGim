<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerMembership;

class CustMemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $custmem=CustomerMembership::create([ 
            'customer_id' => '1',
         
            'membership_start_date' => '2023-11-11',
            'membership_end_date' => '2023-11-12',
            'membership_expires_in' => '2022-11-12',
        ]);
        $custmem=CustomerMembership::create([ 
            'customer_id' => '2',
       
            'membership_start_date' => '2023-11-11',
            'membership_end_date' => '2023-11-12',
            'membership_expires_in' => '2022-11-12',
        ]);
        $custmem=CustomerMembership::create([ 
            'customer_id' => '3',
        
            'membership_start_date' => '2023-11-11',
            'membership_end_date' => '2023-11-12',
            'membership_expires_in' => '2022-11-12',
        ]);
        $custmem=CustomerMembership::create([ 
            'customer_id' => '4',
         
            'membership_start_date' => '2023-11-11',
            'membership_end_date' => '2023-11-12',
            'membership_expires_in' => '2022-11-12',
        ]);
        $custmem=CustomerMembership::create([ 
            'customer_id' => '5',
         
            'membership_start_date' => '2023-11-11',
            'membership_end_date' => '2023-11-12',
            'membership_expires_in' => '2022-11-12',
        ]);
    }
}
