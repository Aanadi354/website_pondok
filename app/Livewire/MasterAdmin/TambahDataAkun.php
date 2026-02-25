<?php

namespace App\Livewire\MasterAdmin;

use Livewire\Component;

class TambahDataAkun extends Component
{
    public function render()
    {
        return view('livewire.master-admin.tambah-data-akun')->layout('components.layouts.admin');
    }
}
