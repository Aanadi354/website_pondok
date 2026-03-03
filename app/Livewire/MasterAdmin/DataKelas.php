<?php

namespace App\Livewire\MasterAdmin;

use Livewire\Component;
use App\Models\Kelas;

class DataKelas extends Component
{
    public function render()
    {
        return view('livewire.master-admin.data-kelas', [
            'kelas' => Kelas::with(['guru' => function ($query) {
                $query->where('role', 'guru');
            }])->get()
        ])->layout('components.layouts.admin');
    }
}