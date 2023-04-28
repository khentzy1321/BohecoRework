<?php

namespace App\Http\Controllers;

use App\Models\Advisory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
class AdvisoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisories = Advisory::orderBy('created_at', 'desc')->paginate(4);
        return view('advisory.index', compact('advisories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advisories = Advisory::all();
        return view('advisory.create',compact('advisories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'place' => 'required',
            'info' => 'required',
            'dateTime' => 'required'
        ]);
        $advisories = new Advisory();
        $advisories->place = $request->place;
        $advisories->info = $request->info;
        $advisories->dateTime = $request->dateTime;
        
        $advisories->save();
        Alert::success('Added Successfully');
        return redirect()->route('advisory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advisory = Advisory::find($id);
        return view('advisory.edit',compact('advisory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'place' => 'required',
            'info' => 'required',
            'dateTime' => 'required'
        ]);

        $advisory = Advisory::find($id);
        $advisory->place = $request->place;
        $advisory->info = $request->info;
        $advisory->dateTime = $request->dateTime;
       
        $advisory->save();
        Alert::success('Updated Successfully');
        return redirect()->route('advisory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advisory = Advisory::find($id);
        $advisory->delete();

        Alert::success('Deleted Successfully',);
        return redirect()->back();
    }
}
