<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('roles.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Buat data baru dengan UUID
        Role::create([
            'id' => \Illuminate\Support\Str::uuid()->toString(),
            'name' => $request->name,
        ]);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    // Display the specified resource.
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    // Show the form for editing the specified resource.
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role->update($request->all());

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
