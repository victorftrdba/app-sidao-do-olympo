<?php

namespace App\Http\Livewire\Admin\Posts;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.posts.index', [
            'posts' => Post::orderBy('created_at', 'desc')->paginate(15),
        ]);
    }
}