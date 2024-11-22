<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu')->delete();
        
        \DB::table('menu')->insert(array (
            0 => 
            array (
                'id' => '9c0077c2-a96f-4729-91fc-6021d668a7de',
                'menu_group_id' => '9bfebe3e-4dfd-4f82-ab68-51c43994d7ad',
                'nama' => 'Manajemen Menu',
                'nama_en' => 'Menu Management',
                'icon' => 'bi bi-list',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-05-09 12:37:11',
                'updated_at' => '2024-05-09 12:37:11',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => '9c0077e0-129e-4308-ba5f-43b089ebcf17',
                'menu_group_id' => '9bfebe3e-4dfd-4f82-ab68-51c43994d7ad',
                'nama' => 'Manajemen Pengguna',
                'nama_en' => 'User Management',
                'icon' => 'bi bi-person-lines-fill',
                'urutan' => 2,
                'is_tampil' => 1,
                'created_at' => '2024-05-09 12:37:31',
                'updated_at' => '2024-05-09 12:39:07',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => NULL,
            ),
            2 => 
            array (
                'id' => '9c007835-8527-4a74-8158-18fb5a3a501f',
                'menu_group_id' => '9bfebe3e-4dfd-4f82-ab68-51c43994d7ad',
                'nama' => 'Manajemen Akses',
                'nama_en' => 'Role Management',
                'icon' => 'bi bi-person-gear',
                'urutan' => 3,
                'is_tampil' => 1,
                'created_at' => '2024-05-09 12:38:27',
                'updated_at' => '2024-05-09 12:38:27',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            3 => 
            array (
                'id' => '9c148b32-8a07-492b-babd-886ba4f6a3ac',
                'menu_group_id' => '9bfebe3e-4dfd-4f82-ab68-51c43994d7ad',
                'nama' => 'Manajamen Level Akses',
                'nama_en' => 'Access Role',
                'icon' => 'bi bi-person-lock',
                'urutan' => 4,
                'is_tampil' => 1,
                'created_at' => '2024-05-19 12:08:06',
                'updated_at' => '2024-05-19 12:08:06',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            4 => 
            array (
                'id' => '9c14979f-d3f9-4e2e-ab02-4a9ce3cf29c8',
                'menu_group_id' => '9bfebe3e-4dfd-4f82-ab68-51c43994d7ad',
                'nama' => 'Manajemen Unit',
                'nama_en' => 'Scope Management',
                'icon' => 'bi bi-grid-1x2',
                'urutan' => 5,
                'is_tampil' => 1,
                'created_at' => '2024-05-19 12:42:51',
                'updated_at' => '2024-05-19 12:42:51',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            5 => 
            array (
                'id' => '9cbb2ae6-51cb-4de6-8f44-9f923039774a',
                'menu_group_id' => '9bfeaf44-a697-48f0-8c63-5b575441ea25',
                'nama' => 'Mata Pelajaran',
                'nama_en' => 'Course',
                'icon' => 'bi-list-ul',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:02:05',
                'updated_at' => '2024-08-10 08:02:05',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            6 => 
            array (
                'id' => '9cbb2b74-27ee-44f1-9d97-cd11e6b2a752',
                'menu_group_id' => '9bfeaf44-a697-48f0-8c63-5b575441ea25',
                'nama' => 'Kelas',
                'nama_en' => 'Classes',
                'icon' => 'bi bi-bookmark-check',
                'urutan' => 2,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:03:38',
                'updated_at' => '2024-08-10 08:03:38',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            7 => 
            array (
                'id' => '9cbb2bf2-6f80-408b-91a8-0b192102e537',
                'menu_group_id' => '9bfeaf44-a697-48f0-8c63-5b575441ea25',
                'nama' => 'Materi',
                'nama_en' => 'Materials',
                'icon' => 'bi bi-journal-bookmark',
                'urutan' => 3,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:05:01',
                'updated_at' => '2024-08-10 08:05:01',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            8 => 
            array (
                'id' => '9cbb2c97-ddd3-4a34-a004-4ac72e840c50',
                'menu_group_id' => '9bfeaf44-a697-48f0-8c63-5b575441ea25',
                'nama' => 'Enrollments',
                'nama_en' => 'Enrollments',
                'icon' => 'bi bi-bag-check',
                'urutan' => 4,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:06:49',
                'updated_at' => '2024-08-10 08:12:00',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => NULL,
            ),
            9 => 
            array (
                'id' => '9cbb2d37-fa7a-4b4b-b75e-b42f1230aea8',
                'menu_group_id' => '9bfeaf44-a697-48f0-8c63-5b575441ea25',
                'nama' => 'Penugasan',
                'nama_en' => 'Assigments',
                'icon' => 'bi bi-clipboard-check',
                'urutan' => 5,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:08:34',
                'updated_at' => '2024-08-10 08:09:02',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => NULL,
            ),
            10 => 
            array (
                'id' => '9cbb2e10-dc73-42d7-bbc6-5c0c7bf5be22',
                'menu_group_id' => '9bfeaf44-a697-48f0-8c63-5b575441ea25',
                'nama' => 'Pengumuman',
                'nama_en' => 'Announcements',
                'icon' => 'bi bi-megaphone',
                'urutan' => 6,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:10:56',
                'updated_at' => '2024-08-10 08:10:56',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            11 => 
            array (
                'id' => '9cc1a14f-ac0f-4241-9a33-e599ae097a23',
                'menu_group_id' => '9bfeaf44-a697-48f0-8c63-5b575441ea25',
                'nama' => 'Manajemen Pengguna',
                'nama_en' => 'User Management',
                'icon' => 'bi bi-person',
                'urutan' => 7,
                'is_tampil' => 1,
                'created_at' => '2024-08-13 13:08:09',
                'updated_at' => '2024-08-13 13:08:09',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            12 => 
            array (
                'id' => '9cc74c72-9505-45f0-8863-8bbf3d2eb124',
                'menu_group_id' => '9bfeaf44-a697-48f0-8c63-5b575441ea25',
                'nama' => 'Pembelajaran',
                'nama_en' => 'Course',
                'icon' => 'bi-ui-checks',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-16 08:45:50',
                'updated_at' => '2024-08-16 08:45:50',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}