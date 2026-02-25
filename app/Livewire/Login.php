<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $username;
    public $password;

    public function render()
    {
        return view('livewire.login')->layout('components.layouts.auth'); // Sesuaikan jika belum ada layout
    }

    public function login()
    {
        $credentials = [
            'username' => $this->username,
            'password' => $this->password
        ];

        if (Auth::attempt($credentials)) {
            session()->regenerate();

            $user = Auth::user();

            // Simpan data ke session
            session()->put('user_id', $user->id);
            session()->put('user_name', $user->username);
            session()->put('nama_lengkap', $user->nama_lengkap);
            session()->put('role', $user->role);

            return redirect('/dashboard');
        }

        session()->flash('error', 'Username atau password salah.');
    }
}
