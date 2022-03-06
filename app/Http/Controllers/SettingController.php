<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    //
    public function index()
    {
        $setting = Setting::all();
        return view('setting.index', compact('setting'));
    }
    public function create()
    {
        return view('setting.create');
    }
    public function store(Request $request)
    {
        $setting = new Setting();
        $setting->attributesetting = $request->attributesetting;
        $setting->value = $request->value;
        $setting->created_at = Now();
        $setting->updated_at = Now();
        $setting->save();

        return redirect('setting');
    }
}
