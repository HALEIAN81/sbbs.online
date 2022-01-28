<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Domain;

class DomainController extends Controller
{
    public function store ( Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:50',
            'image' => 'image|nullable|max:200',
            'domain_name' => 'required|unique:domains|min:3|max:128',
            'price' => 'required|numeric|min:0,max:10000',
            'type' => 'required|enum|min:3,max:10'
        ]);

        $domain = new Domain();
        $domain->fill($request->all());
        $domain->save();

        return redirect()->back()->with('success', 'Success!!!');
    }

}



