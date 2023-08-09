<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\VimeoManager;

class MovieController extends Controller
{
    public function upload(Request $request, VimeoManager $vimeo)
    {
        ini_set('memory_limit', -1);
        $file = "/var/www/vhosts/iris-strata.com/movies_filmhub_upload/optimzed/kn49498_tears_of_steel_108620.mp4";
        $file_path = $vimeo->upload($file, [
            "name" => "Fruit De La Patience",
            "description" => "This is test file"
        ]);

       print_r($file_path);
    }
}
