<?php

namespace App\Http\Livewire\Site\Home;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public function render()
    {
        return view('livewire.site.home.index', [
            'posts' => Post::orderBy('created_at', 'desc')->limit(3)->get(),
        ]);
    }
}