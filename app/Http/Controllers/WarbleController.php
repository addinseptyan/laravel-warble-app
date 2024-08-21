<?php

namespace App\Http\Controllers;

use App\Models\Warble;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WarbleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('warbles.index');
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
        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);

        $request->user()->warbles()->create($validated);

        return redirect(route('warbles.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Warble $warble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warble $warble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warble $warble)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warble $warble)
    {
        //
    }
}
