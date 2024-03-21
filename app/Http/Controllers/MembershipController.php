<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'nullable|string',
            
        ]);

        $membership = new Membership;
        $membership->fill($validatedData);

        $membership->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
