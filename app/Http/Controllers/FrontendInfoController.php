<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabang;
use App\Info;

class FrontendInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $divition = Divition::all();
        // $position = Position::all();
        $cabang = Cabang::all();

        $info = Info::with(['cabang'])->get();
        // var_dump($category);
        if($request->ajax()){
            return datatables()->of($info)
            ->addcolumn('action',function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tootip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('frontend.home.info',compact('info','cabang'));

        // return view('backend.Info.home',compact('Info','divition','position','cabang'));
        // return json_encode($Info, JSON_PRETTY_PRINT);
        // return $Info;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $info = Info::find($id);

        return view('frontend.home.info_detail',compact('info'));    }

        // $where = array('id' => $id);
        // $post  = Info::with(['cabang'])->where($where)->first();
        // // console.log($post);
        // return response()->json($post);
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
