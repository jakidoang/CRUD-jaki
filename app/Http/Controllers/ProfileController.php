<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Display a listing of profiles.
     */
    public function index()
    {
        $profiles = Profile::with('user')->get();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new profile.
     */
    public function create()
    {
        $users = User::all();
        return view('profiles.create', compact('users'));
    }

    /**
     * Store a newly created profile in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'biodata' => 'required|string|max:255',
            'age' => 'required|integer',
            'address' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
            'user_id' => 'required|exists:users,id',
        ]);

        $data = $request->all();

        // Generate UUID for the 'id' field
        $data['id'] = (string) Str::uuid();

        // Menyimpan file avatar jika ada
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        Profile::create($data);

        return redirect()->route('profiles.index')->with('success', 'Profile created successfully.');
    }


    /**
     * Display the specified profile.
     */
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified profile.
     */
    public function edit(Profile $profile)
    {
        $users = User::all();
        return view('profiles.edit', compact('profile', 'users'));
    }

    /**
     * Update the specified profile in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'biodata' => 'required|string|max:255',
            'age' => 'required|integer',
            'address' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
            'user_id' => 'required|exists:users,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('avatar')) {

            if ($profile->avatar && \Storage::exists('public/' . $profile->avatar)) {
                \Storage::delete('public/' . $profile->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $profile->update($data);

        return redirect()->route('profiles.index')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified profile from storage.
     */
    public function destroy(Profile $profile)
    {

        if ($profile->avatar && \Storage::exists('public/' . $profile->avatar)) {
            \Storage::delete('public/' . $profile->avatar);
        }


        $profile->delete();

        return redirect()->route('profiles.index')->with('success', 'Profile deleted successfully.');
    }

}
