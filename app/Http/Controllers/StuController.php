<?php

namespace App\Http\Controllers;

use App\stu;
use Illuminate\Http\Request;

class StuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stu = stu::latest()->paginate(5);
  
        return view('stu.index',compact('stu'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
  
        stu::create($request->all());
   
        return redirect()->route('stu.index')
                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stu  $stu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stu = stu::find($id);
        return view('stu.show',compact('stu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stu  $stu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stu = stu::find($id);
        return view('stu.edit',compact('stu','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stu  $stu
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $stu = stu::find($id);
        $stu->name = request('name');
        $stu->email = request('email');
        $stu->save();
                $request->validate([
                'name' => 'required',
                'email' => 'required',
         ]);
        $stu->update($request->all());
  
        return redirect()->route('stu.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stu  $stu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        stu::find($id)->delete();
  
        return redirect()->route('stu.index')
                        ->with('success','User deleted successfully');
    }
}