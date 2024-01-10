<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\MediaHelper;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();

        $experiencelist = explode(',', $about->experiencelist);
        return view('admin.about.index', compact('about','experiencelist'));
    }

    public function update(Request $request)
    {


        $about = About::first();

      

        $about->header_title = $request->header_title;
        $about->title = $request->title;
        $about->number = $request->number;
        $about->experience = $request->experience;
        $about->description = $request->description;
        $about->save();
        return back()->with('success', 'About has been updated');

    }

}
