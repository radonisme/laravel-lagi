<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Resources\SettingResource;
use App\Http\Resources\UpdateSettingResource;

class SettingController extends Controller
{
    public function index()
    {
        $set = Setting::with('reference')->get();

        return SettingResource::collection($set);
    }
    
    public function update(Request $request, Setting $setting)
    {

        return new UpdateSettingResource($request) ;
        
    }
}
