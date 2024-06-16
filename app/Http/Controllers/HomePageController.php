<?php

namespace App\Http\Controllers;

use App\Models\HomePageBlock;
use App\Models\Tenant;
use App\Models\WebsiteGeneralSettings;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $tenant = Tenant::where('domain', request()->getHost())->firstOrFail();

        $homePageBlock = HomePageBlock::where('tenant_id', $tenant->id)->first();
        $websiteGeneralSettings = WebsiteGeneralSettings::where('tenant_id', $tenant->id)->first();

        return view('demo-seo.index', compact('homePageBlock', 'websiteGeneralSettings'));
    }
}
