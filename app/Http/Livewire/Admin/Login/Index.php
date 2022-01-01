<?php

namespace App\Http\Livewire\Admin\Login;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $email, $password, $error;

    public function render()
    {
        return view('livewire.admin.login.index');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|string',
            'password' => 'required|max:12',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard.index');
        }

        $this->error = 'Dados incorretos!';
    }
}