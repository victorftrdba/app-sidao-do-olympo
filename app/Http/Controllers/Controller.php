<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, SEOToolsTrait;

    protected $title = null;
    protected $description = null;
    protected $url = null;
    protected $twitter = null;
    protected $canonical = null;
    protected $logo = null;

    public function startSeo()
    {
        $this->seo()->setTitle(!is_null($this->title) ? $this->title : setting('site.title'), false);
        $this->seo()->setDescription(!is_null($this->description) ? $this->description : setting('site.description'));
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->opengraph()->addImage(['url' => asset('storage/'.setting('site.logo')), 'size' => 300]);
        $this->seo()->twitter()->setSite(!is_null($this->twitter) ? $this->twitter : setting('site.twitter'));
        $this->seo()->jsonLd()->setType('Article');
        if (!is_null($this->canonical)) {
            $this->seo()->setCanonical($this->canonical);
        }
    }

}