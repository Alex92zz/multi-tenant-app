<?php

namespace App\Http\Controllers;

use App\Models\HomePageBlock;
use App\Models\Tenant;
use App\Models\WebsiteGeneralSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomePageController extends Controller
{
    public function index()
    {
        $tenant = Tenant::where('domain', request()->getHost())->firstOrFail();

        $websiteGeneralSettings = WebsiteGeneralSettings::where('tenant_id', $tenant->id)->first();

        $homePageBlock = HomePageBlock::where('tenant_id', $tenant->id)->first();

        // Extract meta description and title
        $metaDescription = $homePageBlock['meta_description'] ?? '';
        $title = $homePageBlock['title'] ?? '';

        // Extract hero heading, paragraphs, and images
        $heroHeading = collect($homePageBlock['hero'])->firstWhere('type', 'heading')['data'] ?? null;
        $heroParagraph = collect($homePageBlock['hero'])->firstWhere('type', 'paragraph')['data']['content'] ?? '';
        $heroImage = collect($homePageBlock['hero'])->firstWhere('type', 'image')['data'] ?? '';

        // Extract content headings and paragraphs
        $aboutUs = $homePageBlock['about_us'] ?? [];

        // Extract testimonials and logos
        $testimonials = $homePageBlock['testimonials'] ?? [];

        $logoBrands = $homePageBlock['logos'] ?? [];


        return view( $tenant['theme'] . '.index', compact('metaDescription', 'title', 'heroHeading', 'heroParagraph', 'heroImage', 'aboutUs', 'testimonials', 'logoBrands', 'websiteGeneralSettings'));
    }
}
