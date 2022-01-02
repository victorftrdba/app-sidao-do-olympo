<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $this->seo()->setTitle('Sidão do Olympo');
        $this->seo()->setDescription('Gameplays ao vivo de vários jogos em alta qualidade!');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->setCanonical($request->url());

        return view('site.home.index');
    }
}