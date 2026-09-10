<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display all videos.
     */
    public function index()
    {
        $videos = Video::latest()->get();

        return view('admin.pages.video-list', compact('videos'));
    }


    /**
     * Show form for creating a new video.
     */
    public function create()
    {
        return view('admin.pages.video-create');
    }


    /**
     * Store a newly created video.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'youtube_url' => ['required', 'url'],
            'description' => ['nullable', 'string'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        Video::create($validated);

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video added successfully.');
    }


    /**
     * Show form for editing a video.
     */
    public function edit(Video $video)
    {
        return view('admin.pages.video-edit', compact('video'));
    }


    /**
     * Update the specified video.
     */
    public function update(Request $request, Video $video)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'youtube_url' => ['required', 'url'],
            'description' => ['nullable', 'string'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        $video->update($validated);

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video updated successfully.');
    }


    /**
     * Delete the specified video.
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video deleted successfully.');
    }


    /**
     * Toggle video active status.
     */
    public function toggleStatus(Video $video)
    {
        $video->update([
            'is_active' => !$video->is_active,
        ]);

        return redirect()
            ->route('admin.videos.index')
            ->with('success', 'Video status updated successfully.');
    }
}