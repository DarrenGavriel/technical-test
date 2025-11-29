<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'title' => 'Pergi ke pasar membeli beras',
            'assignee' => 'Darren',
            'due_date' => '2025-11-30',
            'time_tracked' => '6',
            'status' => 'in_progress',
            'priority' => 'low',
        ]);
        Todo::create([
            'title' => 'Riset Library Chart untuk Dashboard',
            'assignee' => null,
            'due_date' => '2025-12-05',
            'time_tracked' => 0,
            'status' => 'open',
            'priority' => 'medium',
        ]);
        Todo::create([
            'title' => 'Perbaikan Bug Login Page',
            'assignee' => 'Vara',
            'due_date' => '2025-12-01',
            'time_tracked' => 4,
            'status' => 'in_progress',
            'priority' => 'high',
        ]);
        Todo::create([
            'title' => 'Buat Dokumentasi API Swagger',
            'assignee' => 'Gavriel',
            'due_date' => '2025-12-10',
            'time_tracked' => 0,
            'status' => 'pending',
            'priority' => 'low',
        ]);
        Todo::create([
            'title' => 'Setup Environment Staging',
            'assignee' => 'Evelyn',
            'due_date' => '2025-11-15',
            'time_tracked' => 8,
            'status' => 'completed',
            'priority' => 'medium',
        ]);
        Todo::create([
            'title' => 'Slicing UI Halaman Profile',
            'assignee' => 'Evelyn',
            'due_date' => '2025-12-03',
            'time_tracked' => 5,
            'status' => 'in_progress',
            'priority' => 'medium',
        ]);
        Todo::create([
            'title' => 'Bersihkan Data Sampah di Database',
            'assignee' => null,
            'due_date' => '2025-12-15',
            'time_tracked' => 0,
            'status' => 'open',
            'priority' => 'low',
        ]);
        Todo::create([
            'title' => 'Meeting dengan Klien Project Alpha',
            'assignee' => 'Darren',
            'due_date' => '2025-12-02',
            'time_tracked' => 0,
            'status' => 'pending',
            'priority' => 'high',
        ]);
        Todo::create([
            'title' => 'Fix Typo di Landing Page',
            'assignee' => 'Evelyn',
            'due_date' => '2025-10-25',
            'time_tracked' => 1,
            'status' => 'completed',
            'priority' => 'low',
        ]);
        Todo::create([
            'title' => 'Integrasi Payment Gateway',
            'assignee' => 'Gavriel',
            'due_date' => '2025-12-20',
            'time_tracked' => 15,
            'status' => 'in_progress',
            'priority' => 'high',
        ]);
        Todo::create([
            'title' => 'Analisis Kompetitor untuk Fitur Baru',
            'assignee' => null,
            'due_date' => '2025-12-12',
            'time_tracked' => 0,
            'status' => 'open',
            'priority' => 'high',
        ]);
        Todo::create([
            'title' => 'Update Security Patch Server',
            'assignee' => 'Jojo',
            'due_date' => '2025-12-08',
            'time_tracked' => 0,
            'status' => 'pending',
            'priority' => 'medium',
        ]);
        Todo::create([
            'title' => 'Desain Banner Promo Akhir Tahun',
            'assignee' => 'Darren',
            'due_date' => '2025-11-28',
            'time_tracked' => 6,
            'status' => 'completed',
            'priority' => 'medium',
        ]);
        Todo::create([
            'title' => 'Optimasi Query Laporan Keuangan',
            'assignee' => 'Vara',
            'due_date' => '2025-12-14',
            'time_tracked' => 3,
            'status' => 'in_progress',
            'priority' => 'high',
        ]);
        Todo::create([
            'title' => 'Siapkan Materi Presentasi Weekly',
            'assignee' => 'Evelyn',
            'due_date' => '2025-12-04',
            'time_tracked' => 0,
            'status' => 'pending',
            'priority' => 'low',
        ]);
        Todo::create([
            'title' => 'Refactor Controller User',
            'assignee' => 'Gavriel',
            'due_date' => '2025-11-10',
            'time_tracked' => 9,
            'status' => 'completed',
            'priority' => 'high',
        ]);
        Todo::create([
            'title' => 'Survei Kepuasan Pengguna',
            'assignee' => null,
            'due_date' => '2026-01-10',
            'time_tracked' => 0,
            'status' => 'open',
            'priority' => 'low',
        ]);
        Todo::create([
            'title' => 'Implementasi Dark Mode',
            'assignee' => 'Jojo',
            'due_date' => '2025-12-18',
            'time_tracked' => 5,
            'status' => 'in_progress',
            'priority' => 'medium',
        ]);
    }
}
