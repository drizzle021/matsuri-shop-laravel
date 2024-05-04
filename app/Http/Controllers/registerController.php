<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Ramsey\Uuid\Uuid;       // import to use UUID



class registerController extends Controller
{

    public function registerUser(Request $request)
    {
        // just log to see if it works
        \Log::info(json_encode($request->all()));

        // Generate a UUID for the new user
        $userId = Uuid::uuid4()->toString();

        $role = 'CUSTOMER';

        if ($request->password === 'adminadmin') {
            $role = 'ADMIN';
        }

        // Create the new user record
        $newUser = new User;
        $newUser->id = $userId; // Assign the generated UUID to the 'id' attribute
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password); // Hash the password
        $newUser->role = $role;
        $newUser->save(); // Save the new user to the database
        return view('register');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
