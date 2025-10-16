<?php

// app/Http/Controllers/SitemapUploadController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class SitemapUploadController extends Controller
{
    // Admin page (simple upload form)
    public function create()
    {
        return view('admin.sitemap-upload');
    }

    // Handle upload & replace existing sitemap
    public function store(Request $request)
    {
        $request->validate([
            'sitemap' => [
                'required',
                'file',
                'mimetypes:text/xml,application/xml,text/plain', // some browsers send text/plain
                'mimes:xml',
                'max:20480', // 20 MB
            ],
        ]);

        // Ensure the directory exists on the public disk
        $disk = Storage::disk('public');
        $dir  = 'sitemaps';
        if (!$disk->exists($dir)) {
            $disk->makeDirectory($dir);
        }

        // Always save as sitemap.xml (replace old)
        $disk->putFileAs($dir, $request->file('sitemap'), 'sitemap.xml');

        return back()->with('status', 'Sitemap uploaded successfully!');
    }

    // Serve the saved sitemap with correct headers
    public function show()
    {
        // Option A — serve from storage/app/public/sitemaps/sitemap.xml
        $path = Storage::disk('public')->path('sitemaps/sitemap.xml');
        if (is_file($path)) {
            return Response::file($path, [
                'Content-Type'  => 'application/xml; charset=UTF-8',
                'Cache-Control' => 'public, max-age=3600',
            ]);
        }

        // Option B — fallback if you copied to public_path():
        $fallback = public_path('sitemap.xml');
        if (is_file($fallback)) {
            return Response::file($fallback, [
                'Content-Type'  => 'application/xml; charset=UTF-8',
                'Cache-Control' => 'public, max-age=3600',
            ]);
        }

        abort(404, 'Sitemap not found.');
    }
}
