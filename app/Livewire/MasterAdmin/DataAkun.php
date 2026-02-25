<?php

namespace App\Livewire\MasterAdmin;

use Livewire\Component;
use App\Models\User;

class DataAkun extends Component
{
    public function render()
    {
        return view('livewire.master-admin.data-akun', [
            'users' => User::all()
        ])->layout('components.layouts.admin');
    }
}
