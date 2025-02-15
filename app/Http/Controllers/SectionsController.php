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
        $sections = Section::all();
        return view('sections.section',compact('sections'));
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
        $validate = $request->validate([

            'section_name' =>'required|unique:sections|max:255',
            'description' => 'required',
        ],

            [
                'section_name.required'=>'يرجي إدخال إسم القسم',
                'section_name.unique'=>'إسم القسم مسجل مسبقا',
                'description.required'=>'يرجي إدخال البيانات'

            
        ]);
         
        $input = $request->all();

       
            Section::create([
                'section_name'=>$request->section_name,
                'description'=>$request->description,
                'Created_by'=> (Auth::user()->name),
            ]);
         
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
    public function update(Request $request)
    {
        $id = $request->id;
        $this->validate($request ,[
            'section_name' =>'required|max:255|unique:sections,section_name,'.$id,
            'description' => 'required',
        ],

            [
                'section_name.required'=>'يرجي إدخال إسم القسم',
                'section_name.unique'=>'إسم القسم مسجل مسبقا',
                'description.required'=>'يرجي إدخال البيانات'

            
        ]);
        $sections = Section::find($id);
        $sections->update([
            'section_name' =>$request->section_name,
            'description' =>$request->description,

        ]);
        session()->flash('edit','تم تعديل القسم بنجاح');
        return redirect('/sections');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Section::find($id)->delete();
        session()->flash('delete','تم حذف القسم بنجاح');
        return redirect('/sections');
    }
}
