<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class TodoExport implements FromView
{
    protected $todos;
    public function __construct($todos)
    {
        $this->todos = $todos;
    }

    public function view(): View
    {
        return view('todos.export', [
            'todos' => $this->todos
        ]);
    }
}
