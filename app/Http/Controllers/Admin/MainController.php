<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;

//use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
//        Tag::create([
//            'title' => 'Привет мир'
//        ]);

//        $tag = new Tag();
//        $tag->title = 'Привет мир';
//        $tag->save();

        return view('admin.index');
    }
}
