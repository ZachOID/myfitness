<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Services\SiteSettingService;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    protected $siteSettingService;

    public function __construct(SiteSettingService $siteSettingService)
    {
        $this->siteSettingService = $siteSettingService;
    }
    public function index()
    {
        $settings = $this->siteSettingService->getAllSettings();

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);

        // Checkboxes defaults for switches
        $switches = ['hero_fade_effect', 'show_ticker', 'show_popup', 'show_hero_video', 'show_services', 'show_why_us', 'show_pricing', 'show_testimonials', 'show_blogs', 'show_faqs'];
        foreach ($switches as $sw) {
            if (!isset($data[$sw])) {
                $data[$sw] = '0';
            }
        }

        if (isset($data['hero_slides']) && is_array($data['hero_slides'])) {
            $data['hero_slides'] = json_encode(array_values($data['hero_slides']));
        } else {
            $data['hero_slides'] = json_encode([]);
        }

        foreach ($data as $key => $val) {
            SiteSetting::set($key, (string)$val);
        }

        return redirect()->back()->with('success', 'Site settings updated successfully!');
    }
}
