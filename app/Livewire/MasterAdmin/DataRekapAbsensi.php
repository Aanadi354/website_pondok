<?php

namespace App\Livewire\MasterAdmin;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Absensi;
use App\Models\AbsensiDetail;
use App\Models\ListSantri;
use App\Models\Kelas;

class DataRekapAbsensi extends Component
{
    public $bulan;
    public $tahun;
    public $id_kelas;

    public $jumlahHari;

    public function mount()
    {
        $this->bulan = date('m');
        $this->tahun = date('Y');

        $this->jumlahHari = Carbon::create($this->tahun, $this->bulan)->daysInMonth;
    }

    public function render()
    {

        $kelasList = Kelas::all();

        $santriList = ListSantri::where('id_kelas', $this->id_kelas)->get();

        $this->jumlahHari = Carbon::create($this->tahun, $this->bulan)->daysInMonth;

        $rekap = [];

        if ($this->id_kelas) {

            $absensi = Absensi::whereMonth('tanggal', $this->bulan)
                ->whereYear('tanggal', $this->tahun)
                ->where('id_kelas', $this->id_kelas)
                ->get();

            foreach ($absensi as $a) {

                $tanggal = Carbon::parse($a->tanggal)->day;

                $details = AbsensiDetail::where('id_absensi', $a->id)->get();

                foreach ($details as $d) {

                    $rekap[$d->id_santri][$tanggal][$a->id_sesi] = $d->status;

                }
            }
        }

        return view('livewire.master-admin.data-rekap-absensi', [
            'kelasList' => $kelasList,
            'santriList' => $santriList,
            'rekap' => $rekap
        ])->layout('components.layouts.admin');
    }
}