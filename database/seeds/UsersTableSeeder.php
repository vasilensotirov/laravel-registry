<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'first_name' => 'Vasilen',
                'last_name' => 'Sotirov',
                'phone_number' => '0897859515',
                'date_of_birth' => '1998-05-11',
                'created_at' => '2020-06-28 17:14:33',
                'updated_at' => '2020-06-28 17:14:33',
            ),
        ));
    }
}
