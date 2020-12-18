<?php

namespace App\Http\Controllers;

use App\Divition;
use App\Employee;
use App\Position;
use Illuminate\Http\Request;

class FrontendAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home.about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stakeholder()
    {
        // $div = Divition::all();
        // $pos = Position::all();//ambil data posisi all
        // $emp = Employee::all();
        $dir = Employee::where('position_id','1')->first();
        $emp = Employee::where('position_id','2')->get();
        return view('frontend.home.stakeholder',[
        //     'div' => $div,
        //     'pos' => $pos,
        //     'emp' => $emp,
            'emp' => $emp,
            'dir' => $dir,
        ]);

        // return view('home.stakeholder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function statistic()
    {
        return view('frontend.home.statistic');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}