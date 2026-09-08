<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $json = file_get_contents(
            storage_path('app/gallery.json')
        );

        $gallery = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'Invalid gallery.json');
        }

        return view('website.pages.gallery', compact('gallery'));
    }
}