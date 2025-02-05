<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\Table\TableSection;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sections.section');
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
        $input = $request->all();
        $b_exists = Section::where('section_name','=',$input['section_name'])->exists();
        if($b_exists){
            session()->flash('error','Section already exists');
            return redirect('/sections');
        }
        else{
            Section::create([
                'section_name'=>$request->section_name,
                'description'=>$request->description,
                'Created_by'=> (Auth::user()->name),
            ]);
        }
        session()->flash('Add','Section added successfully');
        return redirect('/sections');
            

    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sections $sections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
    }
}
