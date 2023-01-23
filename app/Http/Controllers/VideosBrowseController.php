<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Category;
use Illuminate\Http\Request;

class VideosBrowseController extends Controller
{
    public function index($category_id) {

        $category = Category::findOrFail($category_id);

        $videos = Video::with('user')->where('category_id', $category_id)->orderBy('id', 'desc')->get();

        return view('video_browse', compact('videos', 'category'));
    }

    public function details(Video $video) {

        $video->load(['user', 'category']);
    
        //$v = Video::width(['user', 'category'])->findOrFail($video);

       

        return view('video_details', compact('video'));
    }
}
