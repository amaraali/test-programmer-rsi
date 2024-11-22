<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role')->delete();
        
        \DB::table('role')->insert(array (
            0 => 
            array (
                'id' => '9c13f5cb-d4e0-45f2-9edb-1b4e633bb256',
                'slug' => 'root',
                'nama' => 'Root',
                'tags' => 'root',
                'created_at' => '2024-05-19 05:10:20',
                'updated_at' => '2024-05-19 05:10:20',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => '9c13f5db-4b68-4268-b1a7-e79ad43d9f9f',
                'slug' => 'admin',
                'nama' => 'Admin',
                'tags' => 'admin',
                'created_at' => '2024-05-19 05:10:31',
                'updated_at' => '2024-05-19 05:10:31',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            2 => 
            array (
                'id' => '9cbb3015-f519-40cc-8ed4-f8de2ab5b63f',
                'slug' => 'guru',
                'nama' => 'Guru',
                'tags' => 'guru',
                'created_at' => '2024-08-10 08:16:35',
                'updated_at' => '2024-11-22 08:42:48',
                'deleted_at' => '2024-11-22 08:42:48',
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
            ),
            3 => 
            array (
                'id' => '9cc1a61f-a85a-450d-8c31-b6b74e7178bb',
                'slug' => 'siswa',
                'nama' => 'Siswa',
                'tags' => 'siswa',
                'created_at' => '2024-08-13 13:21:37',
                'updated_at' => '2024-11-22 08:42:45',
                'deleted_at' => '2024-11-22 08:42:45',
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
            ),
        ));
        
        
    }
}