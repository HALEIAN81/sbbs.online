<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Domain;
use \Illuminate\Support\Facades\Storage;

class DomainController extends Controller
{
    public function store ( Request $request) {

        $request->validate([
            'name' => 'required|min:3|max:50',
            'image' => 'image',
            'domain_name' => 'required|unique:domains|min:3|max:128',
            'price' => 'required|numeric|min:0,max:10000',
            'type' => 'required|string|min:3,max:10',
        ]);

        $path = Storage::disk('public')->putFile('images', $request->file('image'));

        $domain = new Domain();
        $domain->fill($request->all());
        $domain->image = $path;
        $domain->save();

        return redirect()->back()->with('success', 'Success!!!');

        }

    public function index ( Request $request) {

        return view('inventory');
    }
}




