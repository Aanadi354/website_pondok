<?php

namespace App\Livewire\MasterAdmin;

use Livewire\Component;
use App\Models\User;

class DataGuru extends Component
{
    public function render()
    {
        return view('livewire.master-admin.data-guru', [
            'users' => User::where('role', 'guru')->get()
        ])->layout('components.layouts.admin');
    }
}