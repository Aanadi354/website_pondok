<?php

namespace App\Livewire\Absensi;

use Livewire\Component;

class AbsensiList extends Component
{
    public function mount()
    {
        // Cek apakah user login dan role-nya bukan guru
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            abort(403, 'Anda tidak punya akses ke halaman ini.');
        }
    }

    public function render()
    {
        return view('livewire.absensi.absensi-list')->layout('components.layouts.admin');
    }
}
