<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\Resume;

class AddressController extends Controller
{
    public function create(Resume $resume)
    {
        return view('addresses.create', ['resume' => $resume]);
    }

    public function store(Request $request)
    {
        $resume_id = $request->resume;

        $data = $request->validate([
            'country' => 'required',
            'zip_code' => 'required|numeric',
            'city' => 'required',
            'street' => 'required',
            'street_number' => 'required|numeric',
            'number' => 'numeric|nullable'
        ]);

        $data['resume_id'] = $resume_id;

        $newAddress = Address::create($data);

        return redirect(route('resume.index'))->with('success', 'Resume added succesfully!');
    }

    public function edit(Address $address)
    {
        return view('addresses.edit', ['address' => $address]);
    }

    public function update(Address $address, Request $request)
    {
        $data = $request->validate([
            'country' => 'required',
            'zip_code' => 'required|numeric',
            'city' => 'required',
            'street' => 'required',
            'street_number' => 'required|numeric',
            'number' => 'numeric|nullable'
        ]);

        $address->update($data);
        
        return redirect(route('resume.index'))->with('success', 'Resume updated succesfully!');
    }
}
