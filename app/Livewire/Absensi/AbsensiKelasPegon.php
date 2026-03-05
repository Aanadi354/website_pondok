<?php

namespace App\Livewire\Absensi;

use Livewire\Component;
use App\Models\Kelas;
use App\Models\ListSantri;
use App\Models\Absensi;
use App\Models\AbsensiDetail;
use App\Models\Sesi;

class AbsensiKelasPegon extends Component
{
    public $tanggal;
    public $id_kelas;
    public $id_sesi;
    public $santris = [];
    public $status = [];

    public $showModal = true;   // tampil popup saat pertama buka
    public $isStarted = false;  // kontrol tampil tabel

    public function mount()
    {
        $this->id_kelas = 2; // Kelas Pegon (default)
        $this->showModal = true;   // hanya saat pertama load
        $this->isStarted = false;
        $this->loadSantri();
    }

    public function loadSantri()
    {
        $this->santris = ListSantri::where('id_kelas', $this->id_kelas)
            ->where('status', 'Aktif')
            ->get();

        foreach ($this->santris as $santri) {
            $this->status[$santri->id] = 'hadir';
        }
    }

    public function startAbsensi()
    {
        $this->validate([
            'tanggal' => 'required|date',
            'id_sesi' => 'required'
        ]);

        $this->showModal = false;
        $this->isStarted = true;
    }

    public function save()
    {
        $this->validate([
            'tanggal' => 'required|date',
            'id_kelas' => 'required',
            'id_sesi'  => 'required',
        ]);

        // Cek duplikat
        $cek = Absensi::where('id_kelas', $this->id_kelas)
            ->where('tanggal', $this->tanggal)
            ->where('id_sesi', $this->id_sesi)
            ->exists();

        if ($cek) {
            session()->flash('error', 'Absensi untuk sesi ini sudah dibuat.');
            return;
        }

        // Simpan header
        $absensi = Absensi::create([
            'id_kelas' => $this->id_kelas,
            'id_user'  => auth()->id(),
            'id_sesi'  => $this->id_sesi,
            'tanggal'  => $this->tanggal,
        ]);

        // Simpan detail
        foreach ($this->status as $id_santri => $status) {
            AbsensiDetail::create([
                'id_absensi' => $absensi->id,
                'id_santri'  => $id_santri,
                'status'     => $status,
            ]);
        }

        session()->flash('success', 'Absensi berhasil disimpan.');

        // Reset dan kembali ke popup
        $this->reset('tanggal', 'id_sesi');
        // $this->showModal = true;
        // $this->isStarted = false;
    }

    public function render()
    {
        return view('livewire.absensi.absensi-kelas-pegon', [
            'kelas' => Kelas::all(),
            'sesis' => Sesi::where('is_active', true)->get(),
        ])->layout('components.layouts.admin');
    }
}