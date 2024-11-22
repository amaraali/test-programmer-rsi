<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('module')->delete();
        
        \DB::table('module')->insert(array (
            0 => 
            array (
                'id' => '9c0097b4-c5b1-444d-b543-0df8ea7cf715',
                'menu_id' => '9c0077c2-a96f-4729-91fc-6021d668a7de',
                'nama' => 'Manajemen Menu',
                'routing' => 'menu.index',
                'permission' => 'menu.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-05-09 14:06:31',
                'updated_at' => '2024-05-09 14:06:31',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => '9c00a29d-6186-4427-9c93-49faea4f48e5',
                'menu_id' => '9c0077c2-a96f-4729-91fc-6021d668a7de',
                'nama' => 'Manajemen Grup Menu',
                'routing' => 'menugroup.index',
                'permission' => 'menugroup.index',
                'urutan' => 2,
                'is_tampil' => 0,
                'created_at' => '2024-05-09 14:37:01',
                'updated_at' => '2024-05-09 15:46:02',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => NULL,
            ),
            2 => 
            array (
                'id' => '9c00a2b8-e8fd-4d8d-9489-b46094964043',
                'menu_id' => '9c0077c2-a96f-4729-91fc-6021d668a7de',
                'nama' => 'Manajemen Modul',
                'routing' => 'module.index',
                'permission' => 'module.index',
                'urutan' => 3,
                'is_tampil' => 0,
                'created_at' => '2024-05-09 14:37:19',
                'updated_at' => '2024-05-09 15:21:06',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => NULL,
            ),
            3 => 
            array (
                'id' => '9c00af12-ed0c-4ac1-9140-f433360341a9',
                'menu_id' => '9c0077e0-129e-4308-ba5f-43b089ebcf17',
                'nama' => 'Manajemen Pengguna',
                'routing' => 'user.index',
                'permission' => 'user.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-05-09 15:11:51',
                'updated_at' => '2024-05-09 15:11:51',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            4 => 
            array (
                'id' => '9c00af6e-217a-4a34-a14a-ae1b20f3147e',
                'menu_id' => '9c007835-8527-4a74-8158-18fb5a3a501f',
                'nama' => 'Permission',
                'routing' => 'permission.index',
                'permission' => 'permission.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-05-09 15:12:51',
                'updated_at' => '2024-05-09 15:12:51',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            5 => 
            array (
                'id' => '9c148b47-92d1-4078-b36c-dd89f95770ce',
                'menu_id' => '9c148b32-8a07-492b-babd-886ba4f6a3ac',
                'nama' => 'Manajamen Level Akses',
                'routing' => 'role.index',
                'permission' => 'role.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-05-19 12:08:20',
                'updated_at' => '2024-05-19 12:08:20',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            6 => 
            array (
                'id' => '9c1497b1-e58a-42f9-8b40-3649d56cdbb6',
                'menu_id' => '9c14979f-d3f9-4e2e-ab02-4a9ce3cf29c8',
                'nama' => 'Manajemen Unit',
                'routing' => 'scope.index',
                'permission' => 'scope.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-05-19 12:43:02',
                'updated_at' => '2024-05-19 12:43:02',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            7 => 
            array (
                'id' => '9cbb2b08-28c7-449a-9095-8227cb0ed91e',
                'menu_id' => '9cbb2ae6-51cb-4de6-8f44-9f923039774a',
                'nama' => 'Mata Pelajaran',
                'routing' => 'mapel.index',
                'permission' => 'mapel.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:02:27',
                'updated_at' => '2024-08-10 08:02:27',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            8 => 
            array (
                'id' => '9cbb2b84-2293-4475-8214-7ef1697e2b8d',
                'menu_id' => '9cbb2b74-27ee-44f1-9d97-cd11e6b2a752',
                'nama' => 'Kelas',
                'routing' => 'kelas.index',
                'permission' => 'kelas.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:03:48',
                'updated_at' => '2024-08-10 08:03:48',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            9 => 
            array (
                'id' => '9cbb2c00-0ae4-4ee0-af07-f14c588ef14b',
                'menu_id' => '9cbb2bf2-6f80-408b-91a8-0b192102e537',
                'nama' => 'Materi',
                'routing' => 'materi.index',
                'permission' => 'materi.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:05:10',
                'updated_at' => '2024-08-10 08:05:10',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            10 => 
            array (
                'id' => '9cbb2ca9-a116-4811-bb53-43377a605708',
                'menu_id' => '9cbb2c97-ddd3-4a34-a004-4ac72e840c50',
                'nama' => 'Enrollments',
                'routing' => 'enrollments.index',
                'permission' => 'enrollments.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:07:01',
                'updated_at' => '2024-08-10 08:07:01',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            11 => 
            array (
                'id' => '9cbb2d47-2691-4f3e-8b66-58cf2612ee25',
                'menu_id' => '9cbb2d37-fa7a-4b4b-b75e-b42f1230aea8',
                'nama' => 'Assigments',
                'routing' => 'assignments.index',
                'permission' => 'assigmnents.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:08:44',
                'updated_at' => '2024-08-10 10:12:31',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => NULL,
            ),
            12 => 
            array (
                'id' => '9cbb2d73-0907-4ba2-b6be-dfe49fdb06b2',
                'menu_id' => '9cbb2d37-fa7a-4b4b-b75e-b42f1230aea8',
                'nama' => 'Penugasan',
                'routing' => 'submissions.index',
                'permission' => 'submissions.index',
                'urutan' => 2,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:09:13',
                'updated_at' => '2024-08-10 08:09:13',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            13 => 
            array (
                'id' => '9cbb2e26-8a9a-4630-8e0c-e84fbe54a21b',
                'menu_id' => '9cbb2e10-dc73-42d7-bbc6-5c0c7bf5be22',
                'nama' => 'Pengumuman',
                'routing' => 'announcements.index',
                'permission' => 'announcements.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-10 08:11:10',
                'updated_at' => '2024-08-10 08:11:10',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            14 => 
            array (
                'id' => '9cc1a167-7c72-417f-82ee-6c7db1fb8bc6',
                'menu_id' => '9cc1a14f-ac0f-4241-9a33-e599ae097a23',
                'nama' => 'Guru',
                'routing' => 'guru.index',
                'permission' => 'guru.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-13 13:08:25',
                'updated_at' => '2024-08-13 13:09:17',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => NULL,
            ),
            15 => 
            array (
                'id' => '9cc1a179-f836-468e-9244-7f0cba6092a8',
                'menu_id' => '9cc1a14f-ac0f-4241-9a33-e599ae097a23',
                'nama' => 'Siswa',
                'routing' => 'siswa.index',
                'permission' => 'siswa.index',
                'urutan' => 2,
                'is_tampil' => 1,
                'created_at' => '2024-08-13 13:08:37',
                'updated_at' => '2024-08-13 13:09:25',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'deleted_by' => NULL,
            ),
            16 => 
            array (
                'id' => '9cc74ca2-6933-43d0-b0e2-788247d89a70',
                'menu_id' => '9cc74c72-9505-45f0-8863-8bbf3d2eb124',
                'nama' => 'Course',
                'routing' => 'course.index',
                'permission' => 'course.index',
                'urutan' => 1,
                'is_tampil' => 1,
                'created_at' => '2024-08-16 08:46:21',
                'updated_at' => '2024-08-16 08:46:21',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
            17 => 
            array (
                'id' => '9cc74cc9-b83f-44a4-8c25-5b17e38a2694',
                'menu_id' => '9cc74c72-9505-45f0-8863-8bbf3d2eb124',
                'nama' => 'Course Members',
                'routing' => 'coursedetail.index',
                'permission' => 'coursedetail.index',
                'urutan' => 2,
                'is_tampil' => 1,
                'created_at' => '2024-08-16 08:46:47',
                'updated_at' => '2024-08-16 08:46:47',
                'deleted_at' => NULL,
                'created_by' => '9bfeaabc-c71a-442b-8bbb-8b76194ab72d',
                'updated_by' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}