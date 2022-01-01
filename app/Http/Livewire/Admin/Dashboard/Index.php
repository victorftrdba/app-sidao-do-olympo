<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\User;
use Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use LivewireAlert;

    public $name, $email, $password;

    public function render()
    {
        return view('livewire.admin.dashboard.index');
    }

    public function addUser()
    {
        $this->validate([
            'name' => 'required',
            'password' => 'required|max:12',
            'email' => 'required|email|unique:users',
        ]);

        User::create([
            'name' => $this->name,
            'password' => Hash::make($this->password),
            'email' => $this->email,
        ]);

        $this->alert('success', 'Usuário criado com sucesso!', [
            'position' => 'center',
        ]);
    }
}