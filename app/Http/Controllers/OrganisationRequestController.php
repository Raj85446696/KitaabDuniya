<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\OrganisationRequest;
use App\Models\User;


class OrganisationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all the organisation requests
        $organisationRequests = OrganisationRequest::all();

        // Pass the data to the view
        return view('org_request.index', compact('organisationRequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('org_request.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:organisation_requests,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'gender' => 'required|in:male,female,other',
            'org_licence' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // File Upload
        $orgLicencePath = null;
        if ($request->hasFile('org_licence')) {
            $orgLicencePath = $request->file('org_licence')->store('organisation_licences', 'public');
        }

        OrganisationRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'org_licence' => $orgLicencePath,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/');

    }


    public function addUser($id)
    {
        $organisationRequest = OrganisationRequest::find($id);

        if (!$organisationRequest) {
            return redirect()->back()->with('error', 'Organisation request not found');
        }

        // Create the user
        User::create([
            'name' => $organisationRequest->name,
            'email' => $organisationRequest->email,
            'phone' => $organisationRequest->phone,
            'address' => $organisationRequest->address,
            'gender' => $organisationRequest->gender,
            'password' => Hash::make('default_password'),
        ]);

        // Optionally, delete the organisation request after adding the user
        // $organisationRequest->delete();

        // Flash success message
        return redirect()->route('org_request.index')->with('success', 'Organisation added to users table successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
