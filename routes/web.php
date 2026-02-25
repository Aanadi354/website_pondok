<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\Absensi\AbsensiList;
use App\Livewire\MasterAdmin\DataAkun;
use App\Livewire\MasterAdmin\TambahDataAkun;

Route::get('/', Index::class);

Route::get('/login', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/absensi', AbsensiList::class)->name('absensi.index');
Route::get('/data-akun', DataAkun::class)->name('data-akun');
Route::get('/tambah-data-akun', \App\Livewire\MasterAdmin\TambahDataAkun::class)->name('tambah-data-akun');
