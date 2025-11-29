<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Exports\TodoExport;
use Maatwebsite\Excel\Facades\Excel;

class TodoController extends Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Todo();
    }

    public function store(Request $request) {
        try {
            $request->validate(
                [
                    'title' => 'required|string|max:255',
                    'assignee' => 'string|max:255',
                    'due_date' => 'required|date_format:d-m-y|after_or_equal:today',
                    'time_tracked' => 'numeric|min:0',
                    'status' => 'in:pending,open,in_progress,completed',
                    'priority' => 'required|in:low,medium,high'
                ],
                [
                    'title.required' => 'Title wajib diisi.',
                    'title.string' => 'Title harus berupa teks.',
                    'title.max' => 'Title tidak boleh lebih dari 255 karakter.',
                    'assignee.string' => 'Assignee harus berupa teks.',
                    'assignee.max' => 'Assignee tidak boleh lebih dari 255 karakter',
                    'due_date.required' => 'due date wajib diisi',
                    'due_date.date_format' => 'due date harus hari-bulan-tahun',
                    'due_date.after_or_equal' => 'due date tidak boleh lampau',
                    'time_tracked.numeric' => 'time tracked harus berupa numerik',
                    'time_tracked.min' => 'time tracked tidak boleh kurang dari 0',
                    'status.in' => 'status hanya boleh diisi pending, open, in_progress atau completed',
                    'priority.required' => 'priority wajib diisi',
                    'priority.in' => 'priority hanya boleh diisi low, medium atau high'
                ]
            );
            $data = $this->model->create([
                'title' => $request->title,
                'assignee' => $request->assignee,
                'due_date' => $request->due_date,
                'time_tracked' => $request->time_tracked,
                'status' => $request->status,
                'priority' => $request->priority
            ]);

            return response()->json([
                'success' => true,
                'http_code' => 201,
                'message' => 'todo berhasil dibuat',
                'data' => $data
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'http_code' => 400,
                'message' => 'Parameter tidak sesuai',
                'data' => $e->errors()
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'http_code' => 500,
                'message' => 'Gagal membuat todo',
            ], 500);
        }
    }

    public function getTodoByFilter(Request $request){
        try {
            $data = $this->model->getTodoByFilter($request->all())->get();
            if ($data->isEmpty()){
                return response()->json([
                    'success' => false,
                    'http_code' => 404,
                    'message' => 'Todo tidak ditemukan',
                ], 404);
            };
            if ($request->has('export') && $request->export == 'true') {
                return Excel::download(new TodoExport($data), 'todos.xlsx');
            }
            return response()->json([
                'success' => true,
                'http_code' => 200,
                'message' => 'Data todo berhasil ditemukan',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'http_code' => 500,
                'message' => 'Gagal mendapatkan Todo',
            ], 500);
        }
    }
}
