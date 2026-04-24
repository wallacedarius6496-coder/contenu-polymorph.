<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::with(['commentaires', 'tags'])->get();
        return view('videos.index', compact('videos'));
    }

    public function show($id)
    {
        $video = Video::with(['commentaires', 'images', 'tags'])->findOrFail($id);
        return view('videos.show', compact('video'));
    }
}