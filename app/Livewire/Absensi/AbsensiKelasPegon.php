<?php

namespace App\Livewire\Absensi;

use Livewire\Component;
use App\Models\Kelas;
use App\Models\ListSantri;
use App\Models\Absensi;
use App\Models\AbsensiDetail;

class AbsensiKelasPegon extends Component
{
    public $tanggal;
    public $id_kelas;
    public $santris = [];
    public $status = [];

    public function mount()
{
    $this->id_kelas = 2;

    $this->santris = \App\Models\ListSantri::where('id_kelas', 2)
        ->where('status', 'Aktif')
        ->get();

    foreach ($this->santris as $santri) {
        $this->status[$santri->id] = 'hadir';
    }
}
    public function updatedIdKelas()
    {
        if ($this->id_kelas) {
            $this->santris = ListSantri::where('id_kelas', $this->id_kelas)
                ->where('status', 'Aktif')
                ->get();

            // Default status hadir
            foreach ($this->santris as $santri) {
                $this->status[$santri->id] = 'hadir';
            }
        }
    }

    public function save()
    {
        $this->validate([
            'tanggal' => 'required|date',
            'id_kelas' => 'required',
        ]);

        // Cek agar tidak dobel absensi
        $cek = Absensi::where('id_kelas', $this->id_kelas)
            ->where('tanggal', $this->tanggal)
            ->exists();

        if ($cek) {
            session()->flash('error', 'Absensi sudah dibuat untuk tanggal ini.');
            return;
        }

        $absensi = Absensi::create([
            'id_kelas' => $this->id_kelas,
            'id_user' => auth()->id(),
            'tanggal' => $this->tanggal,
        ]);

        foreach ($this->status as $id_santri => $status) {
            AbsensiDetail::create([
                'id_absensi' => $absensi->id,
                'id_santri' => $id_santri,
                'status' => $status,
            ]);
        }

        session()->flash('success', 'Absensi berhasil disimpan');
    }

    public function render()
    {
        return view('livewire.absensi.absensi-kelas-pegon', [
            'kelas' => Kelas::all()
        ])->layout('components.layouts.admin');
    }
}