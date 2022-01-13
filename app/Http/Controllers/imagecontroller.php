<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class imagecontroller extends Controller
{
    protected function showJobImage($filename)
    {
    //check image exist or not
    $exists = Storage::disk('public')->exists('file/'.$filename);

        if($exists) {

            //get content of image
            $content = Storage::get('public/file/'.$filename);
            //get mime type of image
            $mime = Storage::mimeType('public/file/'.$filename);
            //prepare response with image content and response code
            $response = Response::make($content, 200);
            //set header
            $response->header("Content-Type", $mime);
            // return response
            return $response;
        } else {
            abort(404);
        }
    }
}
