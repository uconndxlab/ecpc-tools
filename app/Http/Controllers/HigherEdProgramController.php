<?php

namespace App\Http\Controllers;

use App\Models\HigherEdProgram;
use Illuminate\Http\Request;

class HigherEdProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = HigherEdProgram::all();
        return view('programs.index', compact('programs'));
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
    public function show(HigherEdProgram $higherEdProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HigherEdProgram $higherEdProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HigherEdProgram $higherEdProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HigherEdProgram $higherEdProgram)
    {
        //
    }
}
