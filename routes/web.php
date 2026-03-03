<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\Absensi\AbsensiList;
use App\Livewire\MasterAdmin\DataAkun;
use App\Livewire\MasterAdmin\TambahDataAkun;
use App\Livewire\MasterAdmin\ListSantri;
use App\Livewire\MasterAdmin\SantriDetail;
use App\Livewire\MasterAdmin\DataGuru;
use App\Livewire\MasterAdmin\DataKelas;
use App\Livewire\Absensi\AbsensiKelasPegon;


Route::get('/', Index::class);

Route::get('/login', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/absensi', AbsensiList::class)->name('absensi.index');
Route::get('/data-akun', DataAkun::class)->name('data-akun');
Route::get('/tambah-data-akun', \App\Livewire\MasterAdmin\TambahDataAkun::class)->name('tambah-data-akun');
Route::get('/list-santri', ListSantri::class)->name('list-santri');
Route::get('/santri/{id}/detail', SantriDetail::class)->name('santri.detail');
Route::get('/data-guru', DataGuru::class)->name('data-guru');
Route::get('/data-kelas', DataKelas::class)->name('data-kelas');
Route::get('/absensi-kelas-pegon', AbsensiKelasPegon::class)
    ->name('absensi.kelas-pegon');

