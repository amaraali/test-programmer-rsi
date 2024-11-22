<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MapelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mapel')->delete();
        
        \DB::table('mapel')->insert(array (
            0 => 
            array (
                'id' => '9cc7485c-32a2-47cc-8c9d-9243cb6d15cd',
                'nama' => 'Matematika',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:34:24',
                'updated_at' => '2024-08-16 08:34:24',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => '9cc748a7-e42c-434b-a372-10799ce42517',
                'nama' => 'Ilmu Pengetahuan',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:35:13',
                'updated_at' => '2024-08-16 08:35:13',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            2 => 
            array (
                'id' => '9cc748ba-f6f7-4874-993d-9464aab3d891',
                'nama' => 'Ilmu Pengetahuan Sosial',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:35:26',
                'updated_at' => '2024-08-16 08:35:26',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            3 => 
            array (
                'id' => '9cc74912-4bed-419a-8620-be7f00f6f75d',
                'nama' => 'Pendidikan Agama dan Budi Pekerti',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:36:23',
                'updated_at' => '2024-08-16 08:36:23',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            4 => 
            array (
                'id' => '9cc74931-bf0b-4846-9435-524356d482fb',
                'nama' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:36:44',
                'updated_at' => '2024-08-16 08:36:44',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            5 => 
            array (
                'id' => '9cc74941-a071-4df4-b6ab-f93808bb23eb',
                'nama' => 'Bahasa Indonesia',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:36:54',
                'updated_at' => '2024-08-16 08:36:54',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            6 => 
            array (
                'id' => '9cc74954-d788-42ee-aefc-cf388d005862',
                'nama' => 'Bahasa Inggris',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:37:07',
                'updated_at' => '2024-08-16 08:37:07',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            7 => 
            array (
                'id' => '9cc74967-b84a-48a9-9a53-63a654acd920',
                'nama' => 'Informatika',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:37:19',
                'updated_at' => '2024-08-16 08:37:19',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            8 => 
            array (
                'id' => '9cc7498d-c463-4e17-baad-6ee2a91f10db',
                'nama' => 'Seni Budaya & Prakarya',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:37:44',
                'updated_at' => '2024-08-16 08:37:44',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            9 => 
            array (
                'id' => '9cc749a7-6ba7-4f39-a7a2-34d77f133b99',
                'nama' => 'Pendidikan Jasmani, Olah Raga dan Kesehatan',
                'deskripsi' => NULL,
                'created_at' => '2024-08-16 08:38:01',
                'updated_at' => '2024-08-16 08:38:01',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}