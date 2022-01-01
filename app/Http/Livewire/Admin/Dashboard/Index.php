<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\User;
use App\Models\Post;
use Hash;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithFileUploads, LivewireAlert;

    public $name, $email, $password;
    public $title, $description, $image, $iframe, $link;

    public function render()
    {
        return view('livewire.admin.dashboard.index', [
            'countPost' => Post::count(),
            'countUser' => User::count(),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
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

    public function addPost()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'iframe' => 'required',
            'link' => 'required',
        ]);

        if (!is_null($this->image)) {
            $image = $this->image->store('pictures');
        } else {
            $image = null;
        }

        Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $image,
            'iframe' => $this->iframe,
            'link' => $this->link,
        ]);

        $this->alert('success', 'Postagem criada com sucesso!', [
            'position' => 'center',
        ]);
    }
}