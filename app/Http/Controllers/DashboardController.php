<?php

namespace App\Http\Controllers;

use App\Modules\Course\Models\Course;
use App\Modules\Kelas\Models\Kelas;
use App\Modules\Siswa\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('is_active', 1)->get();
        $kelas = Kelas::all();
        if (session('active_role') == 'guru') {
            $course = Course::where('guru_id', Auth::user()->guru->id)->get();
            $data['course'] = $course;
            $data['assignment'] = $course->map(function ($item) {
                return $item->assignment->where('due_date', '>=', now());
            })->flatten();
        } elseif (session('active_role') == 'siswa') {
            $data['course'] = Auth::user()->siswa->course;
            $data['assignment'] = Auth::user()->siswa->assignment->where('due_date', '>=', now());
        }
        // elseif (session('active_role') == 'admin' || session('active_role') == 'root') {
        // }
        $data['siswa'] = $siswa;
        $data['kelas'] = $kelas;

        return view('dashboard', array_merge($data, ['title' => 'Dashboard']));
    }
}
