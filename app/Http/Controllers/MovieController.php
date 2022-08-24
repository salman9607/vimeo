<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\VimeoManager;

class MovieController extends Controller
{
    public function upload(Request $request, VimeoManager $vimeo)
    {
        $file = $request->filepond;

        $file_path = $vimeo->upload($file, [
            "name" => "Yasir Test",
            "description" => "This is test file"
        ]);

        dd($file_path);
    }
}
