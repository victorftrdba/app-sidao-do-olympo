<?php

namespace App\Http\Controllers;

use MadWeb\Robots\Robots;
use App\Http\Controllers\Controller;

class RobotsController extends Controller
{
    /**
     * Generate robots.txt
     */
    public function __invoke(Robots $robots)
    {
        $robots->addUserAgent('*');

        if ($robots->shouldIndex()) {
            $robots->addDisallow('/admin');
            $robots->addDisallow('/login');
            $robots->addDisallow('/logout');
            $robots->addSitemap('sitemap.xml');
        } else {
            $robots->addDisallow('/');
        }

        return response($robots->generate(), 200, ['Content-Type' => 'text/plain']);
    }
}