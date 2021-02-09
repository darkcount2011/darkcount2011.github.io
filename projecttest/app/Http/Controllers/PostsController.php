<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Mainpage;

class PostsController extends Controller
{


    public function show($slug)
    {
//        $post = DB::table('mainpage')->where('slug', $slug)->first();
        return view( 'post', [
            'post' => Mainpage::where('slug', $slug)->firstOrFail()
        ]);
    }

}

