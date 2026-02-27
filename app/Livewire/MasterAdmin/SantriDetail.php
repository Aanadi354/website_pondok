<?php

namespace App\Livewire\MasterAdmin;

use Livewire\Component;
use App\Models\ListSantri;

class SantriDetail extends Component
{
    public $santri;

    public function mount($id)
    {
        $this->santri = ListSantri::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.master-admin.santri-detail')->layout('components.layouts.admin');
    }
}