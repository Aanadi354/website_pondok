<?php

namespace App\Livewire\MasterAdmin;

use Livewire\Component;
use App\Models\ListSantri as SantriModel;

class ListSantri extends Component
{
    public $nomor_induk, $nama, $jenis_kelamin, $alamat, $orang_tua, $nomor;

    public function save()
    {
        $this->validate([
            'nomor_induk' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        SantriModel::create([
            'nomor_induk' => $this->nomor_induk,
            'nama' => $this->nama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat' => $this->alamat,
            'orang_tua' => $this->orang_tua,
            'nomor' => $this->nomor,
        ]);

        session()->flash('message', 'Data berhasil ditambahkan');

        $this->reset();
    }
    public function delete($id)
        {
            $santri = ListSantri::findOrFail($id);
            $santri->delete();

            session()->flash('success', 'Data berhasil dihapus');
        }

   public function render()
{
    return view('livewire.master-admin.list-santri', [
        'santris' => SantriModel::latest()->get()
    ])->layout('components.layouts.admin');
}
}