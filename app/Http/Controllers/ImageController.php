<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Domain;

class ImageController extends Controller
{
    public function viewImage($image_id)
{
    return Storage::get($image_id . '.png');

}
