<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\PremiumDomainsTable;



class ProductAddMoreController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function addMore()

    {

        return view("addMore");

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function addMorePost(Request $request)

    {

        $request->validate([

            'addmore.*.id' => 'required',

            'addmore.*.company_name' => 'required',

            'addmore.*.domain_name' => 'required',

            'addmore.*.price' => 'required',

        ]);



        foreach ($request->addmore as $key => $value) {

            PremiumDomainsTable::create($value);

        }



        return back()->with('success', 'Record Created Successfully.');

    }

}
