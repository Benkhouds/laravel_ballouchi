<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;


class AddressController extends Controller
{
    //
    public function index()
    {
        $addresses = Address::all();
        return view('test.address')->with(compact('addresses'));
    }
    public function store(Request $request)
    {
        //make a real valdation
        $attributes = request()->validate([
            'city' => 'required',
            'postal_code' => 'required|integer',
            'street' => 'required',
            'region' => 'required',
        ]);

        Address::create($attributes);

        return redirect('/address');
    }
    public function show(Request $request)
    {
        return view('test.show_one_address', [
            'address' => Address::findOrFail($request->route('id')),

        ]);
    }
    public function destroy(Request $request)
    {
        $addresse = Address::findOrFail($request->route('id'));
        $addresse->delete();
        return redirect('/address');
    }
}
