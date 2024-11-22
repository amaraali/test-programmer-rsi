<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'name' => 'Amara Ali',
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$vMdsdbmqHpvagjvgPJIw1uasidjKCL5o/FcONAbRfkKamrGbnkIbS',
                'identitas' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-08 15:08:04',
                'updated_at' => '2024-05-08 15:08:04',
                'deleted_at' => NULL,
                'created_by' => NULL,
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => '9d8be4ab-d005-4d55-be43-947775575e6c',
                'name' => 'John Doe',
                'username' => 'adminrsui',
                'email' => 'adminrsui@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$PmEQrt4oJZz6cNlTTil38uU35mUFvxLOcWcORp0rkHle/r3B0./hC',
                'identitas' => '12345678',
                'remember_token' => NULL,
                'created_at' => '2024-11-22 09:13:44',
                'updated_at' => '2024-11-22 09:13:44',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}