<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class TestController extends Controller
{
    public function test()
    {
        $googleDriveStorage = Storage::disk('google_drive');

//        $dir = '/';
//        $recursive = false;
//        $contents = collect($googleDriveStorage->listContents($dir, $recursive));
//        dd($contents);

        $googleDriveStorage = Storage::disk('google_drive');
        $result = $googleDriveStorage->put('test.txt', 'Hello world');
        dd($result);
    }
}
