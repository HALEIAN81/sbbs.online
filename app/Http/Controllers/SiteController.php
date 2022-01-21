<?php

namespace App\Http\Controllers;
use App\Models\Domain;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function sitepost () {
        return view('welcome')->with(['domains' => Domain::get()]);
    }

}
