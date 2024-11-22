<?php

namespace App\Modules\Todo\Controllers;

use Illuminate\Http\Request;
use App\Modules\Todo\Models\Todo;
use App\Http\Controllers\Controller;
use Abianbiya\Laralag\Helpers\Logger;
use Abianbiya\Laralag\Modules\Log\Models\Log;


class TodoController extends Controller
{
    use Logger;
    protected $log;
    protected $title = "Todo";

    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    public function index(Request $request)
    {
        $query = Todo::query();
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->whereAny(['Todo', 'Tanggal', 'Jam', 'Status',], 'like', "%$search%");
        }
        $data['data'] = $query->paginate(10)->withQueryString();

        $this->log($request, 'melihat halaman manajemen data ' . $this->title);
        return view('Todo::todo', array_merge($data, ['title' => $this->title]));
    }

    public function create(Request $request)
    {
        $status_ref = [
            'belum' => 'Belum',
            'sedang' => 'Sedang',
            'selesai' => 'Selesai',
        ];

        $data['forms'] = array(
            'todo' => ['Todo', html()->text("todo", old("todo"))->class("form-control")->placeholder("")->required()],
            'tanggal' => ['Tanggal', html()->text("tanggal", old("tanggal"))->class("form-control datepicker")->required()],
            'jam' => ['Jam', html()->time("jam", old("jam"))->class("form-control")->placeholder("")->required()],
            'status' => ['Status', html()->select("status", $status_ref, old("status"))->class("form-select select2")->placeholder("")->required()],
            // 'status' => ['Status', html()->select("status", $ref_status, old("status"))->class("form-select select2")], /
        );

        $this->log($request, 'membuka form tambah ' . $this->title);
        return view('Todo::todo_create', array_merge($data, ['title' => $this->title]));
    }

    function store(Request $request)
    {
        $request->validate([
            'todo' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required|string',
            'status' => 'required|string',

        ]);

        $todo = new Todo();
        $todo->todo = $request->input("todo");
        $todo->tanggal = date("Y-m-d", strtotime($request->input("tanggal")));
        $todo->jam = $request->input("jam");
        $todo->status = $request->input("status");
        $todo->save();

        $text = 'membuat ' . $this->title; //' baru '.$todo->what;
        $this->log($request, $text, ['todo.id' => $todo->id]);
        return redirect()->route($request->back ?? 'todo.index')->with('message_success', 'Todo berhasil ditambahkan!');
    }

    public function show(Request $request, Todo $todo)
    {
        $data['todo'] = $todo;

        $text = 'melihat detail ' . $this->title; //.' '.$todo->what;
        $this->log($request, $text, ['todo.id' => $todo->id]);
        return view('Todo::todo_detail', array_merge($data, ['title' => $this->title]));
    }

    public function edit(Request $request, Todo $todo)
    {
        $data['todo'] = $todo;
        $status_ref = [
            'belum' => 'Belum',
            'sedang' => 'Sedang',
            'selesai' => 'Selesai',
        ];


        $data['forms'] = array(
            'todo' => ['Todo', html()->text("todo", $todo->todo)->class("form-control")->placeholder("")->required()],
            'tanggal' => ['Tanggal', html()->text("tanggal", $todo->tanggal)->class("form-control datepicker")->required()],
            'jam' => ['Jam', html()->text("jam", $todo->jam)->class("form-control")->placeholder("")->required()],
            'status' => ['Status', html()->select("status", $status_ref, $todo->status)->class("form-select select2")->placeholder("")->required()],
        );

        $text = 'membuka form edit ' . $this->title; //.' '.$todo->what;
        $this->log($request, $text, ['todo.id' => $todo->id]);
        return view('Todo::todo_update', array_merge($data, ['title' => $this->title]));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'todo' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required|string',
            'status' => 'required|string',

        ]);

        $todo = Todo::find($id);
        $todo->todo = $request->input("todo");
        $todo->tanggal = date("Y-m-d", strtotime($request->input("tanggal")));
        $todo->jam = $request->input("jam");
        $todo->status = $request->input("status");
        $todo->save();


        $text = 'mengedit ' . $this->title; //.' '.$todo->what;
        $this->log($request, $text, ['todo.id' => $todo->id]);
        return redirect()->route($request->back ?? 'todo.index')->with('message_success', 'Todo berhasil diubah!');
    }

    public function destroy(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        $text = 'menghapus ' . $this->title; //.' '.$todo->what;
        $this->log($request, $text, ['todo.id' => $todo->id]);
        return back()->with('message_success', 'Todo berhasil dihapus!');
    }
}
