<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $edit_general_Setting = Generalsetting::find($id);


        return view('admin.general-setting.edit', compact('edit_general_Setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $general_setting = Generalsetting::find($id);

        $request->validate([
            'contact_info' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|string',
            'bazar_logo_site' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'home_page_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Instagram' => 'required|url',
            'Facebook' => 'required|url',
            'Twitter' => 'required|url',
            'Snapchat' => 'required|url'

        ]);


        if (!$general_setting) {
            return redirect()->route('general-settings.index')->with('error', 'General Setting not found');
        }

        $general_setting->contact_info = $request->contact_info;
        $general_setting->email = $request->email;
        $general_setting->address = $request->address;
        $general_setting->Facebook = $request->Facebook;
        $general_setting->Twitter = $request->Twitter;
        $general_setting->Snapchat = $request->Snapchat;
        $general_setting->Instagram = $request->Instagram;


        if ($request->hasFile('bazar_logo_site')) {

            if ($general_setting->bazar_logo_site) {
                Storage::delete('public/' . $general_setting->bazar_logo_site);
            }

            $filePath = $request->file('bazar_logo_site')->store('/', 'public');
            $general_setting->bazar_logo_site = $filePath;
        }

        if ($request->hasFile('home_page_banner')) {
            if ($general_setting->home_page_banner) {
                Storage::delete('public/' . $general_setting->home_page_banner);
            }
            $bannerPath = $request->file('home_page_banner')->store('/', 'public');
            $general_setting->home_page_banner = $bannerPath;
        }

        $general_setting->save();

        return redirect()->route('general-settings.edit', $general_setting->id)->with('success', 'General Setting Records Updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
