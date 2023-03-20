<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Menu;
use App\Models\Options;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use OpenGraph;
use SEO;
use SEOMeta;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $config_info;

    public function __construct()
    {
        $site_info = Options::where('type', 'general')->first();
        $site_info = json_decode($site_info->content);

        $this->config_info = $site_info;
        OpenGraph::setUrl(\URL::current());
        OpenGraph::addProperty('locale', 'vi');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('author', 'GCO-GROUP');
        SEOMeta::addKeyword($site_info->site_keyword);
        $menuMain = Menu::where('id_group', 1)->orderBy('position')->get();


        view()->share(compact('site_info', 'menuMain'));
    }

    public function createSeo($dataSeo = null)
    {
        $site_info = $this->config_info;
        if (!empty($dataSeo->meta_title)) {
            SEO::setTitle($dataSeo->meta_title);
        } else {
            SEO::setTitle($site_info->site_title);
        }
        if (!empty($dataSeo->meta_description)) {
            SEOMeta::setDescription($dataSeo->meta_description);
            OpenGraph::setDescription($dataSeo->meta_description);
        } else {
            SEOMeta::setDescription($site_info->site_description);
            OpenGraph::setDescription($site_info->site_description);
        }
        if (!empty($dataSeo->image)) {
            OpenGraph::addImage($dataSeo->image, ['height' => 400, 'width' => 400]);
        } else {
            OpenGraph::addImage($site_info->logo_share, ['height' => 400, 'width' => 400]);
        }
        if (!empty($dataSeo->meta_keyword)) {
            SEOMeta::addKeyword($dataSeo->meta_keyword);
        }
    }

    public function createSeoPost($data)
    {
        if (!empty($data->meta_title)) {
            SEO::setTitle($data->meta_title);
        } else {
            SEO::setTitle($data->name);
        }
        if (!empty($data->meta_description)) {
            SEOMeta::setDescription($data->meta_description);
            OpenGraph::setDescription($data->meta_description);
        } else {
            SEOMeta::setDescription($this->config_info->site_description);
            OpenGraph::setDescription($this->config_info->site_description);
        }
        if (!empty($data->image)) {
            OpenGraph::addImage($data->image, ['height' => 400, 'width' => 400]);
        } else {
            OpenGraph::addImage($this->config_info->logo_share, ['height' => 400, 'width' => 400]);
        }
        if (!empty($data->meta_keyword)) {
            SEOMeta::addKeyword($data->meta_keyword);
        }
    }

}
