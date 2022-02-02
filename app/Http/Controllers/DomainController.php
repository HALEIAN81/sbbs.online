<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Domain;
use \Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


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

        return view('inventory', ['domains' => Domain::paginate(5)]);
    }

    public function details ( Request $request) {

        return view('details', ['domains' => Domain::paginate(4)]);
    }

    public function information ( Request $request) {

        return view('information', ['domains' => Domain::get()]);
    }

    public function premiumDomainList() {

        return view('premiumdomains', ['domains' => Domain::paginate(5)]);
    }

    public function premiumAppList() {

        return view('premiumapps', ['domains' => Domain::get()]);
    }

    public function shortData() {

        return view('domains.shortData', [
        'domains' => Domain::paginate(3)
    ]);
}


}




