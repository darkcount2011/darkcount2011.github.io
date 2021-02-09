<?php

namespace App\Http\Controllers;

use App\Models\faqpage;
use Illuminate\Http\Request;

class FaqpageController extends Controller
{
    public function show($faqpages)
    {
        return view( 'faqpage', [
            'faqpages' => Faqpage::all()
        ]);
    }
    //
}
